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

function about($app)
{
    return $app->render(
        'about.html'
    );
}

$app->route('/about',about);
$app->route('/',index);

$app->run();
