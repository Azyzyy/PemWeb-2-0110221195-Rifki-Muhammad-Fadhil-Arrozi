<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <style>
    h5 {
      margin: 0;
    }
    tr, td:nth-child(2){
      padding: .75rem 1rem;
    }
  </style>
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
              <li class="breadcrumb-item"><a href="#">project 1</a></li>
              <li class="breadcrumb-item active">Kalkulator BMI</li>
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
                <h3 class="card-title text-center mb-6">Kalkulator Indeks Masa Tubuh (BMI)</h3>

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
              <div class="col-md-12 mx-auto mt-12">
                <h3 class="text-center mb-6">Silahkan isi Data Diri Anda</h3>
                <form action="result.php" method="POST">
                <table class="w-100">
                    <tr>
                    <td>
                        <h5>Nama</h5>
                    </td>
                    <td>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-fw fa-address-book"></i></div>
                        </div>
                        <input type="text" required class="form-control" name="nama">
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <h5>Berat Badan</h5>
                    </td>
                    <td>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-fw fa-anchor"></i></span>
                        </div>
                        <input type="text" required class="form-control" name="berat">
                        <div class="input-group-append">
                            <span class="input-group-text">Kg</span>
                        </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <h5>Tinggi Badan</h5>
                    </td>
                    <td>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-fw fa-blind"></i></span>
                        </div>
                        <input type="text" required class="form-control" name="tinggi">
                        <div class="input-group-append">
                            <span class="input-group-text">cm</span>
                        </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <h5>Umur</h5>
                    </td>
                    <td>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-fw fa-bell"></i></span>
                        </div>
                        <input type="text" required class="form-control" name="umur">
                        <div class="input-group-append">
                            <span class="input-group-text">Thn</span>
                        </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <h5>Jenis Kelamin</h5>
                    </td>
                    <td>
                        <div class="input-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="cowok" name="gender" class="custom-control-input" value="Laki-laki">
                            <label class="custom-control-label" for="cowok">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="cewek" name="gender" class="custom-control-input" value="Perempuan">
                            <label class="custom-control-label" for="cewek">Perempuan</label>
                        </div>
                        </div>
                    </td>
                    </tr>
                </table>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-success" name="send">Kirim</button>
                </div>
                </form>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
              <div class="text-center mt-3">
                <a href="data_bmi.php">Lihat Hasil Data BMI</a>
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
  </html>
<?php
include_once 'footer.php';
?>