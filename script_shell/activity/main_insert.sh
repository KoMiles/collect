#!/bin/bash
#文件作用：批量在后台执行脚本
#执行方式：sh main_insert.sh 70 meitun


#校验参数
if [ ! -n "$1" ]
then
    echo "activity_id is not emtpy!"
    exit
fi
if [ ! -n "$2" ]
then
    echo "filename is not emtpy!"
    exit
fi
echo "start insert user_id..."
log=`date +%Y%m%d`
if [ ! -d "./$log" ];
then
    `mkdir ./$log`
fi
for filename in `ls $2_*`
do
    echo "script at $filename"
    sleep 1

    echo "nohup php activity_insert_user.php $1 $filename > $log/$filename.log 2>&1 &"
    `nohup php activity_insert_user.php $1 $filename > $log/$filename.log 2>&1 &`
    echo "..."
done
echo "end."
