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
        // put your code here
        require_once 'EitosC.php';
        $m=  EitosC::callLibs('EiGet', 'getWebCont',array('url'=>'http://www.oschina.net/news/rss','conf'=>array()));
       // var_dump($m['info']);
        $m_json=  EitosC::callLibs('EiConv','xml2arr',array('str'=>$m['cont']));
        var_dump($m_json);
        ?>
</pre>
    </body>
</html>
