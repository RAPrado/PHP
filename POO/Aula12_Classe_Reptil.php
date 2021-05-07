<?php
    require_once "Aula12_Classe_Animal.php"

    class Reptil extends Animal{
        private $corEscama;

        function locomover(){
            echo "<p>Rastejando<p>";
        }

        function alimentar(){
            echo "<p>Comer insetos<p>";

        }

        function emitirSom(){
            echo "<p>Som de réptil<p>";
        }

        function setCorEscama($pe){
            $this->corEscama=$pe;
        }

        function getCorEscama(){
            return $this->corEscama;
        }
    }
?>