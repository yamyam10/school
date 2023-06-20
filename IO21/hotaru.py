# -*- coding: utf-8 -*-
import RPi.GPIO as GPIO
import time
import math

#GPIOを初期設定
GPIO.setmode(GPIO.BOARD)
GLED = 15

GPIO.setup(GLED,GPIO.OUT)
p = GPIO.PWM(GLED, 50)#GLEDピンでPWM出力。PWM周波数50Hz

#PWMを開始
#LEDの初期状態は消灯（デューティ比0）にする
p.start(0)

#明るさ変化している波形（正弦波）を求めるための定数
WAVE_SCALE = 0.4
WAVE_SHIFT = 1-(2*WAVE_SCALE)

#時間管理のための変数をゼロクリア
counter = 0


try:
    #メインループ
    while True:
        #新たなデューティ比を計算
        duty = math.floor(100 * ((math.sin(counter/100*math.pi)*WAVE_SCALE)+(WAVE_SCALE+WAVE_SHIFT)))
        if duty<0:
            duty = 0

            #デューティ比を再設定
            p.ChangeDutyCycle(duty)
            print(duty)     #デューティ比を画面設定（検査用）

            #時間管理用変数を更新
            counter = (counter + 1)%200

            time.sleep(0.02)
except KeyboardInterrupt:
    pass    #何もしない・・・ただ単にWhileループを脱出する

#ループ脱出後の処理
p.stop()            #PWM処理を停止
GPIO.cleanup()      #GPIOのポート設定を初期化
print('Program Stopped.')