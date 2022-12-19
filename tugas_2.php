<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengulangan</title>
</head>
<body>
    <h2>pengulangan</h2>
    <?php
    function hitung($a,$b,$c,$d,$e)
    {
        $hasil = $a+$b+$c+$d+$e;
        return $hasil;
    }
    echo("akurasi bilangan genap  0 s.d 8 adalah ".hitung(0,2,4,6,8));
    ?>
</body>
</html>