<?php


	$jsondata = Array();
	$jsondata["success"]=true;
	$jsondata["data"]=Array();
	$jsondata["data"]["universidad"]="Universidad Autonoma De Sinaloa";
	$jsondata["data"]["Facultad"]="Facultad de Ingenieria En Software";
	$jsondata["data"]["Participantes"]= Array("Leyva Navarrete Luis Enrique","Serrano Molina Luis Fernando","Olais Joto Javier","Rodriguez Urbalejo Jesus de batamote");
	$jsondata["data"]["telefono"]="6871150617";
	$jsondata["data"]["grupo"]="3-02";
	
	header('Content-type: application/json; charset=utf-8');
	echo json_encode($jsondata);
	
	exit();
?>