<?php

require 'Produto.php';

$produtos = new Produto();

switch ($_GET['operacao']) {
  case 'list':
    echo "<h2>Produtos</h2>";

    foreach($produtos->list() as $value) {
      echo "Id: {$value['id']}<br> Descrição: {$value['descricao']}<hr>";
    }

    break;

  case 'insert':
    $status = $produtos->insert($_GET['descricao']);

    if(!$status) {
      echo "Erro ao inserir produto";
    } else {
      echo "Produto inserido com sucesso";
    }

    break;

  case 'update':
    $status = $produtos->update($_GET['descricao'], $_GET['id']);

    if(!$status) {
      echo "Erro ao atualizar produto";
    } else {
      echo "Produto atualizado com sucesso";
    }

    break;

  case 'delete':
    $status = $produtos->delete($_GET['id']);

    if(!$status) {
      echo "Erro ao deletar produto";
    } else {
      echo "Produto deletado com sucesso";
    }

    break;
}
