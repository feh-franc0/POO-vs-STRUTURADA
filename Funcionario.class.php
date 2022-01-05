<?php
//estrutura da classe(objeto)
class Funcionario {

    private $nome;
    private $salarioBase;
    private $horasExtras;
    private $valorDaHora;

    public function setNome($n){
        $this->nome = $n;
    }
    public function setSalarioBase($base){
        $this->salarioBase = $base;
    }
    public function setHorasExtras($extra){
        $this->horasExtras = $extra;
    }
    public function setValorDaHora($valor){
        $this->valorDaHora = $valor;
    }

    public function getSalarioEfetivo(){
        return $this->salarioBase + ( $this->horasExtras * $this->valorDaHora );
    }
  
}
