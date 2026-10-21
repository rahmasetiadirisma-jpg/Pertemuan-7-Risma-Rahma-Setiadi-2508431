<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pesan Mahasiswa</title>
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
        .input-box {
            margin-bottom: 15px;
        }
        .input-box label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
            font-size: 14px;
            color: #2d3748;
        }
        .input-box input, .input-box textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #cbd5e0;
            border-radius: 5px;
            box-sizing: border-box;
            font-family: Tahoma, Arial, sans-serif;
            font-size: 14px;
        }
        .btn-hijau {
            background-color: #047a17;
            color: #ffffff;
            border: none;
            padding: 9px 16px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }
        .btn-hijau:hover {
            background-color: #2c824a;
        }
        .btn-abu {
            background-color: #718096;
            color: #ffffff;
            padding: 9px 16px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            display: inline-block;
            margin-left: 5px;
        }
        .btn-abu:hover {
            background-color: #4a5568;
        }
    </style>
</head>
<body>

<div class="card-box">
    <h2>Form Pesan Mahasiswa</h2>

    <form action="hasil_pesan.php" method="post">
        <div class="input-box">
            <label>Nama</label>
            <input type="text" name="nama" required>
        </div>

        <div class="input-box">
            <label>Kelas</label>
            <input type="text" name="kelas" required>
        </div>

        <div class="input-box">
            <label>Pesan / Kesan</label>
            <textarea name="pesan" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn-hijau">Submit</button>
        <a href="index.php" class="btn-abu">Back</a>
    </form>
</div>

</body>
</html>