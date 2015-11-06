#!/bin/bash
#文件作用：平均分隔大文件
#执行方式：sh file_split.sh 26.txt 3
#执行结果：26_00.txt　26_01.txt 26_02.txt
 
total_num=$(cat $1 | wc -l)
split_num=$(($total_num/$2))

#校验参数
if [ $total_num -lt $2 ]
then
    echo "param  num $2 is to large"
    exit
fi

#获取文件的名字
file_name_tmp=$1
file_name=${file_name_tmp%%.txt*}

`split -l $split_num $1 -d $file_name"_"`
#重命名
for files in `ls ${file_name}_*`
do
    mv $files $files.txt
done
