#!/bin/bash
#判断当前用户是否是root用户
echo $USER
echo `id -u`
UID=`id -u`
echo $UID
if [ $UID -ne 0 ]; then
    echo "this no root user"
else
    echo "this is root user"
fi
