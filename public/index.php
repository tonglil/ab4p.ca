<?php

define('ROOT_PATH', __DIR__.'/..');

require ROOT_PATH.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();
$app['debug'] = true;

$app['view'] = $app->share(function () {
    $templates = new League\Plates\Engine(ROOT_PATH.'/views');
    $templates->setFileExtension('plates.php');
    //$templates->addData(['title' => 'Aaron Bailey for AMS President']);

    return $templates;
});

$app->get('/', function () use ($app) {
    return $app['view']->render('pages/index');
});

$app->get('/info', function () use ($app) {
    return $app['view']->render('pages/info', [
        'title' => 'Election Information',
    ]);
});

$app->get('/about', function () use ($app) {
    return $app['view']->render('pages/about', [
        'title' => 'My Experience',
    ]);
});

$app->get('/sotsu', function () use ($app) {
    return $app['view']->render('pages/sotsu', [
        'title' => 'State of the Student Union',
    ]);
});

$app->get('/president', function () use ($app) {
    return $app['view']->render('pages/president', [
        'title' => 'Presidential Goals',
    ]);
});

$app->get('/senate', function () use ($app) {
    return $app['view']->render('pages/senate', [
        'title' => 'Senate Platform',
    ]);
});

$app->run();
