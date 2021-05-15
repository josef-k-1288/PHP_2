<?php 

   require_once "functions.php";
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];


   $sql = "INSERT INTO users VALUES (NULL, '$name', '$email', '$password')";

   $query = mysqli_query(db(),$sql); // iz db funkcije uzima $con varijablu za konekciju

   if($query){
       header("Location: login.view.php");
   }else{
       header("Location: register.view.php");
   }

?>