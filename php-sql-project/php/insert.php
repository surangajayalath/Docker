<?php
$host = 'db';
$dbn = 'MYSQL_DATABASE';
$user = 'MYSQL_USER';
$pass = 'MYSQL_PASSWORD';

$conn = new mysqli($host, $user, $pass, $dbn);

if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $sql = "INSERT INTO users (name,email,mobile)
     VALUES ('$name','$email','$mobile')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>