<?php

declare(strict_types=1);

class Produto
{
  private $conexao;

  public function __construct()
  {
    try {
      $this->conexao = new PDO('mysql:host=localhost;dbname=teste', 'teste', '12345');
    } catch (Exception $e) {
      echo "Error: " . $e->getMessage();
      die();
    }
  }

  public function list(): void
  {
    $sql = 'select * from produtos';
    $prepare = $this->conexao->prepare($sql);
    $prepare->execute();
    foreach ($this->conexao->query($sql) as $key => $value) {
      echo 'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
    }
  }

  public function insert(): int
  {
    $sql = 'insert into produtos(descricao) values(?)';
    $prepare = $this->conexao->prepare($sql);
    $prepare->bindParam(1, $_GET['descricao']);
    $prepare->execute();
    return $prepare->rowCount();
  }

  public function update(): int
  {
    $sql = 'update produtos set descricao = ? where id = ?';
    $prepare = $this->conexao->prepare($sql);
    $prepare->bindParam(1, $_GET['descricao']);
    $prepare->bindParam(2, $_GET['id']);
    $prepare->execute();
    return $prepare->rowCount();
  }

  public function delete(): int
  {
    $sql = 'delete from produtos where id = ?';
    $prepare = $this->conexao->prepare($sql);
    $prepare->bindParam(1, $_GET['id']);
    $prepare->execute();
    return $prepare->rowCount();
  }
}
