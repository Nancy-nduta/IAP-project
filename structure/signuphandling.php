<?php
// Include the database connection file
include_once 'db_connection.php';

// Get the form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$genderId = $_POST['genderId'];
$roleId = $_POST['roleId'];
$phone_number = $_POST['phone_number'];

// Hash the password
$password = password_hash($password, PASSWORD_DEFAULT);
// Create a query to insert the data into the users table
$query = "INSERT INTO users (fullname, email, username, password, genderId, roleId, phone_number) VALUES (?, ?, ?, ?, ?, ?, ?)";
