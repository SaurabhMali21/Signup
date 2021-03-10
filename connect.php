<?php

    //Database Connection
    $conn = new mysqli("localhost","root","","ajsbank");
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into createac(fname,lname,gender,age,address,mob,mail)
            values(?,?,?,?,?,?,?)");
        $stmt->bind_param("sssisis",$fname, $lname,$gender,$age,$address,$mob,$mail);
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $mob = $_POST['mob'];
        $mail = $_POST['mail'];
        $stmt->execute();
        echo "Registration Completely Successfully";
        $stmt->close();
        $conn->close();  
    }


?>