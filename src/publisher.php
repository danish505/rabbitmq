<?php
require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;


$host = '';

$port= 5672;

$user = '';

$pass = '';

$vhost = '';

$exchange = 'router';

$queue = 'msgs';

$connection = new AMQPStreamConnection($host, $port, $user,$pass ,$vhost);


?>