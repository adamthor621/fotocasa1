<?php
require_once('./model/class.inmuebles_categioria.php');
@$inmuebles_categioria=new inmuebles_categioria();
	$inmuebles_categioria_lista=$inmuebles_categioria->llista();
	var_dump($inmuebles_categioria_lista);

	require_once('./model/class.inmuebles_tipo.php');
	$inmuebles_tipo=new inmuebles_tipo();
	$inmuebles_tipo_lista=$inmuebles_tipo->llista();
require_once("./view/home.php");
require("controller.registro.php");