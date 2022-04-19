<?php

declare(strict_types=1);

class Venda
{
  private string $data;
  private string $produto;
  private int $quantidade;
  private float $preco;

  public function __construct(string $data, string $produto, int $quantidade, float $preco)
  {
    $this->data = $data;
    $this->produto = $produto;
    $this->quantidade = $quantidade;
    $this->preco = $preco;
  }

  public function obterVenda() : string
  {
    return 'Data da venda: ' . $this->data .
           'Produto: ' . $this->produto .
           'Quantidade: ' . $this->quantidade .
           'Preço: R$ ' . $this->preco .
           'Total: R$ ' . $this->obterValorTotal();
  }

  public function obterValorTotal() : float
  {
    return $this->preco * $this->quantidade;
  }
}


$venda = new Venda(
  '01/01/2019',
  'Notebook',
  2,
  1000.00);

echo $venda->obterVenda();
