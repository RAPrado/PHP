<?php
    require_once 'Aula09_Classe_Pessoa.php';
    require_once 'Aula09_Interface.php';

    class Livro implements Publicacao{
        //Atributo
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        //Método
        function detalhes(){
            echo "Livro : " . $this->titulo . ", escrito por " . $this->autor;
            echo "<hr> Páginas : " . $this->totPaginas . ", Página atual : " $this->pagAtual;
            echo "<br> Sendo lido por : " . $this->leitor->getNome();
        }

        //Método Especiais
        function __construct($titulo, $autor, $totPaginas, $leitor){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->leitor = $leitor;
            $this->aberto = false;
            $this->pagAtual = 0;
        }

        function setTitulo($ti){
            $this->titulo = $ti;
        }

        function getTitulo(){
            return $this->titulo;
        }

        function setAutor($au){
            $this->$autor = $au;    
        }

        function getAutor(){
            return $this->autor;
        }

        function setTotPaginas($to){
            $this->$totPaginas = $to;
        }

        function getTotPaginas($to){
            return $this->totPaginas;
        }

        function setPagAtual($pa){
            $this->pagAtual = $pa;
        }

        function getPagAtual(){
            return $this->pagAtual;
        }

        function setAberto($ab){
            $this->aberto = $ab;
        }

        function getAberto($ab){
            return $this->aberto;
        }

        function setLeitor($le){
            $this->leitor = $le;
        }

        function getLeitor(){
            return $this->leitor;
        }

        public function abrir(){
            $this->aberto = true;
        }
        
        public function fechar(){
            $this->aberto = false;
        }

        public function folhear($p){
            if ($p > $this->totPaginas)
            {
                $this->pagAtual=0;    
            }
            else{
                $this->pagAtual = $p;    
            }
        }

        public function avancar(){
            $this->paginaAtual ++;
        }

        public function voltarPag(){
            $this->paginaAtual --;
        }
    }
?>