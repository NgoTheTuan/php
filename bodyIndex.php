<?php
	$view = isset($_GET['go'])?$_GET['go']:'';
	if($view !=''){
		include('./pages/'.$view.".php");
	}else{
		include("home.php");
	}
?>