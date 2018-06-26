<?php

require_once 'classes/conexao.php';
	class crudMedidas extends Conexao {
    private $sigla;
    private $descricao;

  
    public function getSigla() {
        return $this->sigla;
    }
  
    public function setSigla($sigla) {
        $this->sigla = $sigla;
    }
  
    public function getDescricao() {
        return $this->descricao;
    }
  
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

} // final metodo 
   ?>