<?php
    class Lutador{

        //Atributo
        private $nome, $nacionalidade;
        private $idade, $altura, $peso;
        private $categoria, $vitorias, $derrotas, $empate;

        //Metodos
        function apresentar(){
            echo "<p>-------------------------------<p>";
            echo "<p>Chegou a hora! O lutador " . $this->getNome();
            echo "veio diretamente de " . $this->getNacionalidade();
            echo "tem " . $this->getIdade() . " anos e pesa " . $this->getPeso();
            echo "<br>Ele tem " . $this->getVitorias() . " vitórias,";
            echo $this->getDerrotas() . " derrotas e " . $this->getEmpate() . " empates";
        }

        function status(){
            echo "<p>-------------------------------<p>";            
            echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        }

        function ganharLuta(){
            $this->setVitorias(getVitorias() + 1);
        }

        function perderLuta(){
            $this->setDerrotas(getDerrotas() + 1);
        }

        function empatarLuta(){
            $this->setEmpate(getEmpate()+1);
        }

        //Metodos Especiais
        function __construct($no,$na,$id,$al,$pe,$ca,$vi,$de,$em){
            $this->nome=$no;
            $this->nacionalidade=$na;
            $this->idade=$id;
            $this->altura=$al;
            $this->peso=$pe;
            $this->categoria=$ca;
            $this->vitorias=$vi;
            $this->derrotas=$de;
            $this->empate=$em;
        }

        function getNome(){
            return $this->nome;
        }

        function setNome($no){
            $this->nome = $no;
        }

        function getNacionalidade(){
            return $this->nacionalidade;
        }

        function setNacionalidade($na){
            $this->nacionalidade = $na;
        }
       
        function getIdade(){
            return $this->idade;
        }

        function setIdade($id){
            $this->idade = $id;
        }

        function getAltura(){
            return $this->altura;
        }

        function setAltura($al){
            $this->altura = $al;
        }

        function getPeso(){
            return $this->peso;
        }

        function setPeso($pe){
            $this->peso = $pe;

            setCategoria();
        }

        function getCategoria(){
            return $this->categoria;
        }
        
        function setCategoria(){
            if ($this->peso < 52.2){
                $this->categoria = 'Inválido';
            }
            elseif ($this->peso < 70.3){
                $this->categoria = 'Leve';
            }
            elseif ($this->peso < 83.9){
                $this->categoria = 'Médio';
            }
            elseif ($this->peso < 120.2){
                $this->categoria = 'Pesado';
            }
            else{
                $this->categoria = 'Inválido';
            }            
        }

        function getVitorias(){
            return $this->vitorias;
        }

        function setVitorias($vi){
            $this->vitorias = $vi;
        }

        function getDerrotas(){
            return $this->derrotas;
        }

        function setDerrotas($de){
            $this->derrotas = $de;
        }

        function getEmpate(){
            return $this->empate;
        }

        function setEmpate($em){
            $this->empate = $em;
        }
    }
?>