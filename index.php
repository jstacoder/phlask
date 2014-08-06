<?php
require 'lib/phlask.php';

$app = new Phlask('app');
$app->config_from_file("settings.php");
function index($app)
{
    return $app->render("new.html",array(
        'testing' => true,
    ));
}

$app->route('/',index);

$app->run();
