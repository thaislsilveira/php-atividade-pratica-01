<?php
    require_once 'PessoaFisica.php';

    
    final class Professor extends PessoaFisica {


        private $formacao;
        private $escola;

        function __construct($id=null, $nome=null, Cidade $cidade = null, $sexo = null, $cpf = null, $rg = null, $salario = null, $formacao = null, $escola = null){
            parent:: __construct($id,$nome,$cidade,$sexo,$cpf, $rg, $salario);
            $this -> formacao = $formacao;
            $this -> escola = $escola;
        }

        public function apresentar(){
            parent:: apresentar();
            echo "Formação: $this->formacao<br>";
            echo "Escola:$this->escola<br>";
            echo "<br/>";
        }
       
        public function SetFormacao($formacao)
        {
            $this->formacao = $formacao;
        }
        public function getFormacao(){
            return $this->formacao;
        }

        public function SetEscola($escola)
        {
            $this->escola = $escola;
        }
        public function getEscola()
        {
            return $this->escola;
        }

        public function calcularSalario(){
            //.. paga o número de parâmetros passado na invocação do método
            $numArgs = func_get_args();
            switch (sizeof($numArgs)){
                //.. se foram passados dois parâmetros...
                case 1;
                    $valor = func_get_arg(0);
					$this->salario = $this->salario + $valor;
				break;
                case 2:
                    /* a função func_get_arg(int Sparam) 'pega' o parâmetro pelo indice.
                    assim como num array, o primeiro parâmetro é zero, o segundo é um,
                    e assim por diante
                    * */
                    $qtdeAulas = func_get_arg(0);
                    $valor = func_get_arg(1);
                    $this->salario = $qtdeAulas * $valor;
                    break;
                case 3:
                    $qtdeAulas = func_get_arg(0);
                    $valor = func_get_arg(1);
                    $perc = func_get_arg(2);
                    $this->salario = $qtdeAulas * $valor;
                    $this->salario = $this->salario + ($this->salario*($perc/100));
                    break;
                default;
                    $this->salario = 0;
                    break;        
            }
        }

    }
?>