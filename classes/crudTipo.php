<?php

require_once 'classes/conexao.php';
	class crudTipos extends Conexao {
    private $descricao;
    private $unidade_medida;
 
    public function getDescricao() {
        return $this->descricao;
    }
  
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
  
    public function getUnidade_Medida() {
        return $this->unidade_medida;
    }
  
    public function setUnidade_Medida($unidade_medida) {
        $this->unidade_medida = $unidade_medida; 	
    }
} // final classe

?>