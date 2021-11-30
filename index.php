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
    }
    elseif ($_GET['status'] == 5) {
        echo '<script>
                alert("'.$_GET['error'].'")
            </script>';
    }
    else{
        echo '<script>
                alert("'.$_GET['status'].'")
            </script>';
    }
}

$a_aspek = '';
if(isset($_GET['aspek']))
{
    $a_aspek = explode('-', $_GET['aspek']);
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KUESIONER</title>
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
                <span class="brand-text font-weight-light">KUESIONER</span>
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
                                                    <th colspan="3" style="font-size: 25pt; border:none;">PT. CITRA BORNEO INDAH</th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="4" style="vertical-align: middle; width:25%; border:none;">
                                                        <img style="width:75%;" src="layout/dist/img/CBI-300x165.png" alt="Covid Tracker">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th colspan="3" style="font-size: 15pt; border:none;">RESEACH & DEVELOPMENT - LABORATORIUM ANALITIK</th>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="font-size: 23pt; border:none;">Formulir</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="font-size: 23pt; border:none;">Evaluasi Kepuasan Pelanggan</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body tabel-responsive">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p style="font-size: 15pt;">Berdasarkan pengalaman Bapak/Ibu, mohon dapat disampaikan mutu pelayanan seperti apa yang Bapak/Ibu telah rasakan dan harapkan dari suatu jasa pengujian yang</p>
                                            <p style="font-size: 15pt;">telah diberikan oleh <b>Laboratorium Analitik PT. Citra Borneo Indah</b></p>
                                            <p style="font-size: 15pt;"><b><i>Petunjuk Pengisisan :</i></b></p>
                                            <p style="font-size: 15pt;">Lingkarilah angka yang tersedia pada kolom bagian kanan berisi pendapat Bapak/Ibu terhadap setiap materi pertanyaan:</p>
                                            <p style="font-size: 15pt;color:red;">Setelah pengisisan selesai maka anda akan diarahkan kehalaman review, Setelah itu anda baru bisa mengirimkan jawaban anda.</p>
                                        </div>
                                    </div>
                                </div>
                                <form role="form" action="review" method="post">
                                    <input type="hidden" name="nomor" value="<?= count($s_aspek) ?>">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 15pt;" for="exampleInputLink">Email</label>
                                                    <?php if(isset($_GET['email'])):?>
                                                        <input style="font-size: 15pt;" type="email" class="form-control" id="exampleInputLink" placeholder="Email disini ..." name="email" required value="<?=$_GET['email']?>">
                                                    <?php else:?>
                                                        <input style="font-size: 15pt;" type="email" class="form-control" id="exampleInputLink" placeholder="Email disini ..." name="email" required>
                                                    <?php endif;?>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 15pt;" for="exampleInputLink">Nama Pelanggan</label>
                                                    <?php if(isset($_GET['nama_pelanggan'])):?>
                                                        <input style="font-size: 15pt;" type="text" class="form-control" id="exampleInputLink" placeholder="Nama disini ..." name="nama_pelanggan" required value="<?=$_GET['nama_pelanggan']?>">
                                                    <?php else:?>
                                                        <input style="font-size: 15pt;" type="text" class="form-control" id="exampleInputLink" placeholder="Nama disini ..." name="nama_pelanggan" required>
                                                    <?php endif;?>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 15pt;" for="exampleInputMeetingId">Perusahaan</label>
                                                    <?php if(isset($_GET['perusahaan'])):?>
                                                        <input style="font-size: 15pt;" value="<?=$_GET['perusahaan']?>" type="text" class="form-control" id="exampleInputMeetingId" placeholder="Perusahaan disini ..." name="perusahaan" required>
                                                    <?php else:?>
                                                        <input style="font-size: 15pt;" type="text" class="form-control" id="exampleInputMeetingId" placeholder="Perusahaan disini ..." name="perusahaan" required>                                                          
                                                    <?php endif;?>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="font-size: 15pt;" for="exampleInputMeetingId">No. Telepon</label>
                                                    <?php if(isset($_GET['no_telepon'])):?>
                                                        <input style="font-size: 15pt;" value="<?=$_GET['no_telepon']?>" type="text" class="form-control" id="exampleInputMeetingId" placeholder="No. Telepon disini ..." name="no_telepon" required>
                                                    <?php else:?>
                                                        <input style="font-size: 15pt;" type="text" class="form-control" id="exampleInputMeetingId" placeholder="No. Telepon disini ..." name="no_telepon" required>                                                          
                                                    <?php endif;?>
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
                                                    <tr>
                                                        <th class="biru" style="font-size: 15pt; vertical-align:middle;">1:Kurang</th>
                                                        <th class="biru" style="font-size: 15pt; vertical-align:middle;">2:Cukup</th>
                                                        <th class="biru" style="font-size: 15pt; vertical-align:middle;">3:Baik</th>
                                                        <th class="biru" style="font-size: 15pt;">4:Amat Baik</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- UPDATE DATA USER LAB -->
                                                    <?php for ($i = 1; $i <= count($s_aspek); $i++) : ?>
                                                        <!-- UPDATE DATA USER LAB -->
                                                        <tr>
                                                            <td style="font-size: 15pt;"><?= $no; ?></td>
                                                            <td style="font-size: 15pt; text-align:left;"><?= $s_aspek[$i]; ?></td>
                                                            <?php if(empty($a_aspek)):?>
                                                                <td>
                                                                    <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="1" required>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="2" required>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="3" required>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="4" required>
                                                                </td>
                                                            <?php else:?>
                                                                <?php $index = $i - 1; ?>
                                                                <?php if($a_aspek[$index] == 1): ?>
                                                                    <td>
                                                                        <input type="radio" checked style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="<?=$a_aspek[$index]?>" required>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="2" required>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="3" required>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="4" required>
                                                                    </td>
                                                                <?php elseif($a_aspek[$index] == 2): ?>
                                                                    <td>
                                                                        <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="1" required>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" checked style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="<?=$a_aspek[$index]?>" required>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="3" required>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="4" required>
                                                                    </td>
                                                                <?php elseif($a_aspek[$index] == 3): ?>
                                                                    <td>
                                                                        <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="1" required>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="2" required>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" checked style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="<?=$a_aspek[$index]?>" required>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="4" required>
                                                                    </td>
                                                                <?php elseif($a_aspek[$index] == 4): ?>
                                                                    <td>
                                                                        <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="1" required>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="2" required>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="3" required>
                                                                    </td>
                                                                    <td>
                                                                        <input type="radio" checked style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="<?=$a_aspek[$index]?>" required>
                                                                    </td>
                                                                <?php else:?>
                                                                    <td>
                                                                    <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="1" required>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="2" required>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="3" required>
                                                                </td>
                                                                <td>
                                                                    <input type="radio" style="width: 25px; height:25px;" name="aspek_<?= $i ?>" value="4" required>
                                                                </td>
                                                                <?php endif;?> 

                                                            <?php endif;?>   
                                                        </tr>
                                                        <?php $no++ ?>
                                                    <?php endfor; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label style="font-size: 15pt;" for="exampleInputNamaRoom">Kritik dan Saran</label>
                                                    <?php if(isset($_GET['komen'])):?>
                                                        <textarea placeholder="Kritik dan Saran..." style="font-size: 15pt;" class="form-control" name="komen" id="" cols="30" rows="10" required><?=$_GET['komen']?></textarea>
                                                    <?php else:?>
                                                        <textarea placeholder="Kritik dan Saran..." style="font-size: 15pt;" class="form-control" name="komen" id="" cols="30" rows="10" required></textarea>
                                                    <?php endif;?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <input style="font-size: 15pt;" type="submit" class="btn btn-primary float-sm-right ml-2" name="buat_room" value="HASIL">
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
    </div>
</body>