<?php
    include 'connect.php';

    session_start();
    
    $conn = OpenCon();

    if (isset($_POST['login'])) {
        try {
            $ress = $conn->query("SELECT * FROM tbl_users WHERE UID = '20240001'");
            $fesult = $ress->fetch_assoc();
        }
    }

?>