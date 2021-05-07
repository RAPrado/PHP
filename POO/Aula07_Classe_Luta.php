<?php
require_once 'Aula07_Classe.php'; //Arquivo onde tem a classe lutador.
class Luta{
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //Métodos públicos
    public function marcarLuta($l1,$l2){
        if ($l1->getCategoria() === $l2->getCategoria()
            && $l1 != $l2) {
                $this->aprovado = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
        }
        else {
            $this->aprovado = false;
            $this->desafiado = null;
            $this->desafiante = null;

        }
        
    }

    public function lutar(){
        if ($this->aprovada){
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);

                switch($vencedor){
                    case 0: //Empate
                        echo "<p>Empate!<p>";
                        $this->desafiado->empatar();
                        $this->desafiante->empatar();
                        break;

                    case 1: //Desafiado vence
                        echo "<p>" . $this->desafiado->getNome() . " venceu";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;

                    case 2: //Desafiante vence
                        echo "<p>" . $this->desafiante->getNome() . " venceu";
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();
                        break;                    
                }            
        }
        else {
            $this->aprovado = false;
            $this->desafiado = null;
            $this->desafiante = null;

        }
        
    }

    //Métodos Especiais
    function getDesafiado(){
        return $this->desafiado;
    }

    function setDesafiado($de){
        $this->desafiado = $de;
    }

    function getDesafiante(){
        return $this->desafiante;
    }

    function setDesafiado($de){
        $this->desafiante = $de;
    }

    function getRounds(){
        return $this->rounds;
    }

    function setRounds($ro){
        $this->rounds = $ro;
    }

    function getAprovada(){
        return $this->aprovada;
    }

    function setAprovada($ap){
        $this->aprovada = $ap;
    }
}
?>