# -*- coding: utf-8 -*-
import AQM0802 as LCDL

lcd = LCDL.AQM0802()
lcd.initsig()
lcd.putsLCD("HALTOKYO")
lcd.setpos(1)
lcd.putsLCD("MyLCD PG")