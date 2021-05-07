<?php
    require_once "Aula12_Classe_Animal.php"

    class Ave extends Animal{
        private $corPena;

        function locomover(){
            echo "<p>Voando<p>";
        }

        function alimentar(){
            echo "<p>Comer sementes<p>";

        }

        function emitirSom(){
            echo "<p>Piar<p>";
        }

        function fazerNinho(){
            echo "<p>Construiu um ninho<p>";
        }

        function setCorPena($pe){
            $this->corPena=$pe;
        }

        function getCorPena(){
            return $this->corPena;
        }
    }
?>