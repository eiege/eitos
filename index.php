<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>eitos</title>
    </head>
    <body>
        eiege tools
        <br />
        nginx and php
        <br />
        <hr />
        <pre>
        <?php
        $a=array("a","0"=>'b',"1"=>"c","d");
        $b=array(0=>'he',1=>"llo");
        var_dump($a);
        var_dump($b);
        var_dump($a == $b);
        var_dump($a === $b);
        $c=  array_merge($a, $b);
        var_dump($c);
//        // put your code here
//        require_once 'EitosC.php';
//        $m=  EitosC::callLibs('EiGet', 'getWebCont',array('url'=>'http://www.oschina.net/news/rss','conf'=>array()));
//       // var_dump($m['info']);
//        $m_json=  EitosC::callLibs('EiConv','xml2arr',array('str'=>$m['cont']));
//        var_dump($m_json);
        ?>
</pre>
    </body>
</html>
