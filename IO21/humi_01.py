# -*- coding: utf-8 -*-
import RPi.GPIO as GPIO
import time
import datetime
import math
import dht11

def mround(val, digit=0):
    p = 10 ** digit
    return (val * p * 2 + 1) // 2 / p

# def swv(temp):
#     e = 6.1078 * math.pow(10,((7.5 * temp) / (temp + 237.3)))
#     a = (217 * e) / (temp + 237.15)
#     return a

GPIO.setmode(GPIO.BOARD)
HSENSOR = 16

humisensor = dht11.DHT11(pin=HSENSOR)

try:
    while True:
        data = humisensor.read()
        uidex = 0.81 * str(int(mround(data.temperature))) + 0.01 * str(int(mround(data.humidity)))(0.99 * str(int(mround(data.temperature))) - 14.3) + 46.3

        if data.is_valid():
            print(str(datetime.datetime.now()))
            print("Temp: " + str(int(mround(data.temperature))) + "[C]")
            print("Humi: " + str(int(mround(data.humidity))) + "[%]")
            print("UIdx: " + str(uidex))
            # print("AHum: " + str(int(swv(data.))) + "[g/m3]")

        else:
            print("ERROR")
        time.sleep(10)
except KeyboardInterrupt:
    pass

GPIO.cleanup()
print('Program Stopped.')