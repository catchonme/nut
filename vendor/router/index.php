<?php

define('APPPATH', trim(__DIR__ . '/')); // 设定当前的目录 D:\mvc/

$root = $_SERVER['SCRIPT_NAME']; //  /mvc/index.php
$request = $_SERVER['REQUEST_URI']; // /mvc/index.php

$URI = array();

// http://localhost/mvc/index.php/hello/index  获取到 hello/index
$url = trim(str_replace($root, '', $request), '/');

// http://localhost/mvc/index.php ,则 $url 为空，因为index.php 后面没有参数了
// 则设定默认的路由位置
if (empty($url)) {
    $class = 'index';
    $func = 'welcome';
} else {
    // http://localhost/mvc/index.php/hello/index
    // 如果 hello 后面没有 index ,则默认获取 hello 控制器中 index 方法
    $URI = explode('/', $url);
    if (count($URI) < 2) {
        $class = $URI[0];
        $func = 'index';
    } else {
        $class = $URI[0];
        $func = $URI[1];
    }
 }

// 把  application/controllers/hello.php 加载进来
include(APPPATH . '/' . 'application/controllers/' . $class . '.php');

$obj = ucfirst($class);
// 调用 hello.php 中的 index 方法
// array_slice($URI, 2) 为 hello/index/params 中的 params ，也就是后面传递的则为该函数的参数
call_user_func_array(
    array($obj, $func),
    array_slice($URI, 2)
);