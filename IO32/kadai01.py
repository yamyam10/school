import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)
GPIO.setup(26,GPIO.IN)

cnt = 0
try:
    while True:
        GPIO.wait_for_edge(26,GPIO.FALLING)
        cnt += 1
        print('ON ', cnt)
except KeyboardInterrupt:
    pass

GPIO.cleanup()