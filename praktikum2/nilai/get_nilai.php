<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>

<body>
    <h2>Form Nilai Siswa</h2>
    <form action="get_nilai.php" method="GET" style="width: 70%; margin-left: 3rem;">
    <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <div class="input-group">
                    <input name="nama" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Mata Kuliah</label>
            <div class="col-8">
                <div class="input-group">
                    <select name="matkul" class="form-control">
                        <option value="DDP">Dasar-Dasar Pemrograman</option>
                        <option value="BDI">Basis Data</option>
                        <option value="WEB1">Pemrograman Web</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Nilai UTS</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="text" name="nilai_uts" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Nilai UAS</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="text" name="nilai_uas" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="text" name="nilai_tugas" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <?php
    $proses = $_GET['proses'];
    $nama_siswa = $_GET['nama'];
    $mata_kuliah = $_GET['matkul'];
    $nilai_uts = $_GET['nilai_uts'];
    $nilai_uas = $_GET['nilai_uas'];
    $nilai_tugas = $_GET['nilai_tugas'];
    echo '<br/>Nama : ' . $nama_siswa;
    echo '<br/>Mata Kuliah : ' . $mata_kuliah;
    echo '<br/>Nilai UTS : ' . $nilai_uts;
    echo '<br/>Nilai UAS : ' . $nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;
    ?>
</body>

</html>
