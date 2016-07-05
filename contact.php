<?php

$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$mobile = $_POST['mobile'];
$message = strip_tags($_POST['message']);

if ($name && $email && $mobile && $message) {
    $connect = mysql_connect('localhost', 'root', '') or die('Connection is not established');
    mysql_select_db('portfolio') or die('Database is not connected');
    $query = mysql_query("INSERT into contact values('','$name','$email','$mobile','$message') ");
} else {
    die('Please fill all the fields.');
}
?>
