<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>P3-Form Processing</title>
</head>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project 1 Rifki Muhammad Fadhil Arrozi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="#">praktikum PemWeb</a></li>
              <li class="breadcrumb-item active">Form Nilai & grade Mahasiswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Praktikum 3</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body"><div>
              <h3>Form Nilai & grade Mahasiswa</h3>
              <hr>
                </div>
                
                    <div class="m-5 border border-primary p-4 rounded">
                        <form method="POST" autocomplete="off" action='index3.php' >
                        <div class="form-group row">
                            <label for="text" class="col-4 col-form-label">Nama Lengkap</label> 
                            <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book-o"></i>
                                </div>
                                </div> 
                                <input id="text" name="nama" placeholder="Masukan Nama Lengkap Anda" type="text" class="form-control" required="required">
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                            <div class="col-8">
                            <select id="select" name="matkul" class="custom-select">
                                <option value="">Pilih Matkul</option>
                                <option value="basis_data">Basis Data</option>
                                <option value="uiux">UI/UX</option>
                                <option value="ddp">DDP</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text2" class="col-4 col-form-label">Nilai UTS</label> 
                            <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-adjust"></i>
                                </div>
                                </div> 
                                <input id="text2" name="nilai_uts" placeholder="Masukan Nilai UTS" type="number" required="required" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text3" class="col-4 col-form-label">Nilai UTS</label> 
                            <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-adjust"></i>
                                </div>
                                </div> 
                                <input id="text3" name="nilai_uas" placeholder="Masukan nilai uas" type="number" class="form-control" required="required">
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text1" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                            <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-adjust"></i>
                                </div>
                                </div> 
                                <input id="text1" name="nilai_tugas" placeholder="Masukan Nilai Tugas/Praktikum" type="number" class="form-control" required="required">
                            </div>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                        </form> 
                    </div>
                          </div>
              <!-- /.card-body -->
              <div class="card-footer">
              <div class="m-5 border border-success p-4 rounded">
                <?php
                if(isset($_POST['submit'])){
                    $nama = $_POST['nama'];
                    $matkul = $_POST['matkul'];
                    $nilai_uts = $_POST['nilai_uts'];
                    $nilai_uas = $_POST['nilai_uas'];
                    $nilai_tugas = $_POST['nilai_tugas'];
                    $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
                    if ($nilai_akhir > 90) {
                        $grade = "A+";
                    } elseif($nilai_akhir > 80){
                        $grade = "A";
                    } elseif($nilai_akhir > 70){
                        $grade = "B+";
                    } elseif($nilai_akhir > 60){
                        $grade = "B";
                    } elseif($nilai_akhir > 50){
                        $grade = "C+";
                    } elseif($nilai_akhir > 40){
                        $grade = "C";
                    } elseif($nilai_akhir > 30){
                        $grade = "D";
                    } elseif($nilai_akhir > 20){
                        $grade = "E";
                    } else {
                        $grade = "F";
                    }

                    if($matkul == 'basis_data'){
                        $nama_matkul = 'Basis Data';
                    }elseif($matkul == 'uiux'){
                        $nama_matkul = 'UI/UX';
                    }elseif($matkul == 'ddp'){
                        $nama_matkul = 'Dasar-Dasar Pemrograma';
                    }

                    if ($nilai_akhir > 55) {
                        $keterangan = "SISWA DINYATAKAN LULUS";
                    } else{
                        $keterangan = "SISWA DINYATAKAN TIDAK LULUS";
                    }

                    echo "Nama Lengkap : $nama <br>";
                    echo "Mata Kuliah : $nama_matkul <br>";
                    echo "Nilai UTS : $nilai_uts <br>";
                    echo "Nilai UAS : $nilai_uas <br>";
                    echo "Nilai Tugas/Praktikum : $nilai_tugas <br>";
                    echo "Nilai Akhir : $nilai_akhir <br>";
                    echo "Grade Akhir : $grade <br> ";
                    echo "Keterangan  : $keterangan ";
                }?>
            
    
                </div>
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>