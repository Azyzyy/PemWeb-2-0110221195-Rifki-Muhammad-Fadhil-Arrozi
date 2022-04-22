<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Informasi Saldo</title>
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">ATM</li>
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
                <h3 class="card-title">Praktikum 5</h3>

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
              <h1 style="text-align: center"><b>Bank Central Azyzyy</b></h1>
                <form method="post" action="">
                    <div class="m-5 border border-light p-2 rounded">
                        <table class="table table-info table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">No. Account</th>
                            <th scope="col">Pemilik</th>
                            <th scope="col">Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>C001</td>
                            <td>Ahmad</td>
                            <td>Rp. 6.000.000</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                                <td>C002</td>
                                <td>Budi</td>
                                <td>Rp. 5.350.000</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                                <td>C003</td>
                                <td>Kurniawan</td>
                                <td>Rp. 2.500.000</td>
                        </tr>
                    </tbody>
                        </table>
                    </div>
                </form> 
              </div>
              <!-- /.card-body -->
              <div class="card-footer ">
                <div class="m-5 border border-danger p-2 rounded">
                <h3 style="text-align: center"><b>Informasi Transaksi</b></h3>
                    <?php
                        require_once 'class_account_bank.php';
                        
                        $akunbank1 = new AccountBank("C001",6000000,"Ahmad");
                        $akunbank2 = new AccountBank("C002",5350000,"Budi");
                        $akunbank3 = new AccountBank("C003",2500000,"Kurniawan");

                        echo '<hr>';

                        $akunbank1->cetak();
                        echo '<br> Nabung : Rp. 1.000.000';
                        echo '<br>';
                        echo '<br>';
                        $akunbank1->cetak();
                        echo '<br> Transfer Uang ke Kurniawan Rp. 1.500.000 dan Rp. 500.000 ke Budi';
                        echo '<br>';
                        echo '<br>';
                        $akunbank2->cetak();
                        echo '<br> Budi tarik uang sebesar Rp.2.500.000';

                    ?>
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