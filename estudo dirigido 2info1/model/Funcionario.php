<?php



public class Funcionario {

    require __DIR__"/../../model/Data.php";

    $data = new Data();
    $dataEntrada = $data->retorna();


    public $departamento;
    public $salario;
    public $dataEntrada;
    public $cpf;



    public function recebeAumento($salario) {
        $this->salario = $salario + ($salario * 0.1);
    }

    public function calculaGanhoAnual(){

        $this->salario = $salario * 12;
        return $ganho;
    }

    public function mostra(){
        $tudo[];

        $tudo[] = $this->departamento;
        $tudo[] = $this->salario;
        $tudo[] = $this->dataEntrada;
        $tudo[] = $this->cpf;

        return $tudo;

        return "O funcionario {$this->nome} do departamento {$this->departamento}, funcionário desde {$this->dataEntrada->getData()}, possui salário de {$this->salario}";
    }

/* QUESTÃO 9

    public function __toString(){
        echo "O funcionario do departamento".$departamento.", funcionario desde".$data." possui salario de".$salario.".";

    };
*/

}