<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/lib.php';


$app          = new Silex\Application();
//$app['debug'] = true;

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
    $lib        = new codeTraverse();
    $orig_files = $lib->traverse();

    $files = [];
    foreach ($orig_files as $file)
    {
        $files[] = new codeFile($file);
    }

    return $app['twig']->render('list.html.twig', ['files' => $files]);
});

$app->get('/demo/{file}', function ($file) use ($app)
{
    $phpfile = $file . '.php';

    $fileObj = new codeFile($phpfile);
    
    ob_start("modify");
    require_once 'code/' . $phpfile;
    $res= ob_get_clean();

    $fileObj->out=$res;

    return $app['twig']->render('demo.html.twig', ['file' => $fileObj]);
});

$app->get('/about', function() use ($app)
{
    return $app['twig']->render('about.html.twig');
});

function modify($buffer)
{
    //TODO or to delete?
}

$app->run();

