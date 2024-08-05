<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "kasir";

$db = mysqli_connect($server,$user,$password,$nama_database);

if (!$db) {
   diel("Gagal terhubung dengan database: " . mysqil_connect_error());
   }
