<?php

require_once 'classes/crudTipo.php';
require_once 'classes/conexao.php';



class Tipos extends crudTipos {
	public function inserirTipo(){
		$sql = "INSERT INTO tipos (descricao, unidade_medida) VALUES (:descricao, :unidade_medida)";
		$st = Conexao::prepare($sql);
		$descricao=$this->getDescricao();
		$unidade_medida=$this->getUnidade_Medida();
		$st->bindParam(':descricao', $descricao);
		$st->bindParam(':unidade_medida', $unidade_medida);
		return $st->execute();
	}

		public function pesquisarTudo(){
		$sql = "SELECT * FROM tipos";
		$st = Conexao::Prepare($sql);
		$st->execute();
		return $st->fetchAll();
}
}
?>