<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil pesan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: silver;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;

        }

        .container {
            background-color: white;
            padding: 32px 36px;
            border-radius: 16px;
            box-shadow: 0 4px 20px black;
            width: 100%;
            max-width: 600px;
        }

        .h2 {
            font-size: 22px;
            font-weight: bold;
            color: black;
        }

        .makasih {
            font-size: 14px;
            color: black;
        }

        .hasil-isi {
            background-color: #cbd5e1;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 12px;
            font-size: 14px;
            color: black;
        }

        .hasil-isi strong {
            color: black;
        }

        .btn-kembali {
            display: inline-block;
            margin-top: 16px;
            padding: 10px 18px;
            background-color: #2563eb;
            color: white;
            border-radius: 8px;
            font-size: 14px;
            text-decoration: none;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-kembali:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Pesan Berhasil Dikirim</h2>
        
        <p class="makasih">
            Terima kasih, <strong><?= $_POST['nama_lengkap'] ?></strong>!
        </p>

        <div class="hasil-isi">
            <strong>Nama:</strong> <?= $_POST['nama_lengkap'] ?>
        </div>

        <div class="hasil-isi">
            <strong>Kelas:</strong> <?= $_POST['kelas'] ?>
        </div>

        <div class="hasil-isi">
            <strong>Pesan / Kesan:</strong> <?= $_POST['pesan'] ?>
        </div>

        <a href="index.php" class="btn-kembali">Kembali ke Data Mahasiswa</a>
    </div>

</body>
</html>