<?php
    require_once "Aula12_Classe_Animal.php"

    class Mamifero extends Animal{
        private $corPelo;

        function locomover(){
            echo "<p>Correndo<p>";
        }

        function alimentar(){
            echo "<p>Mamando<p>";

        }

        function emitirSom(){
            echo "<p>Som de mamifero<p>";
        }

        function setCorPelo($pe){
            $this->corPelo=$pe;
        }

        function getCorPelo(){
            return $this->corPelo;
        }
    }
?>