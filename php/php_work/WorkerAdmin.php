<?php
/**
 * @date 2015-07-17
 * @author zhengyin <zhengyin.name@gmail.com>
 * PHP 进程管理脚本
 */
class WorkerAdmin{

    const PHP_BIN = '/usr/bin/php';

    private static $process;

    private static $log;

    private static $num;

    private static $cmds = array('start','restart','stop');
    /**
     * @param Array $argv
     */
    public static function main($argv){

        self::$process = isset($argv[1])?$argv[1]:'';

        $cmd = isset($argv[2])?$argv[2]:'';

        self::$num = isset($argv[3])?intval($argv[3]):0;

        self::$log = isset($argv[4])?$argv[4]:'/dev/null';  //默认丢弃日志
        //脚本不存在，或者不可执行
        if(!file_exists(self::$process) || !is_executable(self::$process)){
            echo self::$process." not exists\n";
            echo chr(7);
            exit;
        }
        //cmd 不正确
        if(!in_array($cmd, self::$cmds)){
            echo "usage: ".self::$process." ".implode('|', self::$cmds)." [num]\n";
            echo chr(7);
            exit;
        }

        self::$cmd();
    }
    /**
     * 启动
     */
    public static function start(){
        if(self::$num<1){
            echo "start num is invalid\n";
            echo chr(7);
            exit;
        }else{
            for ($i=0;$i<self::$num;$i++){
                self::runWorker();
            }
            echo "start done\n";
        }
    }
    /**
     * 重启
     */
    public static function restart(){
        $count = 0;
        $pids = self::getWorkerPids();
        for($i=0;$i<count($pids);$i++){
            self::killWorker($pids[$i]);
            //杀掉老进程后，新启一个进程
            $count++;
            self::runWorker();
            //缓冲1秒，避免瞬间杀死worker后，照成脚本无法工作
            sleep(1);
        }
        //最后检查下，是否达到了需要的启动数量
        if($count <self::$num){
            for($n=0;$n<self::$num-$count;$n++){
                self::runWorker();
            }
        }
        echo "restart done\n";
    }
    /**
     * 停止
     */
    public static function stop(){
        $pids = self::getWorkerPids();
        for ($i=0;$i<count($pids);$i++){
            self::killWorker($pids[$i]);
            //缓冲1秒，避免瞬间杀死worker后，照成脚本无法工作
            sleep(1);   
        }
        echo "stop done\n";
    }
    /**
     * 运行一个 worker
     */
    private static function runWorker(){
        $cmd = sprintf("%s %s >> %s &",self::PHP_BIN,self::$process,self::$log);
        echo $cmd.PHP_EOL;
        shell_exec($cmd);
    }
    /**
     * 杀死一个 worker
     */
    private static function killWorker($pid){
        `kill -9 $pid`;
        echo "kill {$pid} done \n";
    }
    /**
     * 获取正在运行的worker pid 
     */
    private static function getWorkerPids(){

        $cmd = 'ps aux | grep '.basename(self::$process).'| grep -v grep | grep -v '.basename(__FILE__).' | awk \'{print $2}\'';
        $result = shell_exec($cmd);
        $pids = array_filter(explode("\n", $result));
        return $pids;
    }
}
WorkerAdmin::main($argv);
