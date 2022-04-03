<?php
require_once 'connection.php';

function redirect($url, $statusCode = 303)
    {
        header('Location: ' . $url, true, $statusCode);
        die();
    }

if(isset($_POST['save'])){
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $phone_number = $_REQUEST['phone_number'];
    $postal_code = $_REQUEST['postal_code'];
    $email = $_REQUEST['email'];

    $conn->query("INSERT INTO phone_book(first_name, last_name, phone_number, postal_code, email)
    VALUES('$first_name', '$last_name', '$phone_number', '$postal_code', '$email')") or die($conn->error);
    
    redirect('index.php');
}

if(isset($_GET['delete'])){
    $id = $_GET["delete"];
    $conn->query("DELETE FROM phone_book WHERE id=$id") or die($conn->error);

    header("location: phone_book_view.php");
}


if(isset($_GET['inactivate'])){
    $id = $_GET["inactivate"];
    $conn->query("UPDATE phone_book SET active='0' WHERE id=$id") or die($conn->error);
    echo "$id";
    header("location: phone_book_view.php");
}

?>