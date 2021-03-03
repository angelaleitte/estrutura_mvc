<?php
require 'environment.php';
if(ENVIRONMENT == 'development'){
    define("BASE_URL", "http://localhost/estrutura_mvc/");
    $config['dbname'] = 'sistemas_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    define("BASE_URL", "http://meusite.com.br/");
    $config['dbname'] = 'sistemas_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

global $pdo;

try{
    $pdo = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}