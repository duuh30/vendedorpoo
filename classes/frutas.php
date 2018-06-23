<?php
	class Frutas {
  
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

    public function Inserir($frutas) {
       try {
           $sql = "INSERT INTO frutas (    
               nome,
               quantidade,
               preco,
               id_tipo_fruta)
               VALUES (
               :nome,
               :quantidade,
               :preco,
               :id_tipo_fruta)";
 
           $p_sql = Conexao::getInstance()->prepare($sql);
 
           $p_sql->bindValue(":nome", $frutas->getNome());
           $p_sql->bindValue(":quantidade", $frutas->getQuantidade());
           $p_sql->bindValue(":preco", $frutas->getPreco());
           $p_sql->bindValue(":id_tipo_fruta", $frutas->getId_tipo_fruta());
           return $p_sql->execute();
       } catch (Exception $e) {
           echo "Ocorreu um erro ao tentar executar esta ação";
       }
   }  
     
  
}



?>