<?php
require_once("connect.php");

function generateHash($string, $salt)
{
    $inputString = $string . $salt;
    return hash('sha256', $inputString);
}

function hashPass($pw)
{
    $config = require('lib/config.php');
    $uniqueSalt = $config['passwordPepper'];
    $newPass = $pw . $uniqueSalt;
    return password_hash($newPass, PASSWORD_DEFAULT);
}

if (isset($_POST['id']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['mname']) && isset($_POST['desigs']) && isset($_POST['email']) && isset($_POST['contact'])) {
    $conn = OpenCon();

    $id = htmlspecialchars(strip_tags($_POST['id']));
    $fname = htmlspecialchars(strip_tags($_POST['fname']));
    $lname = htmlspecialchars(strip_tags($_POST['lname']));
    $mname = htmlspecialchars(strip_tags($_POST['mname']));
    $desigs = htmlspecialchars(strip_tags($_POST['desigs']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $contact = htmlspecialchars(strip_tags($_POST['contact']));

    $tempPassword = 'bulsu_sc123';
    $hashPW = hashPass($tempPassword);


    $sql = "INSERT INTO tbl_users (UID, password, fname, lname, mname, uDesignation ,email_Add , contact) VALUES (?, ?,?, ?, ?, ?, ?,?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("isssssss", $id, $hashPW, $fname, $lname, $mname, $desigs, $email, $contact);
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo "Data inserted successfully.";
            } else {
                echo "No rows affected.";
            }
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Failed to prepare the SQL statement.";
    }
   
    CloseCon($conn);
}
?>