<?php
	class PojoUsuario {
  
    private $nome;
    private $quantidade;
    private $preco;
    private $id_tipo_fruta;

  
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
        $this->preco = strtolower($preco);
    }
  
    public function getId_tipo_fruta() {
        return $this->id_tipo_fruta;
    }
  
    public function set_Id_tipo_fruta($id_tipo_fruta) {
        $this->id_tipo_fruta = $id_tipo_fruta;
    }    
     
  
}



?>