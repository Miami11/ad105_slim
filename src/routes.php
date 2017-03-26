<?php
// Routes

//首頁
$app->get('/{name}', function ($request, $response, $args) {
    // Render index view
    $response = $this->view->render($response, 'index.twig',$args);

    return $response;
});

$app->get('/', function ($request, $response, $args) {
    // Render index view
    $response = $this->view->render($response, 'index.twig');

    return $response;
});





