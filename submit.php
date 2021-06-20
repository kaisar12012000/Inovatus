<?php

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$address = filter_input(INPUT_POST, 'address');
$job = filter_input(INPUT_POST, 'job');

if(!empty($name)){
    if(!empty($email)){
        if(!empty($phone)){
            if(!empty($address)){
                if(!empty($job)){
                    $host = "localhost";
                    $dbusername = "root";
                    $dbpassword = "";
                    $dbname = "inovatus";
                    // Create connection
                    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
                    if (mysqli_connect_error()) {
                        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
                    } else {
                        $sql = "INSERT INTO testimonials_data (Name, Email, PhoneNo, Address, Job) values ('$name','$email','$phone','$address','$job')";
                        if ($conn->query($sql)) {
                            header("location: index.php");
                        } else {
                            echo "Error: " . $sql . "" . $conn->error;
                        }
                        $conn->close();
                    }
                } else {
                    header('location: index.php');
                    die();
                }
            } else {
                header('location: index.php');
            }
        } else{
            header('location: index.php');
            die();
        }
    } else {
        header('location: index.php');
        die();
    } 
} else {
    header('location: index.php');
    die();
}

?>