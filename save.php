<?php

$conn = new mysqli("localhost", "root", "", "appdb");

$data = json_decode(file_get_contents("php://input"), true);

$username = $data["username"];

$sql = "INSERT INTO users (username) VALUES ('$username')";

if ($conn->query($sql)) {
    echo "Zapisano";
} else {
    echo "Błąd";
}
?>