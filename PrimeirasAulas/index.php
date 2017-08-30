<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 29/08/2017
 * Time: 19:49
 */

require_once "vendor/autoload.php";

$app = new Silex\Application();
$app['debug'] = true;
$app->get("/", function(){
    return "Hello!!!!";
});
$app->run();