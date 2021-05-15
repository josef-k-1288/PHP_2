<?php 
	require_once "config.php";
	function db()
	{
		$con = mysqli_connect(HOST,USER,PASSWORD,DATABASE) or die ("Error"); // konekcija

		return $con;
		
	}

	function dd($val)
	{
		echo "<pre>";
		die(var_dump($val)); // funkcija koja lepse formatira varijablu
		echo "</pre>";
	}

	function logUser($user)
	{
		dd($user);
	}