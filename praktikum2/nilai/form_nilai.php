<?php
    $proses = $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    $nilai_gabungan = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
    $grade_nilai = $nilai_gabungan;

    if ($nilai_uts >= 85 && $nilai_uts <= 100) {
        $grade_nilai = "A";
    } else if ($nilai_uts >= 70 && $nilai_uts <= 85) {
        $grade_nilai = "B";
    } else if ($nilai_uts >= 56 && $nilai_uts <= 56) {
        $grade_nilai = "C";
    } else if ($nilai_uts >= 36 && $nilai_uts <= 56) {
        $grade_nilai = "D";
    } else if ($nilai_uts >= 35 && $nilai_uts <= 36) {
        $grade_nilai = "E";
    } else {
        $grade_nilai = "I";
    }

    $predikat_nilai = "";
    switch ($grade_nilai) {
        case 'A':
            $predikat_nilai = "Sangat Memuaskan";
            break;
        case 'B':
            $predikat_nilai = "Memuaskan";
            break;
        case 'C':
            $predikat_nilai = "Cukup";
            break;
        case 'D':
            $predikat_nilai = "Kurang";
            break;
        case 'E':
            $predikat_nilai = "Sangat Kurang";
            break;
        default:
            break;
    }

    if (!empty($proses)) {
        echo '<br/>Nama : ' . $nama_siswa;
        echo '<br/>Mata Kuliah : ' . $mata_kuliah;
        echo '<br/>Nilai UTS : ' . $nilai_uts;
        echo '<br/>Nilai UAS : ' . $nilai_uas;
        echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;
        echo '<br/>Grade Nilai : ' . $grade_nilai;
        echo '<br/>Predikat Nilai : ' . $predikat_nilai;
    }
?>