#!/bin/bash
# This wrapper will start
# PHP Webserver to display
# site; runs application in
# background.

option="${1}"

SERVERIP=000.000.000.000
PORT=1234

case $option in
	-start) nohup php -S ${SERVERIP}:${PORT} 1> /dev/null & ;;
	-stop) killall -9 php;;
	*) printf "Err: Missing or invalid parameter was entered!\n";;
esac
