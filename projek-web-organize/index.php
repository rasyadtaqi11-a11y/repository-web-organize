<?php

require_once('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hey dear!</h1>
    <script src="assets/js/hello.js"></script>
    <?php
        global $namaDariPHP;
        $panggil = new Config();
        $panggil->latihan();
        echo "Nama: " . $namaDariPHP;
    ?>
    <br>
    <img src="antonjpg.jpg" alt="Gambar Anton">


</body>
</html>