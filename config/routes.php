<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('home', 'HomeController@home');
Macaw::get('index', 'HomeController@index');

Macaw::get('fuck', function() {
    echo "成功！";
});

Macaw::$error_callback = function() {
    throw new Exception("路由无匹配项 404 Not Found");
};

Macaw::dispatch();