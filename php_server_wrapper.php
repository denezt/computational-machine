#!/bin/bash

option="${1}"

case $option in
	-start) nohup php -S 80.208.225.117:8080 1> /dev/null & ;;
	-stop) killall -9 php;;
	*) printf "Err: Missing or invalid parameter was entered!\n";;
esac
