

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <style>
        body {
            font-family: 'arial', sans-serif;;
            background-color: silver;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
        }
        .container {
            background-color: white;
            border-radius: 16px;
            padding: 32px 36px;
            width: 600px;
            max-width: 100;
            box-shadow: 0 4px 20px black;
        }
        .h2 {
            font-size: 22px;
            font-weight: bold;
            color: black;
        }
        .kotak-item {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 20px;
        }
        .item {
            background-color: #edf0f5;
            padding: 14px 18px;
            border-radius: 6px;
            font-size: 14px;
            color: black;
        }
        .item-strong {
            color: black;
            font-weight: bold;
        }
        .btn-kembali {
            background-color: #0d6efd;
            color: white;
            padding: 10px 22px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            font-weight:bold;
        }
        .btn-kembali:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Detail Mahasiswa</h2>

    <div class="kotak-item">
        <div class="item">
            <strong>NIM:</strong> <?= $_GET["nim"]; ?>
        </div>
        <div class="item">
            <strong>Nama:</strong> <?= $_GET["nama"]; ?>
        </div>
        <div class="item">
            <strong>Jurusan:</strong> <?= $_GET["jurusan"]; ?> 
        </div>
        <div class="item">
            <strong>Email:</strong> <?= $_GET["email"]; ?>
        </div>
        <div class="item">
            <strong>Nilai:</strong> <?= $_GET["nilai"]; ?>
        </div>
        <div class="item">
            <strong>Grade:</strong> <?= $_GET["grade"]; ?>
        </div>
        <div class="item">
            <strong>Status:</strong> <?= $_GET["status"]; ?>
        </div>
    </div>

    <a href="index.php" class="btn-kembali">Kembali</a>
</div>
    
</body>
</html>