<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);
    $tiket = isset($_POST['Tiket']) ? htmlspecialchars($_POST['Tiket']) : 'N/A';

    $order = "Nama: $name\nEmail: $email\nTanggal: $date\nTiket: $tiket\n\n";
    file_put_contents('order.txt', $order, FILE_APPEND);

    echo "Pesanan Sukses Disimpan!";
}
?>

