<?php
    require_once "Aula11_Classe_Aluno.php";

    classe Bolsista extends Aluno{
        private $bolsa;

        public function renovarBolsa(){
            echo "<br>Bolsa renovada!";
        }

        public function pagarMensalidade(){
            echo $this->nome . " é bolsista, então paga mensalidade com desconto!"
        }


        function setBolsa($bo){
            $this->bolsa = $bo;
        }

        function getBolsa($bo){
            return $this->bolsa;
        }
    }
?>