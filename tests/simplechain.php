<?php
require_once(__DIR__.'/../blockchain.php');

/*
Set up a simple chain and mine two blocks.
*/

$testCoin = new BlockChain();

echo "mining block 1...\n";
$testCoin->push(new Block(1, strtotime("now"), "amount: 4"));

echo "mining block 2...\n";
$testCoin->push(new Block(2, strtotime("now"), "amount: 10"));

echo json_encode($testCoin, JSON_PRETTY_PRINT);
