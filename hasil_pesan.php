<?php
if (isset($_POST['nama']) && isset($_POST['kelas']) && isset($_POST['pesan'])) {
    $kiriman_nama = $_POST['nama'];
    $kiriman_kelas = $_POST['kelas'];
    $kiriman_pesan = $_POST['pesan'];
} else {
    header("Location: form_pesan.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesan Berhasil Dikirim</title>
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
            margin-bottom: 8px;
            color: #1a202c;
        }
        .teks-sapaan {
            margin-top: 0;
            margin-bottom: 18px;
            font-size: 14px;
            color: #2d3748;
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
            background-color: #8bf887;
            color: #ffffff;
            padding: 9px 16px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            display: inline-block;
            margin-top: 8px;
        }
        .btn-hijau:hover {
            background-color: #82ef88;
        }
    </style>
</head>
<body>

<div class="card-box">
    <h2>Pesan Berhasil Dikirim</h2>
    <p class="teks-greeting">Terima kasih, <b><?php echo $kiriman_nama; ?>!</b></p>

    <div class="data-row"><b>Nama:</b> <?php echo $kiriman_nama; ?></div>
    <div class="data-row"><b>Kelas:</b> <?php echo $kiriman_kelas; ?></div>
    <div class="data-row"><b>Pesan / Kesan:</b> <?php echo $kiriman_pesan; ?></div>

    <a href="index.php" class="btn-hijau">Kembali ke Data Mahasiswa</a>
</div>

</body>
</html>