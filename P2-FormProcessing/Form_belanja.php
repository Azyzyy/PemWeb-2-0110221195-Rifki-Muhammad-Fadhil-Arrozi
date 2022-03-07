<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    
</head>
<body>
    <h3>Form Belanja Online</h3>
    <hr>
    <div class="kotak" style="display: flex;">
    <div class="m-5 border border-primary p-4 rounded w-75 p-3">
        <form method="POST" autocomplete="off" action="form_belanja.php">
            <div class="form-group row">
                <label for="cs" class="col-4 col-form-label">Custumer</label> 
                <div class="col-8">
                <input id="cs" name="cs" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih Produk</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="pruduk_0" type="radio" class="custom-control-input" value="televisi"> 
                    <label for="pruduk_0" class="custom-control-label">Televisi</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="pruduk_1" type="radio" class="custom-control-input" value="kulkas"> 
                    <label for="pruduk_1" class="custom-control-label">Kulkas</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="pruduk_2" type="radio" class="custom-control-input" value="mesin_cuci"> 
                    <label for="pruduk_2" class="custom-control-label">Mesin Cuci</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-8">
                <input id="text1" name="jumlah" type="number" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <div class="kotak2">
        <br>
        <br>
        <table class="table table-success table-striped w- p-3">
        <tbody>
            <tr>
                <td>Daftar Harga</td>
            </tr>
            <tr>
                <td>Televisi : 4.200.000</td>
            </tr>
            <tr>
                <td>Kulkas : 3.100.000</td>
            </tr>
            <tr>
                <td>Mesin cuci : 3.800.000</td>
            </tr>
        </tbody>
        </table>
    </div>
    </div>
    <div class="m-5 border border-danger p-4 rounded">
    <?php
        if(isset($_POST['submit'])){
            $costumer = $_POST['cs'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];
        }
            
            

            if($produk == 'televisi'){
                    $produk_harga = '4200000';
                }elseif($produk == 'kulkas'){
                    $produk_harga = '3100000';
                }elseif($produk == 'mesin_cuci'){
                    $produk_harga = '3800000';
                }
        if(isset($_POST['submit'])){
            $total = ($jumlah * $produk_harga);
            

            echo "Nama Costumer : $costumer <br>";
            echo "Produk Yang dipilih : $produk <br>";
            echo "Jumlah Produk : $jumlah <br>";
            echo "Total Harga : Rp $total <br>";
            
        }
    ?>
    </div>
</body>
</html>