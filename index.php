<?php
// Nama : Risma Rahma Setiadi
// NIM  : 2508431
// Tugas Pertemuan 7 - Pemrograman Internet

$mahasiswa = [
    [
        "nim" => "2508431",
        "nama" => "Risma Rahma Setiadi",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "risma.rahma@upi.edu",
        "nilai" => 90
    ],
    [
        "nim" => "2508432",
        "nama" => "Rajandra Damara Putra",
        "jurusan" => "Teknik Elektro",
        "email" => "Damarada3104@gmail.com",
        "nilai" => 60
    ],
    [
        "nim" => "2508433",
        "nama" => "Intan Novita Sunjaya",
        "jurusan" => "Pendidikan guru Sekolah Dasar",
        "email" => "Intannovita01@yahoo.com",
        "nilai" => 92
    ],
    [
        "nim" => "2508434",
        "nama" => "Hibar Hegar Hibatullah",
        "jurusan" => "Ilmu Komunikasi Media Digital",
        "email" => "hibar@ipb.edu",
        "nilai" => 84
    ],
    [
        "nim" => "2508435",
        "nama" => "Rhaudiya Rhea Pangestu",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "RRhea@gmail.com",
        "nilai" => 56
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa - Risma Rahma Setiadi</title>
    <style>
        body {
            font-family: Tahoma, Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 40px 20px;
        }
        .main-box {
            max-width: 910px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 28px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        }
        .header-area {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header-area h2 {
            margin: 0 0 6px 0;
            color: #1a202c;
        }
        .header-area p {
            margin: 0;
            color: #4a5568;
            font-size: 14px;
        }
        .tabel-data {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .tabel-data th, .tabel-data td {
            border: 1px solid #cbd5e0;
            padding: 11px 14px;
            text-align: left;
            font-size: 14px;
        }
        .tabel-data th {
            background-color: #ebf4ff;
            color: #2d3748;
            font-weight: bold;
        }
        .btn-hijau {
            background-color: #2bb059;
            color: #ffffff;
            padding: 8px 14px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 13px;
            display: inline-block;
        }
        .btn-hijau:hover {
            background-color: #54e08c;
        }
        .ket-lulus {
            color: #166534;
            font-weight: bold;
        }
        .ket-tidak-lulus {
            color: #991b1b;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="main-box">
    <div class="header-area">
        <div>
            <h2>Daftar Mahasiswa</h2>
            <p>Mini Website PHP Dasar</p>
        </div>
        <a href="form_pesan.php" class="btn-hijau">Isi Form Pesan</a>
    </div>

    <table class="tabel-data">
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Nilai</th>
            <th>Grade</th>
            <th>Status</th>
            <th>Detail</th>
        </tr>
        <?php
        $urut = 1;
        foreach ($mahasiswa as $item) {
            $nilai_mhs = $item['nilai'];

            if ($nilai_mhs >= 80) {
                $grade = "A";
            } elseif ($nilai_mhs >= 70) {
                $grade = "B";
            } elseif ($nilai_mhs >= 60) {
                $grade = "C";
            } else {
                $grade = "D";
            }

            if ($nilai_mhs >= 70) {
                $status = "Lulus";
                $css_status = "ket-lulus";
            } else {
                $status = "Tidak Lulus";
                $css_status = "ket-tidak-lulus";
            }

            $link_detail = "detail.php?nim=" . $item['nim'] . "&nama=" . $item['nama'] . "&jurusan=" . $item['jurusan'] . "&email=" . $item['email'] . "&nilai=" . $item['nilai'] . "&grade=" . $grade . "&status=" . $status;
        ?>
        <tr>
            <td><?php echo $urut; ?></td>
            <td><?php echo $item['nim']; ?></td>
            <td><?php echo $item['nama']; ?></td>
            <td><?php echo $item['jurusan']; ?></td>
            <td><?php echo $item['nilai']; ?></td>
            <td><?php echo $grade; ?></td>
            <td class="<?php echo $css_status; ?>"><?php echo $status; ?></td>
            <td>
                <a href="<?php echo $link_detail; ?>" class="btn-hijau">Lihat Detail</a>
            </td>
        </tr>
        <?php
            $urut = $urut + 1;
        }
        ?>
    </table>
</div>

</body>
</html>