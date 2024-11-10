<?php
    // local
    $mysqli = new mysqli("localhost","root","","sach");


    // Check connection
    if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
