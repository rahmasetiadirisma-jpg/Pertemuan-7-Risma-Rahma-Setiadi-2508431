<?php
if (
    isset($_GET['nim']) &&
    isset($_GET['nama']) &&
    isset($_GET['jurusan']) &&
    isset($_GET['email']) &&
    isset($_GET['nilai']) &&
    isset($_GET['grade']) &&
    isset($_GET['status'])
) {
    $nim_mhs = $_GET['nim'];
    $nama_mhs = $_GET['nama'];
    $jurusan_mhs = $_GET['jurusan'];
    $email_mhs = $_GET['email'];
    $nilai_mhs = $_GET['nilai'];
    $grade_mhs = $_GET['grade'];
    $status_mhs = $_GET['status'];
} else {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mahasiswa</title>
    <style>
        body {
            font-family: Tahoma, Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 40px 20px;
        }
        .card-box {
            max-width: 500px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 28px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        }
        .card-box h2 {
            margin-top: 0;
            margin-bottom: 18px;
            color: #1a202c;
        }
        .data-row {
            background-color: #f7fafc;
            padding: 12px 14px;
            border-radius: 6px;
            margin-bottom: 10px;
            font-size: 14px;
            color: #2d3748;
        }
        .btn-hijau {
            background-color: #309145;
            color: #ffffff;
            padding: 9px 16px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            display: inline-block;
            margin-top: 8px;
        }
        .btn-hijau:hover {
            background-color: #62be78;
        }
    </style>
</head>
<body>

<div class="card-box">
    <h2>Detail Mahasiswa</h2>

    <div class="data-row"><b>NIM:</b> <?php echo $nim_mhs; ?></div>
    <div class="data-row"><b>Nama:</b> <?php echo $nama_mhs; ?></div>
    <div class="data-row"><b>Jurusan:</b> <?php echo $jurusan_mhs; ?></div>
    <div class="data-row"><b>Email:</b> <?php echo $email_mhs; ?></div>
    <div class="data-row"><b>Nilai:</b> <?php echo $nilai_mhs; ?></div>
    <div class="data-row"><b>Grade:</b> <?php echo $grade_mhs; ?></div>
    <div class="data-row"><b>Status:</b> <?php echo $status_mhs; ?></div>

    <a href="index.php" class="btn-hijau">Kembali</a>
</div>

</body>
</html>