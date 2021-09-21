<?php

$server = "127.0.0.1:3306";
$user = "root";
$pass = "";
$db = "pf_pm";

$mysqli = new mysqli($server, $user, $pass, $db);
if ($mysqli->connect_errno) {
        $data = "problema con conexion";
        echo ($data);
} 