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
        <br />
        <hr />
        <pre>        
<?php       
          require_once 'EitosC.php';
          
          $m=  EitosC::callLibs('EiGet', 'getWebCont',array('url'=>'http://www.baidu.com/','conf'=>array()));
//        $m_json=  EitosC::callLibs('EiConv','xml2arr',array('str'=>$m['cont']));
//        var_dump($m_json);
            //echo phpinfo();
            echo '<hr />';
            echo mb_convert_encoding($m['cont'],'cp936');
          
          
        ?>

</pre>
    </body>
</html>
