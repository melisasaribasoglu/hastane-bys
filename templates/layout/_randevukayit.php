<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hastane Bilgi Sistemi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<?php

$db = new PDO("mysql:host=localhost;dbname=hastaneby;charset=utf8", "root", "");

$klinik_id = $_POST['klinik'];
$doktor_id = $_POST['doktor'];
$tarih = $_POST['tarih'];
$saat = $_POST['saat'];
$tc = $_POST['tc'];

if (!$klinik_id || !$doktor_id || !$tarih ||  !$saat || !$tc) {
    die("Lütfen Boş Alan Bırakmayınız.");
}

$kayit = $db->prepare("INSERT INTO randevular SET klinik = ?, doktor = ?, tarih = ?, saat = ?, tc = ?");
$kayit->execute([$klinik_id,$doktor_id,$tarih,$saat,$tc]);

if ($kayit) {
    echo "";
    }
else {
    echo "Bir hata oluştu.";
}
header('Refresh: 2; URL=http://localhost/ceren/templates/anasayfa.php');

?>
<div class="spinner-border text-primary" role="status" style="position: absolute; top:50%; left: 50%;">
<span class="sr-only">Yükleniyor...</span>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
</body>
</html>