<?php
$method 	= $_SERVER['REQUEST_METHOD'];
$request 	= explode('/', trim($_SERVER['PATH_INFO'],'/'));
$action 	= preg_replace('/[^a-z0-9_]+/i','',array_shift($request));
require_once 'guestModel.php';
$m = new GuestModel();




if($method==='GET'){
	

	if($request[0]>0){
		echo $m->all($request[0]);
		exit;
	}

	if($request[0]==""){
		$m->where__('archived','=','no');
		$m->foreign__('location_type','masters');
		echo $m->all($request[0]);
		exit;
	}


	if($request[0]=="ocupacion"){

		$m->where__('deleted','=','no');	
		echo $m->all();
		exit;
	}



}




/*

if(($method==='GET')&&($request[0])){


	echo $m->all($request[0]);
	exit;


}*/


if($method==='PUT'){
	parse_str(file_get_contents('php://input'), $_PUT);

	$m->location_type = $_PUT['location_type'];
	$m->location_subtype = $_PUT['location_subtype'];
	$m->name = $_PUT['name'];
	$m->longname = $_PUT['longname'];
	$m->details = $_PUT['details'];
	$m->telephone = $_PUT['telephone'];
	//$m->address = $_PUT['address'];
	$m->estatu = $_PUT['estatu'];
	$m->image = $_PUT['image'];
	echo $m->save($_PUT['id']);
	exit;


}


if($method==='POST'){
	parse_str(file_get_contents('php://input'), $_PUT);
	$m->name = $_PUT['name'];
	$m->longname = $_PUT['longname'];
	$m->type = $_PUT['type'];
	echo $m->save();
	exit;
}


if($method==='DELETE'){

	parse_str(file_get_contents('php://input'), $_PUT);
	$m->archived = "yes";
	$m->archived_at = $m->now__();
	echo $m->save($_PUT['id']);
	exit;



	exit;
}





exit;
?>
