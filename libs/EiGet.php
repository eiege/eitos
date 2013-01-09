<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * 获取某些东西的集合
 *
 * @author gaocheng
 */
class EiGet extends EiStruct{
    //put your code here
    
    /**
     * 通过curl获取远端文件内容
     * @param array $param array('url(内容url)'=>'http://....','conf(自定义设置)'=>array());
     * @return array array('cont'=>'','info'=>'')
     */
    public function getWebCont($param){
        function_exists('curl_init') or parent::setError(100);
        $url=&$param['url'] or parent::setError(1);
        $opt_config=&$param['conf'];
        
        $opt_config[CURLOPT_URL]=&$url;
        $opt_config[CURLOPT_RETURNTRANSFER]=true;//强制curl_exec 文件流形式返回。
        
        $ch =curl_init();
        
        curl_setopt_array($ch,$opt_config) or parent::setError(2);
        
        $ret['cont']=curl_exec($ch);
        $ret['info']=curl_getinfo($ch);
        
        $code=curl_error($ch) and parent::setError($code);
        
        return $ret;
        
    }
}

?>
