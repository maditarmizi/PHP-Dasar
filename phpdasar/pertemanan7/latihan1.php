<?php 
// SUPERGLOBLAS adalah Variabel2 yang sudah dimiliki oleh PHP yang bisa kita akses di manapun & kapanpun. Variabel ini adalah tipenya Array Associative

// GET
$data = [
    [
    "gambar" => "3x4.jpg",
    "nama" => "Adi Tarmizi",
    "absen" => "19",
    "email" => "@gmail.com",
    "cita" => "Programmer"
    ],
    [
        "gambar" => "3x4.jpg",
        "nama" => "Ayu",
        "absen" => "31",
        "email" => "ayu@gmail.com",
        "cita" => "Polwan"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    
    </style>
</head>
<body>
    <h1>Data saya</h1>
    <ul>
    <?php foreach( $data as $d) : ?>
        <li>
           <a href="latihan2.php?gambar=<?php echo $d["gambar"]; ?>&nama=<?php echo $d["nama"]; ?>&absen=<?php echo $d["absen"]; ?>&email=<?php echo $d["email"]; ?>&cita=<?php echo $d["cita"]; ?>">
           
           <?php echo $d["nama"]; ?>
        
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>

































