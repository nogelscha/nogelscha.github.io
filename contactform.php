<?php

if (isset($_POST[’sumbit’])){
$name =$_POST[’name’]
$subject =$_POST[’subject’]
$mailfrom =$_POST[’mail’]
$message =$_POST[’message’]


$mailTo = "jrettenwender@gmail.com";
$headers = " From: ". $mailfrom;
$txt = "you have recived an email from".$name."Arrival is".$Anreise."Departure is".$Abreise.".\n\n".$message;

mail(mailTo, $subject, $txt, $headers);
header ("Locaction: index.php?mailsend");
}
?>
