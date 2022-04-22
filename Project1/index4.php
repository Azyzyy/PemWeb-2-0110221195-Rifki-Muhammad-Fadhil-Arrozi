<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Class Nilai Mahasiswa</li>
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
                <h3 class="card-title">Praktikum 4</h3>

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
              <form method="post" action="">
                    <div class="container">
                        <div class="container-fluid">
                            <form>
                            <div class="form-group row">
                                <label for="nim" class="col-4 col-form-label">NIM</label> 
                                <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                    </div> 
                                    <input id="nim" name="nim" type="number" class="form-control">
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                                <div class="col-8">
                                <select id="matakuliah" name="matakuliah" class="custom-select">
                                    <option value="matematika">Matematika</option>
                                    <option value="bahasa1">Bahasa Inggris</option>
                                    <option value="bahasa2">Bahasa Indonesia</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                                <div class="col-8">
                                <input id="nilai" name="nilai" type="number" class="form-control">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    </form>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
              <?php
                require_once 'class_nilaimahasiswa.php';

                $mahasiswa = new nilai_mahasiswa($_POST['nim'], $_POST['matakuliah'], $_POST['nilai']);
                if(isset($_POST['submit'])){
                    echo "<hr>";
                    echo "NIM : ".$nim = $_POST['nim'];
                    echo "<br>Mata Kuliah : ".$matakuliah = $_POST['matakuliah'];
                    echo "<br>Nilai : ".$nilai = $_POST['nilai'];
                    echo "<br>Hasil Ujian : ".$mahasiswa->grade();
                    echo "<br/>Grade : " .$mahasiswa->hasil();
                }
            ?>
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