<?php
error_reporting(0);
session_start();

$db = new PDO("mysql:host=localhost;dbname=hastaneby;charset=utf8", "root", "");

if($_POST){
    $eskisifre = $_POST['eskisifre'];
    $yenisifre = $_POST['yenisifre'];
    if (!$eskisifre || !$yenisifre) {
        die("Lütfen Boş Alan Bırakmayınız.");
    }
    $sorgu=$db->prepare("UPDATE kullanici SET sifre=:yenisifre WHERE sifre=:eskisifre ");
    $sorgu -> execute(array(":yenisifre" => $yenisifre , ":eskisifre" => $eskisifre ));
}
if ($sorgu) {
    echo "Şifreniz Değiştirildi";
}

?>