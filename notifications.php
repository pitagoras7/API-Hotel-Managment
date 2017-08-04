<?php
$method 	= $_SERVER['REQUEST_METHOD'];
$request 	= explode('/', trim($_SERVER['PATH_INFO'],'/'));
$action 	= preg_replace('/[^a-z0-9_]+/i','',array_shift($request));
require_once 'notificationModel.php';

$m = new NotificationModel();


if($action==1){
	echo $m->all();
}


exit;
?>
