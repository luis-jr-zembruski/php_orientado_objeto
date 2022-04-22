<?php

require 'Produto.php';

$produtos = new Produto();

echo '<h2>Produtos: </h2>';
$produtos->list();

