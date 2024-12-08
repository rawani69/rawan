<?php


$firstName = $_POST[' fullName'];
$lastName = $_POST[' email ' ];
$password = $_POST[ 'password'];
$password = $_POST[ 'confirm password '];
$date = $_POST [ 'date'];
$gender = $_POST [ 'gender'];
$username= "root";
$password= "Rr25612561";
$Database= new

$conn (new mysqli ('localhost', 'root','Rr25612561', 'db_contact'));

if($conn->connect_error){
    die( 'Connection Failed : '.$conn->connect_error);
    }elsef{
    $stmt=$conn->prepare("insert into registration(fullName,  email, gender, password, confirm password, date)
    values (?, ?, ?, ?, ?, ?,?) ");
    $stmt ->bind_param("sssssi",$fullName, $email, $password,$onfirm_password , $email, $password, $date);
    $stmt->execute();
    echo "registration SUccessfully...";
    §stmt->close();
    $conn->close();

    }
?>