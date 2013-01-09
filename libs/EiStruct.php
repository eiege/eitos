<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * libs的结构类
 *
 * @author gaocheng
 */
class EiStruct {
    //put your code here
    /**
     * 设置错误
     * @param int $code 错误编号
     */
    static public function setError($code) {
        $call_class_name=  get_called_class();
        exit($call_class_name.' Error:'. $code);
    }
}

?>
