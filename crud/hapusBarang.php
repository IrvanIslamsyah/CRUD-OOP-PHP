<?php
require "class/Barang.php";

$id = $_GET["id"];

$barang = new Barang;
$barang->hapus_Barang($id);
header("location: barang.php");

?>