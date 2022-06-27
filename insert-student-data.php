<?php
$studentid = $_POST['studentid'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dateofbirth = $_POST['dateofbirth'];
$email = $_POST['email'];
$department = $_POST['department'];

echo $studentid;
echo $firstname;
echo $lastname;
echo $dateofbirth;
echo $email;
echo $department;


/*
if($email == "hackmail.com"){

    echo "Please you can't be registerd";
}else{

    echo "You can be registerd";
}

*/

//Connecting database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_task";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO students VALUES ('','$studentid','$firstname','$lastname','$dateofbirth','$email','$department')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }




?>