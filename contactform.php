<?php

if (isset($_POST[’sumit’])){
$name =$_POST[’name’]
$subject =$_POST[’subject’]
$mailfrom =$_POST[’mail’]
$message =$_POST[’message’]
$Abreise=$_POST[’Abreise]
$Anreise=$_PSOT[’Anreise’]

$mailTo = "bio1@utanet.at;
$headers = " From: ". $mailfrom;
$txt = "you have recived an email from".$name."Arrival is".$Anreise."Departure is".$Abreise.".\n\n".$message;

mail(mailTo, $subject, $txt, $headers);
header ("Locaction: index.php?mailsend)";
}
