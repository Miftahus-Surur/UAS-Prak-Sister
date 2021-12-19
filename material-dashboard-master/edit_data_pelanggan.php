<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$id = $_GET['id'];
// echo $id;
// echo $_POST['alamat'];
$client = new Client([
    'base_uri' => 'http://127.0.0.1:8000',
    'timeout' => 5
]);

$response =  $client->request('PUT','/api/pelanggan',[
    'json' => [
        'id' => $id,
        'nama' => $_POST['nama'],
        'alamat' => $_POST['alamat']
    ]
]);

$body = $response->getBody();
header('location:admin.php')
// var_dump($body);

?>