#coding=utf-8
#抓取网页内容
import urllib

def getHtml(url):
    page = urllib.urlopen(url)
    html = page.read()
    return html

html = getHtml("http://www.cankaoxiaoxi.com/roll10/bd/20160807/1259755.shtml")

print html
