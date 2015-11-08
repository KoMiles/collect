#!/bin/bash
# Shell 数组元素
# date 2015-11-08
name[0]="wang"
name[1]="kong"
name[2]="ming"
echo ${name[*]}
echo ${name[@]}
echo "获取数组的长度"
echo ${#name[*]}
echo "-----------------------"
echo "======================="
echo arg
