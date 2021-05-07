<?php
    require_once 'Aula10_Classe_Pessoa.php';

    class Funcionario extends Pessoa{
        private $setor;
        private $trabalhando;

        public function mudarTrabalho($au){
            $this->trabalhando = ! $this->trabalhando;
        }

        function setSetor($se){
            $this->setor = $se;
        }

        function getSetor(){
            return $this->setor;
        }

        function setTrabalhando($tra){
            $this->trabalhando = $tra;
        }

        function getTrabalhando(){
            return $this->trabalhando;
        }
    }

?>