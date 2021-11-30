<?php
    $servername = "localhost";
    $username = "srsssmsc_andre09";
    $password = "sidewinderzone";
    $dbname = "srsssmsc_kuesioner";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_GET['id']))
    {
        $sql = "DELETE FROM kuesioner WHERE id= ".$_GET['id']."";
        if($conn->query($sql) === TRUE)
        {
            header('location:daftar_kuesioner?status=1');
        }
        else{
            header('location:daftar_kuesioner?status=2');
        }
    }
    else{
        header('location:daftar_kuesioner?status=0');
    }
?>