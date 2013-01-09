<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * 转化某些东西的常用的集合
 *
 * @author gaocheng
 */
class EiConv extends EiStruct {

    //put your code here
    /**
     * 将xml转换成json
     * @param array $param the xml content with array('str'=>'');
     */
    public function xml2json($param = array()) {

        $str_xml = &$param['str'];
        (empty($str_xml) or !is_string($str_xml)) and parent::setError(1);

        $obj_xml = simplexml_load_string($str_xml, 'SimpleXMLElement', LIBXML_NOCDATA);
        $ret = json_encode($obj_xml) or parent::setError(2);

        return $ret;
        //return json_encode(simplexml_load_string($str_xml));
    }

    /**
     * 将xml转换成json
     * @param array $param the xml content with array('str'=>'');
     */
    public function xml2arr($param = array()) {
        return json_decode($this->xml2json($param), true);
    }

}

?>
