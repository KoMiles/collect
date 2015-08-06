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

    //命令必须在这个里面
    private static $cmd_str = array('start','stop','restart');

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
        //检测命令
        if(!in_array($cmd,self::$cmd_str)) {
            echo "cmd is not wrong! \n";
            exit;
        }
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
        self::runWork();
        echo "start done~!\n";
        echo "pid is ".self::getPid();
        exit;
    }

    /**
     * stop
     * 终止程序
     * @static
     * @access public
     * @return void
     */
    public static function stop() {
        self::killWork(self::getPid());
        echo "stop done~!\n";
        exit;
    }

    /**
     * restart 
     * 重启一个php程序
     * @static
     * @access public
     * @return void
     */
    public static function restart() {


    }
    /**
     * runWork
     * 运行程序
     * @static
     * @access private
     * @return void
     */
    private static function runWork() {
        $cmd_str = self::PHP_PATH." ".self::$process ." > ". self::PHP_LOG . "&";
        echo $cmd_str."\n";
        shell_exec($cmd_str);
    }

    /**
     * killWork
     * 杀死一个程序
     * @static
     * @access private
     * @return void
     */
    private static function killWork($pid) {
        $cmd_str = "kill -9  ".$pid;
        shell_exec($cmd_str);
        echo "kill {$pid}";
    }

    /**
     * getPid
     * 获取进程id
     * @static
     * @access private
     * @return void
     */
    private static function getPid(){
        $cmd_str  = "ps -ef |grep ".basename(self::$process)." |grep -v grep |grep -v ".basename(__FILE__)." |awk '{print $2}'";
        $pid = shell_exec($cmd_str);
        return $pid;
    }

}

workProcess::main($argv);
