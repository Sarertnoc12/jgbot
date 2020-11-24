import RPi.GPIO as GPIO
import time
GPIO.setmode(GPIO.BOARD)

GPIO.setup(8, GPIO.OUT)
GPIO.setup(10, GPIO.OUT)
GPIO.setup(3, GPIO.OUT)
GPIO.setup(5, GPIO.OUT)

GPIO.output(8, GPIO.LOW)
GPIO.output(10, GPIO.HIGH)
GPIO.output(3, GPIO.LOW)
GPIO.output(5, GPIO.HIGH)

time.sleep(1000)

GPIO.cleanup()
