<?php 
session_start();

if(isset($_POST['login'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == 'sakib' && $password == '12345'){
		$_SESSION['kaj'] = 'hoice';
	}

}

if( isset( $_SESSION['kaj']) ){
	echo "THIS IS ".$username." PROFILE".' '.'<a href="logout.php">logout</a>';
}else{
	echo "PLZ LOGIN".' '.'<a href="index.php">Login</a>';
}

?>
