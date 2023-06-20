# -*- coding: utf-8 -*-
import RPi.GPIO as GPIO
import time
import math
import spidev

#SPI通信を初期設定
spi = spidev.SpiDev()
spi.open(0, 0)
spi.max_speed_hz = 100000

#センサが接続されている（MCP3008の）チャンネル
SENSOR_CH = 0

#基準電圧の値
VREF = 4.78

#MCP3008から値を取り込む関数
def readAdc(channel):
    senddata = [1, (8 + channel) << 4, 0]
    adc = spi.xfe2(senddata)
    data = ((adc[1] & 3) << 8) + adc[2]
    return data

#MCP3008から取得したAD値を電圧に換算する関数
def convVolts(data, vref):
    volts = (data * vref) / float(1023)
    return volts

#赤外線距離センサGP2Y0A21YK0Fから取得した電圧を距離に換算する関数
def convDist(vin):
    dist = 26.5769 / (math.pow(vin, 1.28))
    return dist

try:
    while True:
        data = readAdc(SENSOR_CH)
        volts = convVolts(data, VREF)
        dist = convDist(volts)

        print(str(dist) + '[cm]')
        time.sleep(1)
except KeyboardInterrupt:
    pass

spi.close()
print('Program Stopped.')
