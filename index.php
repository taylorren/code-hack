<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/lib.php';

$app          = new Silex\Application();
$app['debug'] = true;

//Twig
// Register Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/views',
));

$app->get('/', function () use ($app)
{
    return $app['twig']->render('index.html.twig');
});

$app->get('/lib', function() use ($app)
{

    $lib = new codeTraverse();
    $files = $lib->traverse();

    return $app['twig']->render('list.html.twig', ['files' => $files]);
});



$app->run();

