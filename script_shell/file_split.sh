#!/bin/bash
#执行方式：sh file_split.sh 26.txt 3
#10个以内的文件
#获取文件总的行数
total_num=$(cat $1 | wc -l)
#获取每个文件的行数
split_num=$(($total_num/$2))

#获取文件的名字
file_name_tmp=$1
file_name=${file_name_tmp%%.txt*}
`split -l $split_num $1 -d $file_name"_tmp"`

#分隔后总的文件数
total_file_num=`ls ${file_name}_* | wc -l`
for i in `seq 1 $2`
do
    mv ${file_name}_tmp0$(($i-1)) ${file_name}_0${i}.txt
done
