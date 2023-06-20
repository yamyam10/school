import RPi.GPIO as GPIO
import ambient
import time

ambi = ambient.Ambient(55041, "47e77a062fa7fdc2")

GPIO.setmode(GPIO.BOARD)
REDLED = 11
YLWLED = 13
GRNLED = 15
SW = 16
SEN = 18

GPIO.setup(REDLED, GPIO.OUT)
GPIO.setup(YLWLED, GPIO.OUT)
GPIO.setup(GRNLED, GPIO.OUT)
GPIO.setup(SW, GPIO.IN, pull_up_down=GPIO.PUD_UP)
GPIO.setup(SEN, GPIO.IN)

lastsw = GPIO.input(SW)
pushcounter = 1

while True:
	if pushcounter == 1:
		time.sleep(0.2)
		if GPIO.input(SEN) == True:
			GPIO.output(REDLED, not GPIO.input(REDLED))
			r = ambi.send({'d1': 17})
			time.sleep(0.5)
		else:
			GPIO.output(REDLED, True)
			r = ambi.send({'d1': 9})
		if lastsw == False and GPIO.input(SW) == True:
			GPIO.output(REDLED, False)
			pushcounter += 1
			GPIO.output(YLWLED, not GPIO.input(REDLED))
	elif pushcounter == 2:
		time.sleep(0.2)
		if GPIO.input(SEN) == True:
			GPIO.output(YLWLED, not GPIO.input(YLWLED))
			r = ambi.send({'d1': 19})
			time.sleep(0.5)
		else:
			GPIO.output(YLWLED, True)
			r = ambi.send({'d1': 11})
		if lastsw == False and GPIO.input(SW) == True:
			GPIO.output(YLWLED, False)
			pushcounter += 1
			GPIO.output(GRNLED, not GPIO.input(YLWLED))
	elif pushcounter == 3:
		time.sleep(0.2)
		if GPIO.input(SEN) == True:
			GPIO.output(GRNLED, True)
			r = ambi.send({'d1': 12})
		else:
			GPIO.output(GRNLED, not GPIO.input(GRNLED))
			r = ambi.send({'d1': 20})
			time.sleep(0.5)
		if lastsw == False and GPIO.input(SW) == True:
			GPIO.output(GRNLED, False)
			pushcounter += 1
	else:
		time.sleep(0.2)
		if GPIO.input(SEN) == True:
			GPIO.output(REDLED, not GPIO.input(REDLED))
			GPIO.output(YLWLED, not GPIO.input(YLWLED))
			GPIO.output(GRNLED, not GPIO.input(GRNLED))
			r = ambi.send({'d1': 4})
			time.sleep(0.5)
		else:
			GPIO.output(REDLED, False)
			GPIO.output(YLWLED, False)
			GPIO.output(GRNLED, False)
			r = ambi.send({'d1': 8})
			time.sleep(0.5)
		if lastsw == False and GPIO.input(SW) == True:
			GPIO.output(REDLED, False)
			GPIO.output(YLWLED, False)
			GPIO.output(GRNLED, False)
			pushcounter = 1
			GPIO.output(REDLED, not GPIO.input(REDLED))
	lastsw = GPIO.input(SW)
