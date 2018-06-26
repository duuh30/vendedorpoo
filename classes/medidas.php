<?php

require_once 'classes/crud_medidas.php';
require_once 'classes/conexao.php';



class Medidas extends crudMedidas {
	public function inserirMedida(){
		$sql = "INSERT INTO medidas (sigla, descricao) VALUES (:sigla, :descricao)";
		$st = Conexao::prepare($sql);
		$sigla=$this->getSigla();
		$descricao=$this->getDescricao();
		$st->bindParam(':sigla', $sigla);
		$st->bindParam(':descricao', $descricao);
		return $st->execute();
	}

		public function pesquisarTudo(){
		$sql = "SELECT * FROM medidas";
		$st = Conexao::Prepare($sql);
		$st->execute();
		return $st->fetchAll();
}
}
?>