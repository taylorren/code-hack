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

    $lib   = new codeTraverse();
    $files = $lib->traverse();

    return $app['twig']->render('list.html.twig', ['files' => $files]);
});

$app->get('/demo/{file}', function ($file) use ($app)
{
    $phpfile='code/'.$file.'.php';
    //$src=  file($txt);
    $src=  file_get_contents($phpfile);
    
    ob_start("modify");
    require_once($phpfile);
    $output=ob_get_clean();
    return $app['twig']->render('demo.html.twig', ['src'=>$src, 'file'=>$phpfile, 'out'=>$output]);
    
});

function modify($buffer)
{
    return $buffer;
}


$app->run();

