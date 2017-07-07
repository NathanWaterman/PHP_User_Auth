<?php
    session_start(); 
    if (isset($_SESSION['UserData']['Username'])) { //or what ever session check you like
        $file = 'pdf.pdf';
        header('Content-type: application/pdf');
        header('Content-length: ' . filesize($file));
        readfile($file);
    } else {
        echo "You do not have access to this file.";
    }
?>