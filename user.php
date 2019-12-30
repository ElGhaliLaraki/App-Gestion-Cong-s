<?php 

function user_exists($pseudo) {
	global $connection;
	$sql = "SELECT count(cin) as number FROM employe WHERE login = '$pseudo'";
	$query = $connection->query($sql);
	$data = $query->fetch_object();
	if ($data->number != 0) {
		return true;
	}else{
		return false;
	}
}

function user_id($pseudo) {
	global $connection;
	$sql = "SELECT cin FROM employe WHERE login = '$pseudo'";
	$query = $connection->query($sql);
	$data = $query->fetch_object();
	return $data->cin;
}

function login($pseudo, $password) {
	global $connection;
	//$password = md5($password);
	$user_id = user_id($pseudo);
	$sql = "SELECT count(cin) as number FROM employe WHERE login = '$pseudo' AND password = '$password'";
	$query = $connection->query($sql);
	$data = $query->fetch_object();
	$number = $data->number;
	if ($number == 1) {
		return $user_id;
	}else {
		return false;
	}
}

function en_ligne(){
	if (isset($_SESSION['id'])) {
		return true;
	}else {
		return false;
	}
}

 ?>