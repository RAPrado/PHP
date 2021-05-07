<?php
    require_once 'Aula06_Interface.php'
    class ControleRemoto implements Controlador{
            //Atributos
            private $volume;
            private $ligado;
            private $tocando;

            //Métodos
            function __contruct() {
                $this->volume = 50;
                $this->ligado = false;
                $this->tocando = false;
            }

            private function getVolume(){
                return $this->volume;
            }

            private function setVolume($volume){
                $this->volume = $volume;
            }


            private function getTocando(){
                return $this->tocando;
            }

            private function setTocando($tocando){
                $this->tocando = $tocando;
            }

            public function ligar(){
                $this->setLigado(true);
            }

            public function desligar(){
                $this->setLigado(false);
            }

            public function abrirMenu(){
                echo "<br>Está ligado :" . ($this->getLigado() . "Sim" : "Não");
                echo "<br>Está tocando :" . ($this->getTocando() . "Sim" : "Não");
                echo "<br>Volume :" . $this->getVolume();

                for($i=0; $i <= $this->getVolume(); $i+=10){
                    echo "|";
                }
                echo "<br>";

            }

            public function fecharMenu(){
                echo "<br>Fechando Menu...";
            }
            
            public function maisVolume(){
                if ($this->getLigado()){
                    $this->setVolume($this->getVolume() + 1);
                }
            }

            public function menosVolume(){
                if ($this->getLigado()){
                    $this->setVolume($this->getVolume() - 1);
                }
            }

            public function ligarMudo(){
                if ($this->getLigado() && $this->getVolume() > 0){
                    $this->setVolume(0);
                }
            }

            public function desligarMudo(){
                if ($this->getLigado() && $this->getVolume() == 0){
                    $this->setVolume(50);
                }

            }
            
            public function play(){
                if ($this->getLigado() && !($this->getTocando())){
                    $this->setTocando(true);
                }
            }
                
            public function pause(){
                if ($this->getLigado() && ($this->getTocando())){
                    $this->setTocando(flase);
                }
            }
    }
?>