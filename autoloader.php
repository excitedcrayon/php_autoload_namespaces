<?php

// include folder of the classes
set_include_path(__DIR__.'/classes');

spl_autoload_register(function($className){
    $class = explode('\\', $className);
    require_once end($class) . '.php';
});

echo 'autoloader.php has been loaded.... <br>';
?>
