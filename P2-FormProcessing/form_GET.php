<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Latihan Form PHP</title>
</head>
<body>
    <div>
        <h3>Form Nilai Mahasiswa</h3>
        <hr>
    </div>
    <div class="m-5 border border-primary p-4 rounded">
        <form method="GET" autocomplete="off" action="form_GET.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukan Nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select">
                    <option value="-">Pilih Mata Kuliah</option>
                    <option value="pw">Pemrograman Web</option>
                    <option value="ddp">Dasar-Dasar Pemrograman</option>
                    <option value="mk">Matematika Komputer</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <input id="uts" name="uts" placeholder="Masukan Nilai UTS" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="uas" class="col-4 col-form-label">Masukan Nilai UAS</label> 
                <div class="col-8">
                <input id="uas" name="uas" placeholder="Masukan Nilai UAS" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                <input id="tugas" name="tugas" placeholder="Masukan Nilai Tugas/Praktikum" type="number" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <div class="m-5 border border-danger p-4 rounded">
    <?php
        if(isset($_GET['submit'])){
            $nama = $_GET['nama'];
            $matkul = $_GET['matkul'];
            $uts = $_GET['uts'];
            $uas = $_GET['uas'];
            $tugas = $_GET['tugas'];
            $nilai_akhir = ($uts + $uas + $tugas)/3;

            echo "Nama Lengkap : $nama <br>";
            echo "Mata Kuliah : $matkul <br>";
            echo "Nilai UTS : $uts <br>";
            echo "Nilai UAS : $uas <br>";
            echo "Nilai Tugas/Praktikum : $tugas <br>";
            echo "Nilai Akhir : $nilai_akhir <br>";
        }
    ?>
    </div>
</body>
</html>