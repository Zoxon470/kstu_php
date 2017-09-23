<?php 
require_once 'connection.php';

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$dsn= "mysql:host=$host;dbname=$db";

$sql = "INSERT INTO Users (name, address, email, password)
VALUES ('$name', '$address', '$email', '$password')";

if ($conn->query($sql)) {
    echo "<b style='color: blue'>$name</b> успешно добавлен в базу данных!";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->conntection = null;

?>