# -*- coding: utf-8 -*-

import AQM0802
import math
import time

def mround(val, digit=0):
    p = 10 ** digit
    return (val * p * 2 + 1) // 2 / p

def char4graphset(target):
    target.chardef(0,[0x10,0x10,0x10,0x10,0x10,0x10,0x10,0x10,])
    target.chardef(1,[0x18,0x18,0x18,0x18,0x18,0x18,0x18,0x18,])
    target.chardef(2,[0x1C,0x1C,0x1C,0x1C,0x1C,0x1C,0x1C,0x1C,])
    target.chardef(3,[0x1E,0x1E,0x1E,0x1E,0x1E,0x1E,0x1E,0x1E,])
    target.chardef(4,[0x1F,0x1F,0x1F,0x1F,0x1F,0x1F,0x1F,0x1F,])

def graphwrite(target,val,min,max,width):
    if (width < 1) or (8 < width):
        print("graphwrite: chars range over")
        return -1
    barlines = width * 5
    value = val
    if(value < min):
        value = min
    elif(value > max):
        value = max
    step = (max - min) / barlines
    bars = int(mround((value - min) / step))
    chars = [ord(' '),0x00,0x01,0x02,0x03,0x04]
    message = []
    for i in range(width):
        if bars >= 5:
            message.append(chars[5])
            bars = bars -5
        else:
            message.append(chars[bars])
            bars = 0
    target.putbLCD(message)

lcd = AQM0802.AQM0802()
lcd.initsig(lcd._dispOn_cursorOff)

char4graphset(lcd)

lcd.setpos(0)
lcd.putsLCD("sin wave")

theta = 0
while True:
    lcd.setpos(1)
    val = math.sin((theta / 10) * math.pi) + 1
    graphwrite(lcd,val,0,2,8)
    theta = (theta + 1) % 20
    time.sleep(0.2)