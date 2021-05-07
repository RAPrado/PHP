<?php
    require_once 'Aula10_Classe_Pessoa.php';

    class Professor extends Pessoa{
        private $especialidade;
        private $salario;

        public function ReceberAumento($au){
            $this->salario += $au;
        }

        function setEspecialidade($es){
            $this->especialidade = $es;
        }

        function getEspecialidade(){
            return $this->especialidade;
        }

        function setSalario($sa){
            $this->salario = $sa;
        }

        function getSalario(){
            return $this->salario;
        }
    }

?>