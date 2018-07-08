<?php
    //..request a classe Pessoa
    require_once 'Pessoa.php';


    final class  PessoaJuridica extends Pessoa{
        protected $nomeFantasia;
        protected $cnpj;
        protected $inscEstadual;
        protected $tipo;       
     

        public function apresentar(){
            //..parent faz referência a classe mãe
            parent::apresentar();
            echo "Nome Fantasia: $this->nomeFantasia <br/>";
            echo "CNPJ: $this->cnpj<br/>";
            echo "inscrição Estadual: $this->inscEstadual <br/>";         
            echo "Tipo: <br/>";
            $this->tipo->apresentar();
        }
        function __construct($id=null, $nome=null, Cidade $cidade=null, $nomeFantasia=null, $cnpj=null, $inscEstadual=null, Tipo $tipo=null){
            parent:: __construct($id,$nome,$cidade);
            $this->nomeFantasia = $nomeFantasia;
            $this->cnpj = $cnpj;
            $this->inscEstadual = $inscEstadual;
            $this->tipo = $tipo;
        }

        public function setNomeFantasia($nomeFantasia)
        {
            $this->nomeFantasia = $nomeFantasia;
        }
        public function getNomeFantasia()
        {
            return $this->nomeFantasia;
        }

        public function setCnpj($cnpj)
        {
            $this->cnpj = $cnpj;
        }
        public function getCnpj()
        {
            return $this->cnpj;
        }

        public function setInscEstadual($inscEstadual)
        {
            $this->inscEstadual = $inscEstadual;
        }
        public function getInscEstadual(){
            return $this->inscEstadual;
        }
        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }
        public function getTipo(){
            return $this->tipo;
        }
      
        public function calcularImposto(){
            $ganhoAnual = 200000;
            if($this->getTipo()->getNome() == 'IRPJ'){
                return $ganhoAnual*0.10;
            }else if($this->getTipo()->getNome() == 'COFINS'){
                return $ganhoAnual*0.20;
            }else if($this->getTipo()->getNome() == 'PIS'){
                return $ganhoAnual*0.60;
            }else{
                return  $ganhoAnual*0.80;
            }
        }
        
    }

?>

