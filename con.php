<?php
    $host = "localhost";   // Database host
    $dbname = "dbfim";     // Database name
    $user = "root";        // Database username
    $pw = "";              // Database password

    // Corrected DSN syntax
    $dsn = "mysql:host=$host;dbname=$dbname";

    try {
        // Create PDO connection
        $con = new PDO($dsn, $user, $pw);

        // Check if the connection was successful
        if ($con) {
           // echo "Connected to the database successfully.";
        }
    } catch (PDOException $e) {
        // If there's an error, print the error message
        echo "Connection failed: " . $e->getMessage();
    }
?>
