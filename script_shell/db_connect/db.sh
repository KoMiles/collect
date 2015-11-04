#!/bin/bash
#程序描述:链接数据库
#执行方式:sh db.sh dev point
#date:2015-11-04 by komiles
if [ $1 = 'dev' ]:
then
    case $2 in
        point)
        #链接point库
            echo "mysql -h 127.0.0.1 -u point -pGC0jwo8WWk5ks8mpx2VC -A -D point"
            mysql -h 127.0.0.1 -u point -pGC0jwo8WWk5ks8mpx2VC -A -D point
        ;;
        preg)
        #链接pregnancy
            echo "mysql -h 127.0.0.1 -u pregnancy -pLf0feWe2PYESt2zy7W46 -A -D pregnancy"
            mysql -h 127.0.0.1 -u pregnancy -pLf0feWe2PYESt2zy7W46 -A -D pregnancy
        ;;
        log)
        #链接log库
            echo "mysql -h 127.0.0.1 -u mysql_log -pn0p4ssw0rd -A -D Log"
            mysql -h 127.0.0.1 -u mysql_log -pn0p4ssw0rd -A -D Log
        ;;
        *)
        #链接默认库
            echo "mysql -h 127.0.0.1 -u mysql_baby -pn0p4ssw0rd -A -D babytree"
            mysql -h 127.0.0.1 -u mysql_baby -pn0p4ssw0rd -A -D babytree
        ;;
    esac
elif [ $1 = 'local' ]
then
    #链接本地数据库
    echo "mysql -hlocalhost -uroot -p123456"
    mysql -hlocalhost -uroot -p123456
fi
