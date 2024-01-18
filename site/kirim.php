<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Nama'];
    $usia = $_POST['Usia'];
    $email = $_POST['Email'];
    $destinasi = $_POST['Destinasti'];
    $comfort = $_POST['Comfort'];
    $adults = $_POST['Adults'];
    $rooms = $_POST['Rooms'];
    $children = $_POST['Children'];
    $message = $_POST['Pesan'];

    // SQL query to insert data into the 'forum' table
    $sql = "INSERT INTO forum (Nama, Usia, Email, Destinasti, Comfort, Adults, Rooms, Children, Pesan) 
            VALUES ('$name', '$usia', '$email', '$destinasi', '$comfort', '$adults', '$rooms', '$children', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Pemesanan berhasil disimpan!";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

