<?php
    require_once 'Aula10_Classe_Pessoa.php';

    class Aluno extends Pessoa{
        private $matricula;
        private $curso;

        public function CarcelarMatricula(){
            echo "<p>A matrícula será cancelada!</p>";
        }

        function setMatricula($ma){
            $this->matricula = $ma;
        }

        function getMatricula(){
            return $this->matricula;
        }

        function setCurso($cur){
            $this->curso = $cur;
        }

        function getCurso(){
            return $this->curso;
        }
    }

?>