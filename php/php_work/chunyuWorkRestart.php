<?php
class workProcess {

    private static $worker_file  = "AskCooperationMessageWorker.php";
    /**
     * run 
     * 运行程序 
     * @static
     * @access public
     * @return void
     */
    public static function run() {
        self::killWork();
        $cmd_str = "/var/www/baby/scripts/worker/checkWorker";
        shell_exec($cmd_str);
    }

    /**
     * killWork 
     * 杀死程序
     * @static
     * @access private
     * @return void
     */
    private static function killWork() {
        $cmd_str = "ps -ef |grep ".self::$worker_file." |grep -v grep | awk '{print $2}' |xargs kill -9";
        echo date("Y-m-d H:i:s")."\t".$cmd_str."\n";
        shell_exec($cmd_str);
    }
}

workProcess::run();
