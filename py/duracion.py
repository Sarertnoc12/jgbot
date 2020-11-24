import sys
import songdetails

cancion = sys.argv[1]
song = songdetails.scan("/var/www/html/bot4/arch/"+cancion)
print song.duration

