<?php

	require_once("../model/PersonasModel.php");
	session_start();
	$persona = new PersonasModel();
	 $pers_data= $persona->GetPersonaSpec();
	require_once("../view/info.php");
	


?>




