import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BOARD)
REDLED = 11 #赤=9
YELLOWLED = 13 #黄=11
GREENLED = 15 #緑=12
SW = 16

pushcounter = 0
GPIO.setup(REDLED, GPIO.OUT)
GPIO.setup(YELLOWLED, GPIO.OUT)
GPIO.setup(GREENLED, GPIO.OUT)
GPIO.setup(SW, GPIO.IN, pull_up_down=GPIO.PUD_UP)
lastsw = GPIO.input(SW)

while True:
    if pushcounter == 0: #赤=9
        GPIO.output(REDLED, True)
        if lastsw == False and GPIO.input(SW) == True:
            GPIO.output(REDLED, not GPIO.input(REDLED))
            pushcounter += 1
            time.sleep(0.2)
        
    elif pushcounter == 1: #黄=11
        GPIO.output(YELLOWLED, True)
        if lastsw == False and GPIO.input(SW) == True:
            GPIO.output(YELLOWLED, not GPIO.input(YELLOWLED))
            pushcounter += 1
            time.sleep(0.2)
        
    elif pushcounter == 2: #緑=12
        GPIO.output(GREENLED, True)
        if lastsw == False and GPIO.input(SW) == True:
            GPIO.output(GREENLED, not GPIO.input(GREENLED))
            pushcounter += 1
            time.sleep(0.2)
        
    else: #全消灯
        if lastsw == False and GPIO.input(SW) == True:
            pushcounter = 0
            time.sleep(0.2)
    
    lastsw = GPIO.input(SW)
