<?php

$password		  ="12345&Ba";
$uppercase		  =preg_match('@[A-Z]@', $password);
$lowercase		  =preg_match('@[a-z]@', $password);
$number			  =preg_match('@[0-9]@', $password);
$karakter_spesial =preg_match('/\W/', $password);

if (!$uppercase || !$lowercase || !$number || !$karakter_spesial || strlen($password)<>8){
	echo"Pasword harus terdiri dari 8 karakter,dan memiliki kombinasi angka, huruf besar, huruf kecil, serta karakter spesial !!!";
}else{
	echo 'Nice, password memenuhi syarat';
}

?>

