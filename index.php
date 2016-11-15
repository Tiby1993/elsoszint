<?php
   session_start();
// a gyökér könyvtár
define("BASE_PATH", "http://localhost/elsoszint");
//a szcript könyvtár
$path = "/elsoszint";
//feldaraboljuk az url-t, mert ez alapján hívjük meg a szükséges ostályokat, metódusokat, paramétereket.
$url = $_SERVER['REQUEST_URI'];
$url = str_replace($path,"",$url);
$array_tmp_uri = preg_split('[\\/]', $url, -1, PREG_SPLIT_NO_EMPTY);
if(empty($array_tmp_uri[0])){
	header("Location: ".BASE_PATH."/login/index");
}
else{
	$array_uri['controller'] = $array_tmp_uri[0];
    if(!empty($array_tmp_uri[1]))$array_uri['method'] = $array_tmp_uri[1];
    if(!empty($array_tmp_uri[2]))$array_uri['var'] = $array_tmp_uri[2];
    require_once("application/base.php");
    $application = new Application($array_uri);
    $application->loadController($array_uri['controller']);
}
?>