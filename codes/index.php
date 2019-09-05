<?php 
    require '../vendor/autoload.php';
    use GuzzleHttp\Client;

    $client = new Client(['base_uri' => 'http://jsonplaceholder.typicode.com/' ]);
    
    $response = $client->request( 'GET',  'posts/1');
    echo $response -> getBody();

    // using magic method
    $response1 = $client -> get('posts/1');
    echo $response1->getBody();


    
