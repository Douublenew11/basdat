<?php
    include 'config.php';

    $id = $_GET['id'];

    $koneksi->query("DELETE FROM warga WHERE id = $id");

    header("Location: data.php");
    return 0;
?>  