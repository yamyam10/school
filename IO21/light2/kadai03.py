import RPi.GPIO as GPIO
import ambient
import time

ambi = ambient.Ambient(55041, "47e77a062fa7fdc2")

GPIO.setmode(GPIO.BOARD)
REDLED = 11
YLWLED = 13
GRNLED = 15
SW = 16
GPIO.setup(REDLED, GPIO.OUT)
GPIO.setup(YLWLED, GPIO.OUT)
GPIO.setup(GRNLED, GPIO.OUT)
GPIO.setup(SW, GPIO.IN, pull_up_down=GPIO.PUD_UP)
ts = time.sleep(10)

lastsw = GPIO.input(SW)
pushcounter = 0

while True:
	if lastsw == False and GPIO.input(SW) == True:
		pushcounter = pushcounter + 1
		print("SW pushed " + str(pushcounter) + " times!")
		if pushcounter % 4 == 1:
			GPIO.output(REDLED, True)
			ambi.set({'d1': 9})
			ambi.send()
		elif pushcounter % 4 == 2:
			GPIO.output(REDLED, not GPIO.input(REDLED))
			GPIO.output(YLWLED, True)
			ambi.set({'d1': 11})
			ambi.send()
		elif pushcounter % 4 == 3:
			GPIO.output(YLWLED, not GPIO.input(YLWLED))
			GPIO.output(GRNLED, True)
			ambi.set({'d1': 12})
			ambi.send()
		else:
			GPIO.output(GRNLED, not GPIO.input(GRNLED))
			ambi.set({'d1': 8})
			ambi.send()
	lastsw = GPIO.input(SW)
