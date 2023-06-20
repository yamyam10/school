# -*- coding: utf-8 -*-
import RPi.GPIO as GPIO #RPi.GPIOのインポート
import time             #timeモジュールのインポート
import math             #mathモジュールのインポート
import spidev           #spidevモジュールのインポート

#初期周波数と最終周波数
f0 = 220                #初期周波数
fend = 440              #最終周波数

#SPI通信を初期設定
spi = spidev.SpiDev()
spi.open(0, 0)              #BUS0 CS0を使用する
spi.max_speed_hz = 100000   #SPIの最高通信速度を必ず設定する(100kHz)

#センサが接続されている（MCP3008の）チャンネル
SENSOR_CH = 0

#基準電圧の値
VREF = 4.78

#圧電ブザーピン番号指定
GPIO.setmode(GPIO.BOARD)
BZ = 16                 #圧電ブザーピン番号
#圧電ブザー出力指定
GPIO.setup(BZ, GPIO.OUT)
p = GPIO.PWM(BZ, f0)    #PMW周波数を初期周波数にする

#MCP3008から値を取り込む関数
def readAdc(channel):
    senddata = [1, (8 + channel) << 4, 0]   #送信データの作成
    adc = spi.xfer2(senddata)               #データを送信して、同時にMCP3008からの応答を受信
    data = ((adc[1] & 3) << 8) + adc[2]     #受信したデータから意味のある部分だけを抽出して、AD値に直す
    return data

#MCP3008から取得したAD値を電圧に換算する関数
def convVolts(data, vref):
    volts = (data * vref) / float(1023)
    return volts

#赤外線距離センサGP2Y0A21YK0Fから取得した電圧を距離に換算する関数
def convDist(vin):
    if vin != 0:
        dist = 26.5769 / (math.pow(vin, 1.28))
    else:
        dist = 99999
    return dist

try:
    while True:                     #ここからメインループ開始
        data = readAdc(SENSOR_CH)       #MCP3008からAD値を取得してdataに代入
        volts = convVolts(data, VREF)   #取得したAD値を電圧に変換してvoltsに代入
        dist = convDist(volts)          #取得した電圧を距離に変換してdistに代入

        if (10.0 <= dist) and (dist <= 80.0):
            f = (80 - dist) * (fend - f0) / (80 - 10) + f0
            p.ChangeFrequency(f)        #ブザーに出力する周波数を変更
            p.start(50)                 #デューティ比は50に固定
        else:
            f = 0
            p.stop()                #PWM処理を停止

        #画面に表示して0.1秒待機
        print(str(dist) + '[cm]')
        print(str(f) + '[Hz]')
        time.sleep(0.1)
except KeyboardInterrupt:   #Ctrl + Cを入力で、ユーザ自身が実行しているプログラムを停止
    pass    #whileループを脱出する

spi.close()
print('Program Stopped.')
