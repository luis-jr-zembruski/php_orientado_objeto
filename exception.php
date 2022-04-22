<?php

function divisao($number1, $number2) {
    if ($number2 == 0) {
        throw new Exception("Não é possível dividir por zero");
    }
    return $number1 / $number2;
}

try{
  $status = divisao(10, 5);
  echo $status;
} catch (Exception $e){
  echo $e->getMessage();
}
