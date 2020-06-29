<?php
	$server='localhost';
	$id='root';
	$pwd='';
    $dbname='user-verification';  
    
	$conn = mysqli_connect($server , $id , $pwd , $dbname);
	if (!$conn){
  		die("Could not connect: " . 'mysqli_errno()' );
  	}
	mysqli_query($conn ,"SET NAMES utf8");
    // mysql_close($conn);

