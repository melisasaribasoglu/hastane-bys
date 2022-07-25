<?php 
// Veritabanı bağlantısını dosyaya dahil ediyoruz
require '../../config/_vtbaglanti.php';

// Değişkenleri tanımlıyoruz
$ad = "";
$soyad = "";
$tc = "";
$sifre = "";
$tel = "";
$cinsiyet = "";

// İsset ile öyle bir değer var mı onu kontrol ediyoruz
if(isset($_POST["ad"]) && isset($_POST["soyad"]) && isset($_POST["tc"]) && isset($_POST["sifre"]) && isset($_POST["tel"]) && isset($_POST["cinsiyet"])){
    // Boş değer var mı onu kontrol ediyoruz
    if($_POST["ad"] != "" && $_POST["soyad"] != "" && $_POST["tc"] != "" && $_POST["sifre"] != "" && $_POST["tel"] != "" && $_POST["cinsiyet"] != ""){
        // Değişkenlerimize atamalarını gerçekleştiriyoruz
        $ad = $_POST["ad"];
        $soyad = $_POST["soyad"];
        $tc = $_POST["tc"];
        $sifre = $_POST["sifre"];
        $tel = $_POST["tel"];
        $cinsiyet = $_POST["cinsiyet"];

        // Veritabanına ekleme işlemini gerçekleştiriyoruz.
        $database->insert("kullanici", [
            "ad" => $ad,
            "soyad" => $soyad,
            "tc" => $tc,
            "sifre" => $sifre,
            "tel" => $tel,
            "cinsiyet" =>$cinsiyet
        ]);
        
        // son eklenen id'yi çeker
        $son_eklenen_id = $database->id();

        if($son_eklenen_id > 0){
            echo '<script>alert("Kayıt oluşturuldu, giriş yapabilirsiniz.")</script>';
        }else{
            echo '<script>alert("Kayıt oluşturulurken bir hata oluştu! Tekrar deneyiniz.")</script>';
        }
    }else{
        echo '<script>alert("Eksik alanlar var. Lütfen daha dikkatli doldurunuz.")</script>';
    }
}
?>