<?php

class ContaBanco{
    publico $numeroConta;
    protected $tipo;
    private $dono;    
    private $saldo;
    private $status;

    public funtion __construct(){        
        $this->setStatus(false);
        $this->setSaldo(0);        
    }

    public function setNumeroConta($n){
        this->numeroConta = $n;
    }

    public function getNumeroConta(){
        return this->numeroConta;
    }

    public function setTipo($t){
        this->tipo = $t;
    }

    public function getTipo(){
        return this->tipo;
    }

    public function setDono($d){
        this->dono = $d;
    }

    public function getDono(){
        return this->dono;
    }

    public function setSaldo($s){
        this->saldo = $s;
    }

    public function getSaldo(){
        return this->saldo;
    }

    public function setStatus($s){
        this->status = $s;
    }

    public function getStatus(){
        return this->status;
    }

    
    public abrirConta($t){
        this->setTipo($t);
        this->setStatus(1);

        if ($t == 'cc'){
            this->setSaldo(50);
        }
        else{
            this->setSaldo(150);
        }
        
    }

    public fecharConta(){
        $saldo = this->getSaldo();

        if ($saldo > 0)
        {
            echo "Conta não pode ser encerrada pois há em saldo :$saldo";
        }
        else if ($saldo < 0)
        {
            echo "Conta não pode ser encerrada pois o saldo esta negativo em :$saldo";
        }
        else
        {
            this->setStatus(false);
            
            echo "Conta encerrada!";
        }
    }

    public function depositar($valor){
        if (this->getStatus())
        {
            this->setSaldo(this->getSaldo() + $valor);
        }
        else {
            echo "Impossível depositar pois a conta está encerrada!";
        }

    }

    public function sacar($valor){
        $saldo = this->getSaldo();
        if (this->getStatus())
        {
            if ($saldo >= $valor)
            {
                this->setSaldo ($saldo - $valor);
            }
            else {
               echo "Saldo insuficiente!";
            }
        }
        else {
            echo "Impossível sacar pois a conta está encerrada!";
        }
    }

    public pagarMensal(){
        if (this->getTipo() == 'cc'){
            $mensal = 12;
        }
        else{
            $mensal = 20;
        }

        if (this->getStatus())
        {
            $saldo = this->getSaldo();

            if ($saldo >= $mensal)
            {
                this->setSaldo($saldo - $mensal);
            }
            else {
               echo "Saldo insuficiente!";
            }
        }
        else {
            echo "Impossível cobrar mensalidade, conta está encerrada!";
        }
    }   

    public function getSaldo(){
        return $this->saldo;
    }
}
cc conta corrente
cp conta poupança
so deixar fechar conta se nao tem dinheiro ou se negativo
para depositar ou sacar, conta tem que estar aberta, status=1, valor saque <= saldo
pagarMensalidade cc=12 e cp=20
todos atributos terem get e set
?>