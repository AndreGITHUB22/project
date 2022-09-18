<?php

  $servername="localhost";

 	$name=trim($_POST["username"]);

 	$email=$_POST["email"];

 	$pass=$_POST["password"];

  $pass=md5($pass."fdgdfgd");

  $dbname="register1";
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $conn=new mysqli($servername,'root','',$dbname);

  $result = mysqli_query($conn, query:"SELECT * FROM `users` WHERE email='$email' AND password='$pass' ");

   $user=$result->fetch_assoc();

  if(count($user) == 0)
    {
      echo "Користувача не знайдено";
      exit();
    }

  setcookie('user',$user['email'], time() + 3600 * 24,"/" );

  $conn->close(); 
  