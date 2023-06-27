<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$number= $_POST['number'];

$to = "ayandamaseko1234@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message "\r\n number =" . $number;
$headers = "From: noreply@yoursite.com" . "\r\n" .
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect 
?>