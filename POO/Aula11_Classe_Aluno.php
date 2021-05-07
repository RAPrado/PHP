<?php
    require_once 'Aula11_Classe_Pessoa.php';
    
    class Aluno extends Pessoa {
        private $matricula;
        private $curso;

        public function pagarMensalidade(){
            echo "<br>Pagando mensalidade do aluno " . $this->nome;
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