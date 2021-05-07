<?php
    abstract class Animal{
        protected $peso;
        protected $idade;
        protected $membros;

        abstract function locomover();
        abstract function alimentar();
        abstract function emitirSom();


        function setPeso($pe){
            $this->peso = $pe;
        }

        function getPeso(){
            return $this->peso;
        }

        function setIdade($id){
            $this->idade = $id;
        }

        function getIdade(){
            return $this->idade;
        }

        function setMembros($me){
            $this->membros = $me;
        }

        function getMembros(){
            return $this->Membros;
        }
    }
?>