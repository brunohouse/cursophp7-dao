<?php

require_once("config.php");

// CARREGA UM USUÁRIO

//$admin = new Usuario();
//$admin->loadById(1);
//echo $admin;

// CARREGA UMA LISTA DE USUÁRIOS

//$list = Usuario::getList();
//echo json_encode($list);

// CARREGA UMA LISTA DE USUÁRIOS BUSCANDO PELO LOGIN

$search = Usuario::search("jo");

echo json_encode($search);