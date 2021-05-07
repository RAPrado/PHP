<?php
    class Pessoa{
        //Atributo
        private $nome;
        private $idade;
        private $sexo;

        //Método
        function fazerAniversario(){
            $this->idade ++;
        }

        //Métodos Especiais
        function __construct($nome, $idade, $sexo){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
        }
        
        function setNome($no){
            $this->nome=$no;
        }

        function getNome(){
            return $this->nome;
        }

        function setSexo($se){
            $this->sexo = $se;
        }

        function getSexo($se){
            return $this->sexo;
        }

        function getIdade(){
            return $this->idade;
        }

        function setIdade($id){
            $this->idade =$id;
        }
    }
?>