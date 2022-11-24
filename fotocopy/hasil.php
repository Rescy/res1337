html>
<head>
<title>Hasil biaya </title>
</head>
<body>
Hasil Biaya <br>
<?php
$jum = $_POST['jumlah'];
$hasil;
if ($jum < 100)
{
$tarif = 150;
                $hasil= $jum * $tarif ;
echo "Jumlah Lembar Fotocopy = $jum <br>";
echo "Tarif harga = $tarif <br>";
echo "Biaya harus bayar = $hasil <br>";
} else if ($jum < 200)
{
$tarif = 100;
                $hasil= $jum * $tarif ;
echo "Jumlah Lembar Fotocopy = $jum <br>";
echo "Tarif harga = $tarif <br>";
echo "Biaya harus bayar = $hasil <br>";
}else if ($jum < 200 )
{
$tarif = 80;
                $hasil= $jum * $tarif ;
echo "Jumlah Lembar Fotocopy = $jum <br>";
echo "Tarif harga = $tarif <br>";
echo "Biaya harus bayar = $hasil <br>";
}else{
echo "Jumlah tidak sesuai";
}
?>
</body>
</html>