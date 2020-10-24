<?php
    
    include_once 'database.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];

    $sql = "INSERT INTO form ( name, email, phone_number, address) VALUES ('$name', '$email', '$phone_number', '$address');";

    mysqli_query($conn, $sql);

    header("Location: ../form.php?submit=success");