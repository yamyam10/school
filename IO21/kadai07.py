# -*- coding: utf-8 -*-
#必要な関数を使用するためのライブラリ読み込み
import RPi.GPIO as GPIO #Python で Paspberry Pi の制御をするためのライブラリを読み込み
import time             #time 関数を使用するためのライブラリを読み込み
import datetime         #datetime 関数を使用するためのライブラリを読み込み
import math             #math 関数を使用するためのライブラリを読み込み
import dht11            #dht11 関数を使用するためのライブラリを読み込み
import ambient          #ambient 関数を使用するためのライブラリを読み込み

#数値を四捨五入する関数を宣言
#python 標準の round() は偶数丸めという丸め方をするので
#正しく四捨五入する関数を用意
def mround(val, digit=0):
    p = 10 ** digit
    return (val * p * 2 + 1) // 2 / p

#飽和水蒸気量を求める関数(引数は気温)
def swv(temp):
    e = 6.1078 * math.pow(10,((7.5 * temp) / (temp + 237.3)))
    a = (217 * e) / (temp + 237.15)
    return a

#GPIOを初期設定
GPIO.setmode(GPIO.BOARD)    #ポートをボードのピン番号で指定
HSENSOR = 16                #センサーは 16 番ピンに接続

#DHT11 を使用するための初期設定
#引数 pin で DHT11 が接続されている GPIO ピン番号を指定
humisensor = dht11.DHT11(pin=HSENSOR)

#ambient を使用するための初期設定
#チャンネルID を左に書いてライトキーを右にダブルクォーテーションで囲んで書く
#ambi = ambient.Ambient(チャンネルID, "ライトキー")
ambi = ambient.Ambient(55041, "47e77a062fa7fdc2")

try:
    #メインループ
    while True:
        #DHT11 からデータを取得出来たら時刻と共に画面に表示
        data = humisensor.read()

        if data.is_valid():
            #不快指数を求めるための数式
            disc = 0.81 * data.temperature + 0.01 * data.humidity * (0.99 * data.temperature - 14.3) + 46.3
            #int は引数に指定した数値または文字列を整数として取得する
            round_temp = int(mround(data.temperature))  #気温(mround を使用して正しく四捨五入して int で整数として取得する)
            round_humi = int(mround(data.humidity))     #湿度(mround を使用して正しく四捨五入して int で整数として取得する)
            round_disc = (round(disc,2))                #不快指数(round を使って小数点第二位までを表示)
            round_abso = (swv(data.temperature))        #絶対湿度

            #str は引数に指定したオブジェクトを文字列に変換する
            print(str(datetime.datetime.now()))             #日時(日付と時刻)を表示する
            print("Temp: " + str(round_temp) + "[C]")       #round_temp で取ってきたデータを str で文字列に変換して表示する
            print("Humi: " + str(round_humi) + "[%]")       #round_humi で取ってきたデータを str で文字列に変換して表示する
            print("UIdx: " + str(round_disc))               #round_disc で取ってきたデータを str で文字列に変換して表示する
            print("AHum: " + str(round_abso) + "[g/m3]")    #round_abso で取ってきたデータを str で文字列に変換して表示する

            #d1 を round_temp、d2 を round_humi、d3 を round_disc、d4 を round_abso に設定しアンビエントに送信する
            r = ambi.send({'d1': round_temp,'d2': round_humi,'d3': round_disc,'d4': round_abso})

            #status_code 200 はリクエストが成功した場合に返すレスポンスコード
            if r.status_code == 200:
                #読み取り成功の表示
                print("SUCCESS!")
            else:
                #送信エラーの表示
                print("SEND ERROR")
        else:
            #センサーエラーの表示
            print("SENSOR ERROR")
            
        #10 秒おきに値を取得する
        time.sleep(10)
except KeyboardInterrupt:   #Ctrl + C を入力で、ユーザ自身が実行しているプログラムを停止
    pass    #while ループを脱出する

#GPIO の後始末をして終了
GPIO.cleanup()
print('Program Stopped.')