<?php

$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = 'root';
$DB_NAME = 'ict4d';

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

$current_user_data = null;

if(!$conn)
    die("Connection failed: " . mysqli_connect_error());

function get_user($callerId) {
    global $conn, $current_user_data;

    if($current_user_data && isset($current_user_data["callerId"]) && $current_user_data["callerId"] == $callerId)
        return $current_user_data;

    $result = mysqli_query($conn, "SELECT * from users where callerId == " .$callerId );
    $row = mysqli_fetch_assoc($result);

    if(!$row)
        return false;

    $current_user_data = $row;
    return $row;
}

function insert_user($callerId, $region, $village, $cropSize) {
    global $conn;
    $sql = 'INSERT INTO users VALUES(' . $callerId . ', "' . $region . '", "' . $village . '", ' . $cropSize . ');';
    $result = mysqli_query($conn, "SELECT * from users where callerId == " .$callerId );

    if (!$result) {
        error_log("Error in inserting user", 0);
        return false;
    }
    return true;
}

function close_connection() {
    global $conn;
    $conn->close();
}