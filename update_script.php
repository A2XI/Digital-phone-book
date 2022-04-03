<?php

require_once 'connection.php';

if(isset($_GET['edit'])){
    $id = $_GET["edit"];
    $result = $conn->query("SELECT * FROM phone_book WHERE id=$id") or die($conn->error);
    
    $row = $result->fetch_assoc();
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $phone_number = $row['phone_number'];
    $postal_code = $row['postal_code'];
    $email = $row['email'];
    $id = $row['id'];
}


if(isset($_POST['update'])){
    $id = $_REQUEST['id'];
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $phone_number = $_REQUEST['phone_number'];
    $postal_code = $_REQUEST['postal_code'];
    $email = $_REQUEST['email'];

    $conn->query("UPDATE phone_book SET first_name='$first_name', last_name='$last_name', phone_number='$phone_number', postal_code='$postal_code', email='$email'
    WHERE id=$id") or die($conn->error);

    header('Location: phone_book_view.php');
}
