<?php

class ContaBancaria
{
  private $banco;
  private $nomeTitular;
  private $numeroAgencia;
  private $numeroConta;
  private $saldo;

  public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
  {
    $this->banco = $banco;
    $this->nomeTitular = $nomeTitular;
    $this->numeroAgencia = $numeroAgencia;
    $this->numeroConta = $numeroConta;
    $this->saldo = $saldo;
  }

  public function depositar($valor)
  {
    $this->saldo += $valor;
    echo 'Deposito de R$ ' . $valor . ' realizado com sucesso!';
  }

  public function sacar($valor)
  {
    $this->saldo -= $valor;
    echo 'Saque de R$ ' . $valor . ' realizado com sucesso!';
  }

  public function obterSaldo()
  {
    return 'Seu saldo atual é: R$ ' . $this->saldo;
  }
}

$conta = new ContaBancaria(
  'Banco do Brasil',
  'João da Silva',
  '1234',
  '12345',
  1000.00);

echo $conta->obterSaldo();

$conta->depositar(500.00);

$conta->sacar(200.00);
