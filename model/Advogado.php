<?php
    require_once 'PessoaFisica.php';

    
    final class Advogado extends PessoaFisica {


        private $oab;
        private $valorConsulta;

        function __construct($id=null, $nome=null, Cidade $cidade = null, $sexo = null, $cpf = null, $rg = null, $salario = null, $oab = null, $valorConsulta = null){
            parent:: __construct($id,$nome,$cidade,$sexo,$cpf, $rg, $salario);
            $this -> oab = $oab;
            $this -> valorConsulta = $valorConsulta;
        }

        public function apresentar(){
            parent:: apresentar();
            echo "OAB: $this->oab<br>";
            echo "Valor da Consulta:$this->valorConsulta<br>";
            echo "<br/>";
        }
       
        public function SetOab($oab)
        {
            $this->oab = $oab;
        }
        public function getOab(){
            return $this->oab;
        }

        public function SetValorConsulta($valorConsulta)
        {
            $this->valorConsulta = $valorConsulta;
        }
        public function getValorConsulta()
        {
            return $this->valorConsulta;
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