# -*- coding: utf-8 -*-
from itertools import count
import RPi.GPIO as GPIO
import time
import math

Do = 261
Re = 294
Mi = 329
Fa = 349
So = 392
La = 440
Si = 493
Do2 = 523
Re2 = 587
Mi2 = 659
Fa2 = 698
So2 = 784
La2 = 880
Si2 = 988
Do3 = 1047
Re3 = 1175
Mi3 = 1319
Fa3 = 1397
So3 = 1568

f0 = 55
fend = 220

# snm = ('A','A#/Bb','B','C','C#/Db','D','D#/Eb','E','F','F#/Gb','G','G#Ab')

snm = (Mi2, So2, Mi3, Do3, Re3,)

count = 0

GPIO.setmode(GPIO.BOARD)
BZ = 16
GPIO.setup(BZ,GPIO.OUT)
p = GPIO.PWM(BZ, f0)

p.start(50)

while True:
    f = f0 * math.pow(2, count / 12)
    print(str(snm[count%12])+' '+str(f))

    p.ChangeFrequency(f)
    time.sleep(1)
    count = count+1
    if f >= fend:
        break
p.stop()
GPIO.cleanup()