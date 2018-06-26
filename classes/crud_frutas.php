<?php

require_once 'classes/conexao.php';
	class crudFrutas extends Conexao {
    private $nome;
    private $quantidade;
    private $preco;
    private $tipo_fruta_id;

  
    public function getNome() {
        return $this->nome;
    }
  
    public function setNome($nome) {
        $this->nome = $nome;
    }
  
    public function getQuantidade() {
        return $this->quantidade;
    }
  
    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
  
    public function getPreco() {
        return $this->preco;
    }
  
    public function setPreco($preco) {
        $this->preco = $preco;
    }
  
    public function getTipo_Fruta_id() {
        return $this->tipo_fruta_id;
    }
  
    public function setTipo_Fruta_id($tipo_fruta_id) {
        $this->tipo_fruta_id = $tipo_fruta_id;
    }  
     
} 


?>