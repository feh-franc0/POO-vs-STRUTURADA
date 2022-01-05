<?php
require 'Funcionario.class.php';
//Ultilizando o objeto Funcionario e definindo suas caracteristicas
$funcionario = new Funcionario();
$funcionario->setNome('Fulano'); 
$funcionario->setSalarioBase(1000);
$funcionario->setHorasExtras(10);
$funcionario->setValorDaHora(20);

echo $funcionario->getSalarioEfetivo();