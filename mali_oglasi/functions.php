<?php 
	require_once "config.php";
	function db()
	{
		$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE) or die ("Error");

		
	}