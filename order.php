<?php
require_once 'userModel.php';
require_once 'orderModel.php';
require_once 'orderDetailModel.php';
require_once 'orderExtraModel.php';


$u = new UserModel();
$m = new OrderModel();
$o = new OrderDetailModel();


$table 		= "users";
$method 	= $_SERVER['REQUEST_METHOD'];
$request 	= explode('/', trim($_SERVER['PATH_INFO'],'/'));
$action 	= preg_replace('/[^a-z0-9_]+/i','',array_shift($request));




if($method==='GET'){

	exit;
}



if($method==='POST'){
	parse_str(file_get_contents('php://input'), $_PUT);

	$m->guest_id 			= $_PUT['guest_id'];
	$m->mesa_id 			= $_PUT['mesa_id'];
	$m->order_type			= $_PUT['order_type'];
	$m->description 		= $_PUT['description'];
	$m->estatu 				= $_PUT['estatu'];
	$m->created_at	 		= $m->now__();
	$order 					= $m->save();
	$order 					= $m->ta__($order);

	for ($i=0; $i < count($_PUT['detalle']) ; $i++) { 

		$o = new OrderDetailModel();
		$o->order_id 			= $order[0]->id;
		$o->service_id 			= $_PUT['detalle'][$i]['service_id'];
		$o->quanty  			= $_PUT['detalle'][$i]['quanty'];
		$o->estatu  			= $_PUT['detalle'][$i]['estatu'];
		$o->observation  		= $_PUT['detalle'][$i]['observation'];
		$o->subtotal 			= $_PUT['detalle'][$i]['subtotal'];
		$o->tax  				= $_PUT['detalle'][$i]['tax'];
		$o->total  				= $_PUT['detalle'][$i]['total'];
		$o->caja_id  			= $_PUT['detalle'][$i]['caja_id'];
		$o->exento  			= $_PUT['detalle'][$i]['exento'];
		$o->archived  			= "no";

		$orderDetail 			= $o->save();
		$orderDetail 			= $m->ta__($orderDetail);

				for ($z=0; $z < count($_PUT['detalle'][$i]['extras']) ; $z++) { 
		

					$e = new OrderExtraModel();
                    $e->orderDetail_id 			= $orderDetail[0]->id;
                    $e->quanty 					= $_PUT['detalle'][$i]['extras'][$z]['quanty'];
                    $e->estatu 					= $_PUT['detalle'][$i]['extras'][$z]['estatu'];
                    $e->observation 			= $_PUT['detalle'][$i]['extras'][$z]['observation'];
                    $e->subtotal 				= $_PUT['detalle'][$i]['extras'][$z]['subtotal'];
                    $e->tax 					= $_PUT['detalle'][$i]['extras'][$z]['tax'];
                    $e->total 					= $_PUT['detalle'][$i]['extras'][$z]['total'];
                    $e->archived 				= "no";
                    $e->exento 					= $_PUT['detalle'][$i]['extras'][$z]['exento'];
                    $e->save();

                }

                unset($o);  

    }

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