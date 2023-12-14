<?php
session_start();
require_once "user3/db.php"; 
$name 	 = $_POST['guest_name'];
$email 	 = $_POST['guest_email'];
$message = $_POST['guest_message'];


if(!empty($name) && !empty($email) && !empty($message)){	
	$guest_message_insert = $dbcon->query("INSERT INTO guest_messages(name,email,message) VALUES ('$name','$email','$message')");
	$_SESSION['message_send'] = "Message send successfully!";
	header('location: index3.php#contact');



}else{
	$_SESSION['guest_message_error'] = "Fill all field correctly";
	header('location: index3.php#contact');
}


?>