<?php
require './vendor/autoload.php';

use NoahBuscher\Macaw\Macaw;

Macaw::get('/index', function(){
    echo 'index';
});

Macaw::dispatch();