<?php
    //..request a classe Pessoa
    require_once 'Pessoa.php';


    //.. a classe PessoaFisica é abstrata e herdeira de Pessoa
    abstract class PessoaFisica extends Pessoa{
        protected $sexo;
        protected $cpf;
        protected $rg;
        protected $salario;


        public function apresentar(){
            //..parent faz referência a classe mãe
            parent::apresentar();
            echo "Sexo: $this->sexo <br/>";
            echo "CPF: $this->cpf <br/>";
            echo "RG: $this->rg <br/>";
            echo "Salario: $this->salario <br/>";
        }
        function __construct($id=null, $nome=null, Cidade $cidade=null, $sexo=null, $cpf=null, $rg=null, $salario=null){
            parent:: __construct($id,$nome,$cidade);
            $this->sexo = $sexo;
            $this->cpf = $cpf;
            $this->rg = $rg;
            $this->salario = $salario;
        }

        public function setSexo($sexo)
        {
            $this->sexo = $sexo;
        }
        public function getSexo()
        {
            return $this->sexo;
        }

        public function setCpf($cpf)
        {
            $this->cep = $cpf;
        }
        public function getCpf()
        {
            return $this->cpf;
        }

        public function setRg($rg)
        {
            $this->rg = $rg;
        }
        public function getRg()
        {
            return $this->rg;
        }

        public function setSalario($salario)
        {
            $this->salario = $salario;
        }
        public function getSalario()
        {
            return $this->salario;
        }
        public abstract function calcularSalario();
    }

?>