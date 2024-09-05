<?php

// // $servername = "localhost";
// // $username = "root";
// // $password = "";
// // $database = "student";

// // $conn = mysqli_connect($servername, $username, $password, $database);  

// // if($conn){
// //     echo "<script>alert('Database is connected');</script>";
// // }else{
// //     echo "<script>alert('Database Not connected');</script>";

// }



$servername = "localhost";
$username = "root";
$password = "";
$database = "student";

$conn = mysqli_connect($servername, $username, $password, $database);

    if($conn){
        echo "<script>alert('Database is Connected');</script>";
    }
    else{
        echo "<script>alert('Database is Not Connected');</script>";
    }

?>