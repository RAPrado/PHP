<?php
    class Pessoa{
        private $nome;
        private $idade;
        private $sexo;

        public function fazerAniversario(){
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
            return $this-sexo;
        }
    }

?>