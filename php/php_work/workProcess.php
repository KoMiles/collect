<?php
/**
 * 管理php进程 
 * 运行方式是 workProcess filename.php start
 * @date 2015-08-05 18:40:00
 * @author komiles@163.com
 */

class workProcess {
    const PHP_PATH = '/usr/bin/php';
    const PHP_LOG = './php.log';

    private static $process = null;
    private static $cmd = null;

    /**
     * main 
     * 主要程序,用来控制php进程开启，结束，重启
     * @param mixed $argv 
     * @static
     * @access public
     * @return void
     */
    public static function main($argv) {
        //需要执行的php文件
        $filename = $argv[1] ? $argv[1] : '';
        $cmd = $argv[2] ? $argv[2] : '';
        if(empty($filename)) {
            echo "process is not null \n";
            exit;
        }
        if(empty($cmd)) {
            echo "cmd is not null \n";
            exit;
        }
        self::$process = $filename;
        self::$cmd();

    }
    
    /**
     * start 
     * 启动程序 
     * @static
     * @access public
     * @return void
     */
    public static function start() {
        $cmd_str = self::PHP_PATH." ".self::$process ." > ". self::PHP_LOG . "&";
        shell_exec($cmd_str);

        echo "start done~!\n";
        echo "pid is ".self::getPid()."\n";
        exit;
    }

    /**
     * getPid 
     * 获取进程的pid
     * @static
     * @access public
     * @return void
     */
    public static function getPid(){
        $cmd_str  = "ps -ef |grep ".basename(self::$process)." |grep -v grep |grep -v ".basename(__FILE__)." |awk '{print $2}'";
        $pid = shell_exec($cmd_str);
        return $pid;
    }

}
    workProcess::main($argv);
