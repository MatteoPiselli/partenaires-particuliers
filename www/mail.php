<?php
$email=$_POST["email"];
$name=$_POST["name"];
$message=$_POST["message"];
$header = "From : $email\n";

if ($email!="" && $name!="" && $message!=""){
	$success = mail("augustin.timothee@gmail.com", "Questions ".$name, $message, $header);
	if ($success) {
		echo "mail bien envoyé";
	} else {
		echo "error";
	}
} else {
	echo "veuillez remplir tous les champs";
}

sleep(2);
header('Location: contact.html');
exit();