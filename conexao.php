<?php

$pdo = new PDO('mysql:host=localhost;dbname=jogos','admin','123456');


$query_apostas = $pdo->query('SELECT * FROM apostas');
$query_apostas->execute();
$result_apostas = $query_apostas->fetchAll(PDO::FETCH_ASSOC);

$query_sorteio = $pdo->query('SELECT id, bola1, bola2, bola3, bola4, bola5, bola6, bola7, bola8, bola9, bola10, bola11, bola12, 
bola13, bola14, bola15 FROM lotofacil WHERE id = 1902');
$query_sorteio->execute();
$result_sorteio = $query_sorteio->fetchAll(PDO::FETCH_ASSOC);