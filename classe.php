<?php

class aluno {
	public $nome;
	public $email;
	public $curso;
	public $horario;
	function aluno() {
		$this->recebeAluno();
		$this->recebeCurso();
		$this->recebeHorario();
	}

	function recebeAluno() {
		$this->nome = $_POST['nome'];
		$this->email = $_POST['email'];

	}

	function recebeCurso() {
		$cursoMateria = $_POST['selectCurso'];
		switch ($cursoMateria) {
		case 'Design Responsivo':
			$cursoMateria = 'Design Responsivo';
			break;
		case 'Bootstrap':
			$cursoMateria = 'Bootstrap';
			break;
		case 'Foundation':
			$cursoMateria = 'Foundation';
			break;
		case 'Sass':
			$cursoMateria = 'Sass';
			break;
		case 'JavaScript':
			$cursoMateria = 'JavaScript';
			break;
		case 'Ruby on Rails':
			$cursoMateria = 'Ruby on Rails';
			break;
		case 'PHP':
			$cursoMateria = 'PHP';
			break;
		case 'Big Data':
			$cursoMateria = 'Big Data';
			break;
		case 'Lavarel':
			$cursoMateria = 'Lavarel';
			break;
		case 'Big Data':
			$cursoMateria = 'Big Data';
			break;
		case 'Python':
			$cursoMateria = 'Python';
			break;

		}
		$this->curso = $cursoMateria;
	}

	function recebeHorario() {
		$horarioCurso = $_POST['turnoCurso'];
		switch ($horarioCurso) {
		case 'diurno':
			$horarioCurso = 'diurno';
			break;
		case 'matutino':
			$horarioCurso = 'matutino';
			break;
		case 'noturno':
			$horarioCurso = 'noturno';
			break;

		}
		$this->horario = $horarioCurso;
	}

}

?>