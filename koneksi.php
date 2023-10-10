<?php  
	$koneksi = new mysqli("localhost","root","","db_leaderboardpingong");


	if(!$koneksi){
		die("Koneksi error");
	}
?>