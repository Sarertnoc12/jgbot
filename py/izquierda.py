import RPi.GPIO as GPIO
import time
GPIO.setmode(GPIO.BOARD)

GPIO.setup(8, GPIO.OUT)
GPIO.setup(10, GPIO.OUT)
GPIO.setup(3, GPIO.OUT)
GPIO.setup(5, GPIO.OUT)

GPIO.output(8, GPIO.HIGH)
GPIO.output(10, GPIO.LOW)
GPIO.output(3, GPIO.LOW)
GPIO.output(5, GPIO.LOW)

time.sleep(1000)

GPIO.cleanup()
