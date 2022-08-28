#!/bin/bash

# Put this script in crontab to check when you want

date=$(date)
dir='/var/www/server.admin.md/backup/'
srv1='SERVER 1' # if you change it here, need to change at json-send.sh/.php too 
srv2='SERVER 2'

###
function srv1 (){

if grep -s -q "$srv1" "$dir"results_*.j*; then
    echo "$srv1 - SUCCESS! $date" >> "$dir"logs.txt
else
    echo "$srv1 - FAIL!!! $date" >> "$dir"logs.txt
fi
}
###
function srv2 (){

if grep -s -q "$srv2" "$dir"results_*.j*; then
    echo "$srv2 - SUCCESS! $date" >> "$dir"logs.txt
else
    echo "$srv2 - FAIL!!! $date" >> "$dir"logs.txt
fi
}
###

########################
#
srv1
srv2
#
cat "$dir"logs.txt # | mail -e admin@admin.md - need to edit this line
rm -fr "$dir"results_* "$dir"logs*
