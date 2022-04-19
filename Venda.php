<?php

class Venda
{
  private $data;
  private $produto;
  private $quantidade;
  private $preco;

  public function __construct($data, $produto, $quantidade, $preco)
  {
    $this->data = $data;
    $this->produto = $produto;
    $this->quantidade = $quantidade;
    $this->preco = $preco;
  }

  public function obterVenda()
  {
    return 'Data da venda: ' . $this->data .
           'Produto: ' . $this->produto .
           'Quantidade: ' . $this->quantidade .
           'Preço: R$ ' . $this->preco .
           'Total: R$ ' . $this->obterValorTotal();
  }

  public function obterValorTotal()
  {
    return $this->quantidade * $this->preco;
  }
}


$venda = new Venda(
  '01/01/2019',
  'Notebook',
  2,
  1000.00);

echo $venda->obterVenda();
