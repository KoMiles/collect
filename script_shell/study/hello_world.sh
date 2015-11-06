#!/bin/bash
#date 2015-11-06
echo "hello world~!"
echo "------------------------"
echo "========================"
echo "what is your name:"
read your_name
echo "hello , you name is ${your_name}"
echo "------------------------"
echo "========================"
url=http://www.baidu.com
echo ${url}
echo "------------------------"
echo "========================"

for skill in php java c
do
    echo "i am good at ${skill}lang"
done
echo "------------------------"
echo "========================"
url="http://www.taotao.com/"
echo ${url}
title="hello"
echo ${title}
#readonly title
title="baidu"
unset title
echo ${title}
echo "------------------------"
echo "========================"
echo $$
echo "------------------------"
echo "========================"
echo $#
echo $*
echo "------------------------"
echo "========================"
a=hello
echo -e "this is ${a}\n"
echo "------------------------"
echo "========================"
date=`date`
echo today is ${date}
users=`who |wc -l`
echo "user is num ${users}"
up=`date;uptime`
echo "uptime is ${up}"
echo "------------------------"
echo "========================"
echo ${var:-"Variable is not set"}
echo "1 - Value of var is ${var}"
echo "========================"
echo "------------------------"
echo ${var:="Variable is not set"}
echo "2 - Value of var is ${var}"

#url = http://c.biancheng.net/cpp/view/2737.html
