<?php
$method 	= $_SERVER['REQUEST_METHOD'];
$request 	= explode('/', trim($_SERVER['PATH_INFO'],'/'));
$action 	= preg_replace('/[^a-z0-9_]+/i','',array_shift($request));
require_once 'serviceModel.php';
$m = new ServiceModel();







if($method==='GET'){
	

	if($request[0]>0){
		echo $m->all($request[0]);
		exit;
	}

	if($request[0]==""){
		$m->where__('archived','=','no');
		echo $m->all($request[0]);
		exit;
	}

	if($request[0]=="color"){
		$m->where__('color','=','red');
		$m->where__('archived','=','no');
		echo $m->all();
		exit;
	}


	if($request[0]=="roomservice"){
		$m->where__('archived','=','no');
		echo $m->all();
		exit;
	}


	if($request[0]=="locationSubtype"){
		$m->where__('type','=',strtolower($request[1]));
		$m->where__('archived','=','no');
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

	$m->name = $_PUT['name'];
	$m->longname = $_PUT['longname'];
	$m->color = $_PUT['color'];
	$m->icon = $_PUT['icon'];
	$m->type = $_PUT['type'];
	echo $m->save($_PUT['id']);
	exit;


}


if($method==='POST'){
	parse_str(file_get_contents('php://input'), $_PUT);
	$m->name = $_PUT['name'];
	$m->longname = $_PUT['longname'];
	$m->color = $_PUT['color'];
	$m->icon = $_PUT['icon'];
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

if($action==1){
	$m->where__('archived','=','no');

	echo $m->all();
}




exit;
?>
