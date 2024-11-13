<?php

include 'conexao.php';
include 'concessionaria.class.php';
include 'automoveis.class.php';
include 'alocacao.class.php';


var_dump(Conexao::getConexao());
$c = new Concessionaria();
$u = new Automovel();
$l = new Alocacao();

echo $c->addConcessionaria('Demétir concessionária');
var_dump($c->recebeConcessionaria('Demétir concessionária'));
echo $c->deleteConcessionaria('Demétir concessionária');
echo $c->updateConcessionaria('Demétir concessionária', 'Atena concessionária');

