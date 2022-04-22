<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Latihan Form Processing</title>
</head>
<body>
    <div>
        <h3>Form Nilai Mahasiswa</h3>
        <hr>
    </div>
    
        <div class="m-5 border border-primary p-4 rounded">
            <form method="POST" autocomplete="off" action='form_nilai.php' >
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

        <div class="m-5 border border-success p-4 rounded">
            <?php
                if(isset($_POST['submit'])){
                    $nama = $_POST['nama'];
                    $matkul = $_POST['matkul'];
                    $nilai_uts = $_POST['nilai_uts'];
                    $nilai_uas = $_POST['nilai_uas'];
                    $nilai_tugas = $_POST['nilai_tugas'];
                    $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
                    if ($nilai_akhir <= 35) {
                        $grade = "E";
                    } elseif($nilai_akhir <= 55){
                        $grade = "D";
                    } elseif($nilai_akhir <= 69){
                        $grade = "C";
                    } elseif($nilai_akhir <= 84){
                        $grade = "B";
                    } elseif($nilai_akhir <= 100){
                        $grade = "A";
                    } else {
                        $grade = "I";
                    }

                    if($matkul == 'basis_data'){
                        $nama_matkul = 'Basis Data';
                    }elseif($matkul == 'uiux'){
                        $nama_matkul = 'UI/UX';
                    }elseif($matkul == 'ddp'){
                        $nama_matkul = 'Dasar-Dasar Pemrograma';
                    }

                    if ($nilai_akhir <= 100) {
                        $keterangan = "SISWA DINYATAKAN LULUS";
                    } elseif($nilai_akhir <= 55){
                        $keterangan = "SISWA DINYATAKAN TIDAK LULUS";
                    } else{
                        $keterangan = "Error Input";
                    }

                    switch ($grade) {
                        case "E" : $predikat = "Sangat Kurang";
                            break;
                        case "D" : $predikat = "Kurang";
                            break;
                        case "C" : $predikat = "Cukup";
                            break;
                        case "B" : $predikat = "Memuaskan";
                            break;
                        case "A" : $predikat = "Sangat Memuaskan";
                            break;
                        case "I" : $predikat = "Tidak Ada";
                            break;
                        default:
                            echo "Salah Input";
                            break;
                    }


                    echo "Nama Lengkap : $nama <br>";
                    echo "Mata Kuliah : $nama_matkul <br>";
                    echo "Nilai UTS : $nilai_uts <br>";
                    echo "Nilai UAS : $nilai_uas <br>";
                    echo "Nilai Tugas/Praktikum : $nilai_tugas <br>";
                    echo "Nilai Akhir : $nilai_akhir <br>";
                    echo "Grade Akhir : $grade <br> ";
                    echo "Keterangan  : $keterangan <br> ";
                    echo "Predikat  : $predikat <br> ";
                    
                }?>
            
    
        </div>

</body>
</html>