<?php
//array siswa
$siswa= [
            [
            "nama" => "Agus",
            "usia" => "20"
            ],
            [
            "nama" => "Shinta",
            "usia" => "25"
            ],
            [
            "nama" => "Riska",
            "usia" => "18"
            ]
        ];

// Fungsi pembanding untuk mengurutkan berdasarkan nama
function compareByName($a, $b)
{
    return strcmp($a['nama'], $b['nama']);
}

// Mengurutkan data siswa berdasarkan nama
usort($siswa, 'compareByName');

// Menampilkan data
foreach ($siswa as $key) {
    echo $key['nama'];
    echo ":";
    echo $key['usia'];
    echo "<br>";
}
?>