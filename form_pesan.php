<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Mahasiswa</title>
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
            border-radius: 6px;
            box-shadow: 0 4px 20px black;
            width: 100%;
            max-width: 600px;
        }

        .h2 {
            font-size: 22px;
            font-weight: bold;
            color: black;
        }

        .input {
            margin-bottom: 20px;
        }

        span {
            display: block;
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 10px;
            color: black;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px 12px;
            border: 2px solid #cbd5e1;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
            font-family: 'Arial', sans-serif;
            color: black;
        }

        textarea {
            min-height: 120px; 
        }

        .button {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .btn-kirim,
        .btn-kembali {
            display: inline-block;
            padding: 10px 18px;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
        }

        .btn-kirim {
            background-color: #0d6efd;
            color: white;
        }
        .btn-kirim:hover {
            background-color: #1d4ed8;
        }

        .btn-kembali {
            background-color: #64748b;
            color: white;
        }
        .btn-kembali:hover {
            background-color: #5b6378;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Form Pesan Mahasiswa</h2>
        <form action="hasil_pesan.php" method="POST">
            <div class="input">
                <span for="nama">Nama</span>
                <input type="text" name="nama_lengkap">
            </div>

            <div class="input">
                <span for="kelas">Kelas</span>
                <input type="text" name="kelas">
            </div>

            <div class="input">
                <span for="pesan">Pesan / Kesan</span>
                <textarea name="pesan"></textarea>
            </div>

            <div class="button">
                <button type="submit" name="tombol_kirim" class="btn-kirim">Kirim</button>
                <a href="index.php" class="btn-kembali">Kembali</a>
            </div>
        </form>  
    </div>

</body>
</html>