# -*- coding: utf-8 -*-
import RPi.GPIO as GPIO
import time
import datetime
import dht11
import ambient

def mround(val, digit=0):
    p = 10 ** digit
    return (val * p * 2 + 1) // 2 / p

GPIO.setmode(GPIO.BOARD)
HSENSOR = 16

humisensor = dht11.DHT11(pin=HSENSOR)

ambi = ambient.Ambient(55041, "47e77a062fa7fdc2")

try:
    while True:
        data = humisensor.read()

        if data.is_valid():
            round_temp = int(mround(data.temperature))
            round_humi = int(mround(data.humidity))

            print(str(datetime.datetime.now()))
            print("Temp: " + str(round_temp) + "[C]")
            print("Humi: " + str(round_humi) + "[%]")

            r = ambi.send({'d1': round_temp,'d2': round_humi})
        
            if r.status_code == 200:
                print("SUCCESS!")
            else:
                print("SEND ERROR")
        else:
            print("SENSOR ERROR")
            
        time.sleep(10)
except KeyboardInterrupt:
    pass

GPIO.cleanup()
print('Program Stopped.')