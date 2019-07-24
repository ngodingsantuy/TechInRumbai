<?php

include "koneksi.php";

$id = $_GET['id'];
$query="DELETE FROM artikel WHERE id_artikel=$id";
$result = mysqli_query($db, $query);
header("Location: admin.php");
?>