<?php
    //..requer a classe Cidade
    require_once 'Cidade.php';


    //..a classe Pessoa é abistrata
    abstract class Pessoa{
        protected $id;
        protected $nome;
        protected $cidade;

        //..construtor polimórfico
        function __construct($id=null, $nome=null, Cidade $cidade=null)
        {
            $this->id = $id;
            $this->nome = $nome;
            $this->cidade = $cidade;
        }

        public function apresentar(){
            echo "ID: $this->id <br/>";
            echo "Nome: $this->nome <br/>";
            echo "Cidade: <br/>";
            //.. aqui, invoca-se o método apresentar do objeto cidade
            $this->cidade->apresentar();
        }

        public function setId($id)
        {
            $this->id = $id;
        }
        public function getId()
        {
            return $this->id;
        }

        public function setNome($Nome)
        {
            $this->nome = $nome;
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function setCidade($cidade)
        {
            $this->cidade = $cidade;
        }
        public function getCidade(){
            return $this->cidade;
        }
        
    }


?>