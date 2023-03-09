<?php
$mahasiswa = [
    'id'=>1,
    'nama'=>'Ammar',
    'nim'=>1103083,
    'uts'=>90,
    'uas'=>85,
    'tugas'=>95,
];

$mahasiswa2 = [
    'id'=>2,
    'nama'=>'Yanto',
    'nim'=>1101223,
    'uts'=>80,
    'uas'=>95,
    'tugas'=>95,
];

$mahasiswa3 = [
    'id'=>3,
    'nama'=>'Isal',
    'nim'=>1101258,
    'uts'=>85,
    'uas'=>85,
    'tugas'=>85,
];

$ar_nilai = [$mahasiswa, $mahasiswa2, $mahasiswa3];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3>Daftar Nilai Mahasiswa</h3>
            <table class="table table-stripped">
                <tr>
                    <th>No</th>
                    <th>NAMA</th>
                    <th>NIM</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>TUGAS</th>
                </tr>
                <?php foreach($ar_nilai as $nilai)?>
                    <tr>
                        <td><?= $nilai['id']; ?></td>
                        <td><?= $nilai['nama']; ?></td>
                        <td><?= $nilai['nim']; ?></td>
                        <td><?= $nilai['uts']; ?></td>
                        <td><?= $nilai['uas']; ?></td>
                        <td><?= $nilai['tugas']; ?></td>
                    </tr>
            </table>
    </div>    
</body>
</html>