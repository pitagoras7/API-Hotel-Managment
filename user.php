<?php
require_once 'userModel.php';


$u = new UserModel();

$table 		= "users";
$method 	= $_SERVER['REQUEST_METHOD'];
$request 	= explode('/', trim($_SERVER['PATH_INFO'],'/'));
$action 	= preg_replace('/[^a-z0-9_]+/i','',array_shift($request));


$u->password    = "1";
echo $u->save(2);
exit;


## INSERCION DE UN NUEVO CAMPO 
//$u->name = "Juan Castillo";
//$u->email= "juancastillo@gmail.com";
//$u->save();



## EDITA UN REGISTRO BASADO EN EL ID
//$u->name = "Juan Castillo";
//$u->email= "juancastillo@gmail.com";
//$u->password= "12345";
//$u->save(3);




## EDITA REGISTROS CON CONDICIONAL SIN UN ID , EDITA VARIOS REGISTROS
//$u->where__('email','like','%@%');
//$u->name = "Juan Castillo";
//$u->email= "juancastillo@gmail.com";
//$u->password= "12345";
//$u->save();


## CONSULTA DE REGISTROS
// echo $u->all();



## CONSULTA DE UN REGISTRO POR ID
// echo $u->all(2);



## CONSULTA DE UN REGISTRO CON CLAVES FORANEAS A foreign__ SE 
## LE PASA DE PARAMETRO EL CAMPO QUE HACE EL ENLACE Y EL NOMBRE 
## DE LA TABLA CON LA QUE HACE LA RELACION
//$u->foreign__('cargo_id','cargos');
//$u->foreign__('departamento_id','departamentos');
//echo $u->all();


## CONSULTA DE UN REGISTRO CON CONDICIONALES Y ORDERB Y LIMIT
//$u->extra_sql__ = " order by name  limit 1";
//$u->where__('email','like','%@%');
//echo $u->all();


## CONSULTA DE UN REGISTRO COMPLETO
//$u->extra_sql__ = " order by name  limit 1";
//$u->where__('email','like','%@%');
//$u->foreign__('cargo_id','cargos');
//$u->foreign__('departamento_id','departamentos');
//echo $u->all();


## CONDICIONALS PROPIOS
//$u->extra_sql__ = " and email like '%dro%' order by name  limit 1";
//echo $u->all();

/*
$u->email       ="projascastillo@gmail.com";
$u->name 	    ='projas';
$u->password 	='99999';
$u->save(1);
*/

//$u->where__('name','like','%m%');
//$u->foreign__('cargo_id','cargos');
//$u->foreign__('departamento_id','departamentos');
// $u->all();

//$u->password_verify('projas','99999');







if($method==='GET'){






	exit;
}



if($method==='POST'){
parse_str(file_get_contents('php://input'), $_POST);


	 if($action=='login'){ 
	 echo $u->password_verify($_POST['email'],$_POST['password']);
	 exit;
	 };




exit;
}





if($method==='PUT'){
parse_str(file_get_contents('php://input'), $_PUT);
	










	exit;
}




if($method==='DELETE'){
parse_str(file_get_contents('php://input'), $_PUT);







	exit;
}











?>