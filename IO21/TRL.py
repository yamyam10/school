# -*- coding: utf-8 -*-
import RPi.GPIO as GPIO 
import time
import math
import spidev

f0 = 220
fend = 440

spi = spidev.SpiDev()
spi.open(0, 0)
spi.max_speed_hz = 100000

SENSOR_CH = 0

VREF = 4.78

GPIO.setmode(GPIO.BOARD)
BZ = 16
GPIO.setup(BZ, GPIO.OUT)
p = GPIO.PWM(BZ, f0)

def readAdc(channel):
    senddata = [1, (8 + channel) << 4, 0]
    adc = spi.xfer2(senddata)
    data = ((adc[1] & 3) << 8) + adc[2]
    return data

def convVolts(data, vref):
    volts = (data * vref) / float(1023)
    return volts

def convDist(vin):
    if vin != 0:
        dist = 26.5769 / (math.pow(vin, 1.28))
    else:
        dist = 99999
    return dist

try:
    while True:
        data = readAdc(SENSOR_CH)
        volts = convVolts(data, VREF)
        dist = convDist(volts)

        if (10.0 <= dist) and (dist <= 80.0):
            f = (80 - dist) * (fend - f0) / (80 - 10) + f0
            p.ChangeFrequency(f)
            p.start(50)
        else:
            f = 0
            p.stop()

        print(str(dist) + '[cm]')
        print(str(f) + '[Hz]')
        time.sleep(0.1)
except KeyboardInterrupt:
    pass

spi.close()
print('Program Stopped.')
