<?php

  $servername="localhost";
 	$name=trim($_POST["username"]);
 	$email=$_POST["email"];
 	$pass=$_POST["password"];
  $pass=md5($pass."fdgdfgd");
  $message=$_POST["message"];
 	$dbname="register1";

if (trim($name) == "")
 		echo "Ім'я не введено";
 	else if(strlen(trim($name)) <= 2)
 		echo "Некоректне Ім'я"; 
 	$conn=new mysqli($servername,'root','',$dbname);
 	if ($conn->connect_error) {
  die("Помилка з'єднання: " . $conn->connect_error);
} 
 	$sql= "INSERT INTO users (username,password,email,message) VALUES('$name','$pass',
 		'$email','$message')";
 	if ($conn->query($sql) === TRUE) {
  echo "Обліковий запис створено успішно";
  header('Location: index.php');
}
 
 else 
 {
  echo "Помилка: " . $sql . "<br>" . $conn->error;
}
 	$conn->close();


