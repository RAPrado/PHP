<?php
    abstract class Pessoa{
        protected $nome;
        protected $idade;
        protected private $sexo;

        public final function fazerAniversario(){
            $this->idade ++;
        }

        function setNome($no){
            $this->nome = $no;
        }

        function getNome(){
            return $this->nome;
        }
        function setIdade($id){
            $this->idade = $id;
        }

        function getIdade(){
            return $this->idade;
        }

        function setSexo($se){
            $this->sexo = $se;
        }

        function getSexo(){
            return $this->sexo;
        }
    }

?>