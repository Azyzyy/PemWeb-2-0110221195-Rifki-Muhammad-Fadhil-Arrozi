<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Informasi Saldo</title>
</head>
<body>
    <h1 style="text-align: center"><b>Bank Central</b></h1>
<form method="post" action="">
    <div class="m-5 border border-primary p-2 rounded">
        <table class="table">
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
</body>
</html>
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