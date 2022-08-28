<?php
//get data from form  
$name = $_POST['nom'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];
$to = "Contact@stayinmedia.net";
$subject = "email depuis le site web";
$txt ="Nom = ". $name . "\r\n  Email = " . $email . "\r\n Téléphone = ". $tel ."\r\n Message =" . $message;
$headers = "From: no-reply@chargether.com" . "\r\n" .
"CC: Contact@chargether.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>
