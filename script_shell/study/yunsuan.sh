#!/bin/bash
#date 2015-11-08
date=`date`
echo "date is ${date}"
echo "-------------------------------"
echo "==============================="
echo $((1+1))
echo `expr 1 + 1`
echo "-------------------------------"
echo "==============================="
a=1
b=2
if [ $a==$b ]
then
    echo "is equal"
else
    echo "no equal"
fi
echo "-------------------------------"
echo "==============================="
a=1
b=2
if [ $a -eq $b ]
then
    echo "$a is equal $b"
else
    echo "$a is not $b"
fi
echo "-------------------------------"
echo "==============================="
a=1
b=2
if [ $a -ne $b ]
then
    echo "$a is not equal $b"
else
    echo "$a is equal $b"
fi
echo "-------------------------------"
echo "==============================="
a=1
b=2
if [ $a -gt $b ]
then
    echo "$a is dayu $b"
else
    echo "$a is xiaoyu $b"
fi
echo "-------------------------------"
echo "==============================="
a=2
b=2
if [ $a -le $b ]
then
    echo "$a is xiaoyu $b"
else
    echo "$a is dayu $b"
fi
echo "-------------------------------"
echo "==============================="
a=1
b=2
if [ $a != $b ]
then
    echo "not equal"
else
    echo "equal"
fi
echo "-------------------------------"
echo "==============================="
a="aaa"
b="bbb"
if [ $a = $b ]
then
    echo $a is equal $b
else 
    echo is not equal
fi
a="a"
if [ -z $a ]
then
    echo length is zero
else 
    echo length is not zero
fi
echo "-------------------------------"
echo "==============================="
echo "下面这个例子有问题"
file="1.txt"
if [ -x file ]
then
    echo "file has read access"
else
    echo "file does not have read access"
fi
