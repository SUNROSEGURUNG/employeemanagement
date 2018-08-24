<?php
$host="localhost";
$username="root";
$password="";
$conn=mysqli_connect($host,$username,$password) or die("unable to create connection. ".mysqli_error($conn));

$qry="CREATE DATABASE IF NOT EXISTS employee";
$run=mysqli_query($conn,$qry) or die("Cannot create database");
mysqli_select_db($conn,"employee") or die("Cannot connect to database".mysqli_error($conn));

?>