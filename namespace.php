<?php

require 'sobre0.php';
require 'sobre1.php';

$versao = new \aplicacao\v1\Sobre();
echo "Versão: ".$versao->getVersao();
echo "<br/>";
$sobre = new \aplicacao\v2\Sobre();
echo "Versão: ".$sobre->getVersao();

?>