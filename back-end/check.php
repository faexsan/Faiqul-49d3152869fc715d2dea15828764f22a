<?php
include_once("config.php");

$username = $_GET['username'];
$sql = mysqli_query($conn, "SELECT * FROM t_user WHERE user_username = '".$username."' AND user_login_status = 1");
$result = array();

while($user = mysqli_fetch_array($sql)){
	$result['id'] = $user['user_id'];
	$result['username'] = $user['user_username'];
	$result['last_login'] = $user['user_last_login'];
}

$result = array("data"=> $result);
echo json_encode($result);
?>