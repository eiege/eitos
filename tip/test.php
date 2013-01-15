<?php
/**
 * 命令行形式的php代码测试工具
 * partitionLine,setError 两个函数支持文件运行，注意不要重名。
 * @example php test.php [param] [params]：需要运行的函数，为空则显示所有自定义的函数。
 * 
 */
//defined the test function() none params 
function get_percentage(){
    
    $a=array('1000 default','10 v','12 this is ','10 ceshi');
    
    foreach ($a as $v){
        
    }
    
    var_dump($a);
}

function check_client_connect(){
    
}


//请尽量不要再这行注释下面定义测试函数
$run_function_name=($argc>1)?$argv[1]:'partition_line';
function_exists($run_function_name) or set_error($run_function_name);
partition_line($run_function_name);
$run_function_name();

function set_error($param='[error function name]'){
    $error_mes='Function has not been defined : '.$param.PHP_EOL;
    exit($error_mes);
}
function partition_line($name='List for User defined functions(by lower)'){
    $name!= __FUNCTION__ and print(PHP_EOL.str_pad($name, 100,'-',STR_PAD_BOTH).PHP_EOL);
    $defined_functions_list=get_defined_functions();
    function_exists($name) or print_r($defined_functions_list['user']);
    echo PHP_EOL;
}
?>
