<?php
    require_once "Aula12_Classe_Animal.php"

    class Peixe extends Animal{
        private $corEscama;

        function locomover(){
            echo "<p>Nadando<p>";
        }

        function alimentar(){
            echo "<p>Comer minhoca<p>";

        }

        function emitirSom(){
            echo "<p>Não faz som<p>";
        }

        function soltarBolha(){
            echo "<p>Soltou bolha<p>";
        }

        function setCorEscama($pe){
            $this->corEscama=$pe;
        }

        function getCorEscama(){
            return $this->corEscama;
        }
    }
?>