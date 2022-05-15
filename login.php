<?php
	$username=$_POST['kullaniciIsim'];
	$password=$_POST['parola'];
	
	if($username=="b211210048@sakarya.edu.tr" &&$password=="b211210048"){
	 echo " Hoşgeldiniz ".$_POST['kullaniciIsim']. " adlı kullanıcı";
	
	}else{
		header("Location:Login.html");
	}
    ?>