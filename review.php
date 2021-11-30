<?php
$s_aspek = array(
    1=>'Keberadaan laboratorium membantu pelanggan dalam analisa contoh yang diinginkan',
    'Kebersihan dan kerapihan laboratorium dan fasilitas penunjangnya memadai',
    'Fasilitas laboratorium yang lengkap dan memiliki peralatan yang modern dan mutakhir',
    'Tersedia fasilitas komunikasi : telepon, faksimili, e-mail yang mudah dihubungi',
    'Laboratorium mempunyai kemampuan dan sumberdaya yang memadai dalam proses pelayanan dan pengujian',
    'Kemudahan dalam memproses informasi layanan jasa pengujian cukup memadai',
    'Karyawan merespons permintaan pengujian dengan cepat, tidak birokratis dan diproses segera',
    'Proses pelaksanaan pengujian dilakukan secara tepat waktu sesuai dengan jadwal yang telah ditentukan',
    'Mutu hasil pengujian menyangkut akurasi dan keabsahan hasil cukup memuaskan',
    'Laboratorium memberitahu bila terjadi keterlambatan atau penyimpangan dalam pelaksanaan pengujian'
);
$no = 1;


if (isset($_GET['status'])) {
    if ($_GET['status'] == 1) {
        echo '<script>
                alert("BERHASIL MEMASUKAN DATA")
            </script>';
    } else if ($_GET['status'] == 0) {
        echo '<script>
                alert(' . htmlspecialchars($_GET['message']) . ')
            </script>';
    }
}

$p_aspek = '';

$j_1 = 0; $j_2 = 0; $j_3 = 0; $j_4 = 0;
$j_aspek = 0;
for($i = 1; $i <= $_POST['nomor']; $i++)
{
    $j_aspek += $_POST['aspek_'.$i.''];
}
$r_aspek = $j_aspek/$_POST['nomor'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>REVIEW</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="layout/dist/img/CBI-logo.png">
    <link rel="stylesheet" href="layout/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="layout/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="layout/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="layout/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="layout/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="layout/dist/css/jquery.fancybox.min.css">


    <!--download-->
    <link href="layout/dist/css/css.css" rel="stylesheet">

    <!--download-->
    <script type="text/javascript" src="layout/dist/js/loader.js"></script>

    <!--download-->
    <link rel="stylesheet" type="text/css" href="layout/dist/css_tabel/buttons.dataTables.min.css" />
    <!--download-->
    <link rel="stylesheet" type="text/css" href="layout/dist/css/jquery.dataTables.min.css" />


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style type="text/css">
        .center {
            margin: auto;
            height: 500px;
            width: 70%;
            padding: 10px;
            text-align: center;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="hover"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link">Selamat datang!</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link"></a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <a href="index" class="brand-link">
                <img src="layout/dist/img/CBI-logo.png" alt="Covid Tracker" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">REVIEW</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="content-fluid ">

                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body tabel-responsive">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-hover text-center">
                                                <tr>
                                                    <th colspan="3" style="font-size: 25pt; border:none;">REVIEW KUESIONER</th>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="font-size: 15pt; border:none; color:red;">Jika anda setuju dengan Hasil dibawah ini mohon tekan tombol submit</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <form role="form" action="backend" method="post">
                                    <input type="hidden" name="nomor" value="<?= count($s_aspek) ?>">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: center;">
                                                <div class="form-group">
                                                    <label style="font-size: 15pt;" for="exampleInputLink">Email Pelanggan</label><br>
                                                    <label style="font-size: 15pt; font-weight: normal !important;" for="exampleInputLink"><?= $_POST['email']; ?></label>
                                                    <input type="hidden" name="email" value="<?=$_POST['email']?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3" style="text-align: center;">
                                                <div class="form-group">
                                                    <label style="font-size: 15pt;" for="exampleInputLink">Nama Pelanggan</label><br>
                                                    <label style="font-size: 15pt; font-weight: normal !important;" for="exampleInputLink"><?= $_POST['nama_pelanggan']; ?></label>
                                                    <input type="hidden" name="nama_pelanggan" value="<?= $_POST['nama_pelanggan'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3" style="text-align: center;">
                                                <div class="form-group">
                                                    <label style="font-size: 15pt;" for="exampleInputMeetingId">Perusahaan</label><br>
                                                    <label style="font-size: 15pt; font-weight: normal !important;" for="exampleInputLink"><?= $_POST['perusahaan']; ?></label>
                                                    <input type="hidden" name="perusahaan" value="<?= $_POST['perusahaan'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3" style="text-align: center;">
                                                <div class="form-group">
                                                    <label style="font-size: 15pt;" for="exampleInputMeetingId">Perusahaan</label><br>
                                                    <label style="font-size: 15pt; font-weight: normal !important;" for="exampleInputLink"><?= $_POST['no_telepon']; ?></label>
                                                    <input type="hidden" name="no_telepon" value="<?= $_POST['no_telepon'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-body table-responsive">
                                        <div style="margin-left: auto; margin-right: auto;">
                                            <table class="table table-bordered table-hover text-center">
                                                <thead>
                                                    <tr>
                                                        <th class="hijau" style="vertical-align: middle; width: 5%; font-size: 15pt;" rowspan="2">NO</th>
                                                        <th class="biru" style="vertical-align: middle; width: 70%; font-size: 15pt;" rowspan="2">ASPEK YANG DINILAI</th>
                                                        <th class="biru" colspan="4" style="font-size: 15pt; width: 25%;">NILAI</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- UPDATE DATA USER LAB -->
                                                    <?php for ($i = 1; $i <= count($s_aspek); $i++) : ?>
                                                        <!-- UPDATE DATA USER LAB -->
                                                        <tr>
                                                            <td style="font-size: 15pt;"><?= $no; ?></td>
                                                            <td style="font-size: 15pt; text-align:left;"><?= $s_aspek[$i]; ?></td>
                                                            <td>
                                                                <label style="font-size: 15pt; font-weight: normal !important;" for="exampleInputMeetingId"><?=$_POST['aspek_'.$i.'']?></label><br>
                                                                <input type="hidden" name="aspek[]" value="<?=$_POST['aspek_'.$i.'']?>">
                                                                <?php
                                                                    $p_aspek .= $_POST['aspek_'.$i.''].'-';
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <?php $no++ ?>
                                                    <?php endfor; ?>
                                                    <tr>
                                                        <th style="font-size: 15pt; vertical-align: middle;" colspan="2">Nilai Rata-Rata</th>
                                                        <th style="font-size: 15pt;" colspan="2">
                                                            <?php echo $r_aspek; ?>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                                <?php
                                                    $p_aspek = substr($p_aspek, 0, -1);
                                                ?>
                                                <input type="hidden" name="avg" value="<?=$r_aspek; ?>">
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label style="font-size: 15pt;" for="exampleInputNamaRoom">Kritik dan Saran</label><br>                                                    
                                                    <label style="font-size: 15pt; font-weight: normal !important;" for="exampleInputNamaRoom"><?= $_POST['komen'] ?></label>
                                                    <input type="hidden" name="komen" value="<?= $_POST['komen'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <input id="submitBtn" disabled style="font-size: 15pt;" type="submit" class="btn btn-success float-sm-right ml-2" name="buat_room" value="SUBMIT KUESIONER">
                                        <a style="font-size: 15pt;" href="index?no_telepon=<?=$_POST['no_telepon']?>&email=<?=$_POST['email']?>&nama_pelanggan=<?= $_POST['nama_pelanggan'] ?>&perusahaan=<?= $_POST['perusahaan'] ?>&aspek=<?=$p_aspek?>&komen=<?= $_POST['komen'] ?>" class="btn btn-primary float-sm-right ml-2">
                                            EDIT
                                        </a>
                                        <div class="g-recaptcha float-sm-right" data-callback="recaptchaCallback" data-sitekey="6LdozGocAAAAALa8aJXQph9To8HIJBFC6JflapJf"></div> 
                                        
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <footer class="main-footer">
            <strong>Copyright © 2014-2019 <a href="http://srs-ssms.com">srs-ssms.com</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.5
            </div>
        </footer>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>                                                
        <!-- jQuery -->
        <script src="layout/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="layout/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="layout/plugins/chart.js/Chart.min.js"></script>
        <!-- AdminLTE App -->
        <script src="layout/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="layout/dist/js/demo.js"></script>
        <!-- page script -->
        <script>
            function recaptchaCallback() {
                $('#submitBtn').removeAttr('disabled');
            };
        </script>
    </div>
</body>