<?php

require_once("config.php");

$admin = new Usuario();

$admin->loadById(1);

echo $admin;