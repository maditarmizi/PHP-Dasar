<?php 

$murid = [
    ["M Adi Tarmizi", "MIPA", "Programmer", "@gmail.com"],
    ["Nama Anda", "MIPA", "Programmer", "@gmail.com"]

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Murid</h1>
    <?php foreach( $murid as $mrd ) : ?>
    <ul>
       <li><?php echo $mrd[0]; ?></li>
       <li><?php echo $mrd[1]; ?></li>
       <li><?php echo $mrd[2]; ?></li>
       <li><?php echo $mrd[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>




































