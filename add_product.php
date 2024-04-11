<?php
//połączenie z bd
include "db_connection.php";

// pobranie danych z formularza
$title = $_POST["title"];
$price = $_POST["price"];


//przygotowanie sql insert into
$sql = "INSERT INTO `product` VALUES ($title, $price)";
//wykonywanie sql
if ($conn->query($sql) === TRUE) {
    echo "Dodałeś ogłoszenie!";
} else {
    echo "Coś poszło nie tak :/";
}
$conn->close();
