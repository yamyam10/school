# -*- coding: utf-8 -*-
import time
import datetime
import AQM0802 as LCDL

lcd = LCDL.AQM0802()
lcd.initsig(lcd._dispOn_cursorOff)

while True:
    dt_now = datetime.datetime.now()

    lcd.setpos(0)
    lcd.putsLCD(dt_now.strftime('%Y%m%d'))
    lcd.setpos(1)
    lcd.putsLCD(dt_now.strftime('%H:%M:%S'))
    lcd.setpos(0.1)