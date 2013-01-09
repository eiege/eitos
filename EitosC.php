<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$root_dir = dirname(__FILE__);
$struct_dir = strtr($root_dir, '\\', '/') . '/libs/EiStruct.php';
require_once($struct_dir);

/**
 * 方便工具集调用的入口
 *
 * @author gaocheng
 */
class EitosC {

    //put your code here
    static private $instance = null;

    /**
     * 初始化运行环境
     */
    public function __construct() {
        
    }

    /**
     * 获取类的实例
     * @return object 实例
     */
    static public function getInstance() {
        if (null == self::$instance)
            self::$instance = new self();
        return self::$instance;
    }

    /**
     * 调用libs中的方法
     * @param string $c 要调用的类（同文件名）
     * @param string $m 要调用的类中的方法
     * @param array $p 要传入的参数
     */
    static public function callLibs($c = null, $m = null, $p = array()) {

        empty($c) and self::setError(1);
        empty($m) and self::setError(2);
        empty($p) and self::setError(3);

        //这里应该加入参数的安全设置。
        (strpbrk($c, '\/:*?"<>|') === false) or self::setError(10); //非法的参数
        //require_once('libs/EiStruct.php');

        $libs_file = 'libs/' . $c . '.php';
        is_file($libs_file) or $this->setError(4);
        require_once($libs_file); //包含类文件
        $obj = new $c();

        return call_user_func_array(array($obj, $m), array($p));
    }

    static public function setError($code = 0) {
        exit('Error:' . $code);
    }

}

?>
