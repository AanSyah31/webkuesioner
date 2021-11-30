<?php
    require 'phpmailer/PHPMailerAutoload.php';
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
    if(!isset($_POST['email']) AND !isset($_POST['nama_pelanggan']) AND !isset($_POST['perusahaan']) AND !isset($_POST['komen']))
    {
        
    }
    $email              = $_POST['email'];
    $nama_pelanggan     = htmlspecialchars($_POST['nama_pelanggan']);
    $perusahaan         = htmlspecialchars($_POST['perusahaan']);
    $nomor              = htmlspecialchars($_POST['nomor']);
    $no_telepon         = htmlspecialchars($_POST['no_telepon']);
    $s_aspek            = '';
    foreach ($_POST['aspek'] as $value) {
        $s_aspek        .= $value.'-';
    }
    $s_aspek            = substr($s_aspek, 0, -1);      

    $avg                = $_POST['avg'];
    $saran              = htmlspecialchars($_POST['komen']);

    $findSql    = 'SELECT * FROM kuesioner WHERE nama = "'.$nama_pelanggan.'" AND perusahaan="'.$perusahaan.'"';
    $res        = $conn->query($findSql);
    if ($res->num_rows > 0) {
        $loc = "index?status=DATA SUDAH ADA&nama_pelanggan=".$nama_pelanggan."&perusahaan=".$perusahaan."&aspek=".$s_aspek."&komen=".$saran;
        header('location:'.$loc.'');
    } else {
        $tanggal = date('Y-m-d');
        $sql = 'INSERT INTO kuesioner (email, tanggal, nama, perusahaan, no_telepon, aspek_1, aspek_2, aspek_3, aspek_4, aspek_5, aspek_6, aspek_7, aspek_8, aspek_9, aspek_10, avg, saran)
        VALUES ("'.$email.'",
                "'.$tanggal.'", 
                "'.$nama_pelanggan.'", 
                "'.$perusahaan.'", 
                "'.$no_telepon.'", 
                "'.$s_aspek[0].'", 
                "'.$s_aspek[1].'", 
                "'.$s_aspek[2].'", 
                "'.$s_aspek[3].'", 
                "'.$s_aspek[4].'", 
                "'.$s_aspek[5].'", 
                "'.$s_aspek[6].'", 
                "'.$s_aspek[7].'", 
                "'.$s_aspek[8].'", 
                "'.$s_aspek[9].'", 
                "'.$avg.'", 
                "'.$saran.'")';
    
        if ($conn->query($sql) === TRUE) {
            $mail               = new PHPMailer;
            $mail->isSMTP();
            $mail->Host         = 'ssl://mail.srs-ssms.com';
            $mail->Port         = 465;
            $mail->SMTPAuth     = true;
            $mail->SMTPSecure   = 'tls';
            
            $mail->Username     = 'lab-cbi@srs-ssms.com';
            $mail->Password     = 'sidewinderzone';

            $mail->setFrom('lab-cbi@srs-ssms.com', 'Kuesioner Online');
            $mail->addAddress($email);
            $mail->addReplyTo('lab-cbi@srs-ssms.com');
            $mail->isHTML(true);
            $mail->Subject      = 'Kuesioner Online';
            $html_ini           = '
                <html>
                <style>
                    .hitam {
                        color:black;
                    }
                </style>
                <body style="color:black;">
                    <p>Terima kasih '.$nama_pelanggan.' - '.$perusahaan.' telah melakukan pengisian form kuesioner untuk Laboratorium PT. Sawit Sumbermas Sarana, Tbk. pada tanggal '.date('d-m-Y').'!</p>
                </body>
                </html>
            
            ';
            $mail->Body         = $html_ini;
            if(!$mail->send())
            {
            	header('location:index?status=5&error='.$mail->ErrorInfo.'');
            }
            else
            {
                header('location:index?status=1');
            }
        } else {
            $loc = "index?status=".$conn->error."&nama_pelanggan=".$nama_pelanggan."&perusahaan=".$perusahaan."&aspek=".$s_aspek."&komen=".$saran;
            header('location:'.$loc.'');
        }
    }
?>