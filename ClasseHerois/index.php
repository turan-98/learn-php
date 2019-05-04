<?php
class Heroi {
	public $nome;
	public $poderes;
	private $classe_heroi;

	public function getNome() {
		return $this->nome;
	}

	public function setNome($name) {
		$this->nome = $name;
	}

	public function getPoderes() {
		return $this->poderes;
	}

	public function setPoderes($powers) {
		$this->poderes = $powers;
	}

	public function getClasse() {
		return $this->classe_heroi;
	}

	public function setClasse($classe) {
		$this->classe_heroi = $classe;
	}

}

?>
