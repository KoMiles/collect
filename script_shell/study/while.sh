#!/bin/bash
#  while
# date 2015-11-08
#=====设置while循环======
num=0
max=10
while (($num <=$max))
do
    echo $num
    num=$((num+1))
done

echo "-------------------------"
echo 'type <CTRL-D> to terminate'
echo -n 'enter your most liked film: '
while read FILM
do
    echo "Yeah! great film the $FILM"
done
