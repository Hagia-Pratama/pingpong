<?php  
	$koneksi = new mysqli("localhost","root","","leaderboard");


	if(!$koneksi){
		die("Koneksi error");
	}
?>