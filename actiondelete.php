<?php
include('config.php');
$nama = isset($_GET['nama']) ? $_GET['nama'] : '';
$sql = "DELETE FROM `servismotor` WHERE `NamaTempatServis`= '". $nama."'" or die (mysql_error());
$show = mysqli_query($conn, $sql);
header('location:index_informasi.php');
?>