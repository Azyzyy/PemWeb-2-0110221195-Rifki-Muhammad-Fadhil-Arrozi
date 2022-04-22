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
              <li class="breadcrumb-item"><a href="#">Praktikum PemWeb</a></li>
              <li class="breadcrumb-item active">Array Siswa</li>
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
                <h3 class="card-title">Praktikum 1</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
                <div class="card-body">
                <?php
                    $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
                    $ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
                    $ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
                    $ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];
                    
                    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
                ?>
                  <div class="">
                      <h3 class="text-center">Daftar Nilai Siswa</h3>
                      
                      <table class="table table-success table-striped text-center w-50 m-auto shadow">
                          <thead>
                              <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">NIM</th>
                                  <th scope="col">UTS</th>
                                  <th scope="col">UAS</th>
                                  <th scope="col">Tugas</th>
                                  <th scope="col">Nilai Akhir</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                  $nomor = 1;
                                  foreach($ar_nilai as $ns){
                                      echo '<tr><th scope="row">'.$nomor.'</th>';
                                      echo '<td>'.$ns['nim'].'</td>';
                                      echo '<td>'.$ns['uts'].'</td>';
                                      echo '<td>'.$ns['uas'].'</td>';
                                      echo '<td>'.$ns['tugas'].'</td>';
                                      $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
                                      echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                                      echo '<tr/>';
                                      $nomor++;
                                  }
                              ?>
                          </tbody>
                      </table>
                  </div>
                </div>
                <div class="card-footer">
                PemWeb 2
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