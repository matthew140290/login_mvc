<?php
require_once "../ruta.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/Modelo/Bo/usuarioBo.php';

$type = 3;

$np = new usuarioBo();
$r = $np->sessionUserTypeBo($type);
