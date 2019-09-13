<?php
// 处理URL中包含+号的情况
$_SERVER["PHP_SELF"] = str_replace(' ', '+', $_SERVER["PHP_SELF"]  );
$path = $_SERVER['DOCUMENT_ROOT'] . $_SERVER["PHP_SELF"];
$uri = $_SERVER["REQUEST_URI"];

$GLOBALS['lpconfig']['env'] = 'dev';
// 如果文件和目录存在，直接访问
if (file_exists($path))  
{
    if( basename( $path ) == 'index.php' ) return false;
    
    header("Access-Control-Allow-Origin: *");
    readfile($_SERVER["SCRIPT_FILENAME"]);
    
}
else
{
	putenv("REQUEST_URI=".$_SERVER["REQUEST_URI"]);
	header("Access-Control-Allow-Origin: *");
	
	require  __DIR__ . '/index.php';
}