import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)
GPIO.setup(26, GPIO.IN)

cnt = 0
last_state = GPIO.input(26)
try:
    while True:
        current_state = GPIO.input(26)
        if current_state != last_state:
            time.sleep(0.01)  # チャタリングを軽減するために適切なウェイトを追加
            current_state = GPIO.input(26)
            if current_state != last_state:
                cnt += 1
                print('ON', cnt)
                last_state = current_state
except KeyboardInterrupt:
    pass

GPIO.cleanup()
