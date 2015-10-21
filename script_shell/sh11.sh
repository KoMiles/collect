#!/bin/bash
str='http://www.baidu.com/cut-string.html'
echo ${str%%.html*}
