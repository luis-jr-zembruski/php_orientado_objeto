<?php

declare(strict_types=1);

class ContaBancaria
{
  private string $banco;
  private string $nomeTitular;
  private string $numeroAgencia;
  private string $numeroConta;
  private float $saldo;

  public function __construct(
    string $banco,
    string $nomeTitular,
    string $numeroAgencia,
    string $numeroConta,
    float $saldo
  )
  {
    $this->banco = $banco;
    $this->nomeTitular = $nomeTitular;
    $this->numeroAgencia = $numeroAgencia;
    $this->numeroConta = $numeroConta;
    $this->saldo = $saldo;
  }

  public function depositar(float $valor) : void
  {
    $this->saldo += $valor;
    echo 'Deposito de R$ ' . $valor . ' realizado com sucesso!';
  }

  public function sacar(float $valor) : void
  {
    $this->saldo -= $valor;
    echo 'Saque de R$ ' . $valor . ' realizado com sucesso!';
  }

  public function obterSaldo() : string
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
