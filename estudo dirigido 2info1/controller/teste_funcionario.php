<?php

    require __DIR__ "/../../model/Funcionario.php";
    require __DIR__"/../../model/Data.php";


    $funcionario1 = new Funcionario();


    $funcionario1->salario = 1500;
    $funcionario1->cpf = 1923681279;
    $funcionario1->dataEntrada->dia = 15;
    $funcionario1->dataEntrada->mes = 09;
    $funcionario1->dataEntrada->ano = 1999;
    $funcionario1->departamento = "logistica";

    $funcionario2 = new Funcionario();

    $funcionario2->salario = 2100;
    $funcionario2->cpf = 1926123159;
    $funcionario1->dataEntrada->dia = 20;
    $funcionario1->dataEntrada->mes = 11;
    $funcionario1->dataEntrada->ano = 1985;
    $funcionario2->departamento = "diretoria";

    print_r($funcionario1);
    print_r($funcionario2);


