<?php 
// Veritabanı bağlantısını dosyaya dahil ediyoruz
require '../../config/_vtbaglanti.php';
session_start();
error_reporting(0);


// Değişken ataması yapıyoruz
$tc = "";
$sifre = "";

// İsset ile öyle bir değer var mı onu kontrol ediyoruz
if(isset($_POST['tc']) && isset($_POST['sifre'])){
    // Boş değer var mı onu kontrol ediyoruz
    if($_POST['tc'] != "" && $_POST['sifre'] != ""){
        // Değişkenlerimize atamalarını gerçekleştiriyoruz
        $tc = $_POST['tc'];
        $sifre = $_POST['sifre'];
        // SQL WHERE komutunu medoo d uygulayarak kontrol gerçekleştiriyoruz
        $kullanici = $database->get("kullanici", "*", ["AND" => ["tc" => $tc,"sifre"=>$sifre]]);
        if($kullanici['kullanici_id']!=""){
            $_SESSION["kullaniciID"]=$kullanici['kullanici_id'];
            header('Location: ../anasayfa.php');
            exit;
            
        }else{
            // Kullanıcı giriş bilgileri hatalı ya da tutarsız ise kullanıcıya tekrar girmesi için dönüt yapılıyor
            echo '<script>alert("TC veya Şifre bilgileriniz eksik ya da hatalı. Lütfen Tekrar deneyiniz.")</script>';
        }   
    }else{
        echo '<script>alert("Eksik veya hatalı bilgi girdiniz. Lütfen tekrar deneyiniz.")</script>';
    }
}
?>
