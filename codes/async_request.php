<?php 
    require '../vendor/autoload.php';
    use GuzzleHttp\Client;

    $client = new Client(['base_uri' => 'http://jsonplaceholder.typicode.com/' ]);

    $promise = $client-> requestAsync('GET', 'posts/1');

    $promise = $client->getAsync('post/2');

    $promise -> then(
        function( Response $res ){
            echo $res->getStatusCode(). "\r\n";
            echo $res->getBody();
        },
        function (RequestException $e){
            echo $e -> getMessage();
        }
    );

    $promise->wait();