<?php

$mahasiswa = [
    [
        "nim" => "25001",
        "nama" => "Andi Pratama",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "nilai" => 88,
        "email"   => "andi@upi.edu"
    ],
    [
        "nim" => "25002",
        "nama" => "Budi Santoso",
        "jurusan" => "Sistem Telekomunikasi",
        "nilai" => 76,
        "email"   => "budi@upi.edu"
    ],
    [
        "nim" => "25003",
        "nama" => "Citra Lestari",
        "jurusan" => "Mekatronika dan Kecerdasan Buatan",
        "nilai" => 67,
        "email"   => "citra@upi.edu"
    ],
    [
        "nim" => "25004",
        "nama" => "Dina Maharani",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "nilai" => 92,
        "email"   => "dina@upi.edu"
    ],
    [
        "nim" => "25005",
        "nama" => "Eko Saputra",
        "jurusan" => "Sistem Telekomunikasi",
        "nilai" => 58,
        "email"   => "dina@upi.edu"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <style>
        body {
            font-family: 'arial', sans-serif;
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
        }
        .h2 {
            font-size: 22px;
            font-weight: bold;
            color: black;
        }
        .p {
            font-size: 14px;
            color: black;
        }
        
        .btn-form {
            display: inline-block;
            background-color: #0d6efd; 
            color: white; 
            padding: 10px 22px; 
            text-decoration: none; 
            border-radius: 6px; 
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .btn-form:hover {
            background-color: #1d4ed8;
        }
        .kotak-tabel {
            width: 100%;
            border: 1px solid #cbd5e1;
            text-align: left;
            font-size: 14px;
        }
        table{
            border-collapse: collapse;
            
        }
        .judul-tabel {
            background-color: #a7b9d8
        }
        .judul-tabel th {
            color: black;
            padding: 16px;
            font-weight: bold;
            border: 1px solid #cbd5e1;
        }
        td {
            padding: 16px;
            border: 1px solid #cbd5e1;
            color: black;
        }
        .Lulus {
            color: green;
            font-weight: bold;
        }

        .Tidak-Lulus {
            color: red;
            font-weight: bold;
        }
        .btn-detail {
            background-color: #2563eb;
            color: white;
            padding: 10px 22px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            display: inline-block;
        }
        .btn-detail:hover {
            background-color: #1d4ed8;
        }
    </style>

</head>
<body>
    <div class="container">
        <h2>Daftar Mahasiswa</h2>
        <p>Mini Website PHP Dasar</p>
        <div>
            <a href="form_pesan.php" class="btn-form ">Isi Form Pesan</a>
        </div>
        
        <div class="kotak-tabel">
            <table>
                <thead>
                    <tr class="judul-tabel">
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>jurusan</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($mahasiswa as $data): ?>
            
                    <?php
                    if ($data["nilai"] >= 80) {
                        $grade = "A";
                        } elseif ($data["nilai"] >= 70) {
                            $grade = "B";
                            } elseif ($data["nilai"] >= 60) {
                                $grade = "C";
                                } else {
                                    $grade = "D";
                                    }
                                    
                                    if ($data["nilai"] >= 70) {
                                        $status = "<span class='Lulus'>Lulus</span>";
                                        } else {
                                            $status = "<span class='Tidak-Lulus'>Tidak Lulus</span>";
                                            }
                                            ?>                        
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data["nim"]; ?></td>
                            <td><?php echo $data["nama"]; ?></td>
                            <td><?php echo $data["jurusan"]; ?></td>
                            <td><?php echo $data["nilai"]; ?></td>
                            <td><?php echo $grade; ?></td>
                            <td><?php echo $status; ?></td>
                            <td>
                                <a href="detail.php?nim=<?= $data['nim'] ?>&nama=<?= $data['nama'] ?>&jurusan=<?= $data['jurusan'] ?>&email=<?= $data['email'] ?>&nilai=<?= $data['nilai'] ?>&grade=<?= $grade ?>&status=<?= $status ?>" class="btn-detail">Lihat Detail</a>
                            </td>
                        </tr>
                        
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>    
    </div>


</body>
</html>


