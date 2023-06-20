import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BOARD)
REDLED = 11
YELLOWLED = 13
GREENLED = 15
SW = 16
SEN = 22

pushcounter = 0
GPIO.setup(REDLED, GPIO.OUT)
GPIO.setup(YELLOWLED, GPIO.OUT)
GPIO.setup(GREENLED, GPIO.OUT)
GPIO.setup(SW, GPIO.IN, pull_up_down=GPIO.PUD_UP)
GPIO.setup(SEN, GPIO.IN, pull_up_down=GPIO.PUD_UP)
lastsw = GPIO.input(SW)

while True:
    if pushcounter == 0: #赤
        time.sleep(0.2)
        if GPIO.input(SEN) == True:
            GPIO.output(REDLED, not GPIO.input(REDLED))
            time.sleep(0.5)
        else:
            GPIO.output(REDLED, True)
        if lastsw == False and GPIO.input(SW) == True:
            GPIO.output(REDLED, False)
            pushcounter += 1
            GPIO.output(YELLOWLED, not GPIO.input(REDLED))
        
    elif pushcounter == 1: #黄
        time.sleep(0.2)
        if GPIO.input(SEN) == True:
            GPIO.output(YELLOWLED, not GPIO.input(YELLOWLED))
            time.sleep(0.5)
        else:
            GPIO.output(YELLOWLED, True)
        if lastsw == False and GPIO.input(SW) == True:
            GPIO.output(YELLOWLED, False)
            pushcounter += 1
            GPIO.output(GREENLED, not GPIO.input(YELLOWLED))
        
    elif pushcounter == 2: #緑
        time.sleep(0.2)
        if GPIO.input(SEN) == True:
            GPIO.output(GREENLED, True)
        else:
            GPIO.output(GREENLED, not GPIO.input(GREENLED))
            time.sleep(0.5)
        if lastsw == False and GPIO.input(SW) == True:
            GPIO.output(GREENLED, False)
            pushcounter += 1
        
    else: #全消灯
        time.sleep(0.2)
        if GPIO.input(SEN) == True:
            GPIO.output(REDLED, not GPIO.input(REDLED))
            GPIO.output(YELLOWLED, not GPIO.input(YELLOWLED))
            GPIO.output(GREENLED, not GPIO.input(GREENLED))
            time.sleep(0.5)
        else:
            GPIO.output(REDLED, False)
            GPIO.output(YELLOWLED, False)
            GPIO.output(GREENLED, False)
        if lastsw == False and GPIO.input(SW) == True:
            GPIO.output(REDLED, False)
            GPIO.output(YELLOWLED, False)
            GPIO.output(GREENLED, False)
            pushcounter = 0
            GPIO.output(REDLED, not GPIO.input(REDLED))
    
    lastsw = GPIO.input(SW)
