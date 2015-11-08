#!/bin/bash
#shell 之字符串
#date 2015-11-08
name=komiles
echo "hello my name is ${name}"
echo "------------------------------"
echo "=获取字符串的长度============="
echo ${#name}
echo "=截取字符串============="
name=wangkongming
echo ${name:0:4}
echo "=查找字符串============="
string="alibaba is a great company"
echo `expr index "$string" is`
echo "结果是:"3
#查找is字符串中,i字符第一次出现的位置,所以返回3
#字符串是从1开始的.
#url:http://c.biancheng.net/cpp/view/7001.html

