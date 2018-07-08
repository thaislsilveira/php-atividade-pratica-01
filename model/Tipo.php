<?php
    final class Tipo {
        private $id;
        private $nome;
       
        function __construct($id=null, $nome=null){
            $this->id = $id;
            $this->nome = $nome;
        }
        public function apresentar(){
            echo "ID: $this->id <br/>";
            echo "Nome: $this->nome <br/>";
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
    }

?>