<?php

$dominioDir = dirname(dirname(__FILE__));

return array(
    'InfraEstrutura\\' => array($dominioDir),
    'XSAUTH\\' => array($dominioDir . DIRECTORY_SEPARATOR . 'Dominio'),
    'Test\\' => array($dominioDir . DIRECTORY_SEPARATOR . 'Test'),
    'REST\\' => array($dominioDir),
);
