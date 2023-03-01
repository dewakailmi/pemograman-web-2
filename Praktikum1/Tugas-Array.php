<?php
$mahasiswa1 = [
    'id'=>'1',
    'NIM'=>01101220,
    'UTS'=>95,
    'UAS'=>92,
    'TUGAS'=>97,
];

$mahasiswa2 = [
    'id'=>'2',
    'NIM'=>01103222,
    'UTS'=>93,
    'UAS'=>95,
    'TUGAS'=>90,
];

$mahasiswa3 = [
    'id'=>'3',
    'NIM'=>01104222,
    'UTS'=>89,
    'UAS'=>70,
    'TUGAS'=>90,
];

$ar_nilai = [$mahasiswa1,$mahasiswa2,$mahasiswa3]


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Data Mahasiswa</h2>
        <table class="table table-hover">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>TUGAS</th>
            </tr>
            <?php foreach($ar_nilai as $nilai){ ?>
               <tr>
                <td><?= $nilai['id'];?></td>
                <td><?= $nilai['NIM'];?></td>
                <td><?= $nilai['UTS'];?></td>
                <td><?= $nilai['UAS'];?></td>
                <td><?= $nilai['TUGAS'];?></td>
               </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>