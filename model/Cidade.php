<?php
    final class Cidade {
        private $id;
        private $nome;
        private $uf;
        private $cep;

        function __construct($id=null, $nome=null, $uf=null,$cep=null){
            $this->id = $id;
            $this->nome = $nome;
            $this->uf = $uf;
            $this->cep = $cep;
        }
        public function apresentar(){
            echo "ID: $this->id <br/>";
            echo "Nome: $this->nome <br/>";
            echo "UF: $this->uf <br/>";
            echo "CEP: $this->cep <br/>";
        }

        public function SetId($id)
        {
            $this->id = $id;
        }
        public function getId(){
            return $this->id;
        }

        public function SetNome($nome)
        {
            $this->nome = $nome;
        }
        public function getNome()
        {
            return $this->nome;
        }

        public function SetUf()
        {
            $this->uf = $uf;
        }
        public function getUf(){
            return $this->uf;
        }

        public function SetCep($cep)
        {
            $this->cep = $cep;
        }
        public function GetCep()
        {
            return $this->cep;
        }
    }

?>