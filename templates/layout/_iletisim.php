<?php

include('../../config/_vtbaglanti.php');

$adsoyad="";
$email="";
$tel="";
$mesaj="";
if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["message"])){
    if($_POST["name"] != "" && $_POST["email"] != "" && $_POST["phone"] != "" && $_POST["message"] != ""){
        $adsoyad=$_POST["name"];
        $email=$_POST["email"];
        $tel=$_POST["phone"];
        $mesaj=$_POST["message"];

        // yeni mesaj ekleme
        $database->insert("iletisim", ["ad_soyad" => $adsoyad,"email" => $email,"tel" => $tel, "mesaj" => $mesaj]);
        $son_eklenen_id = $database->id();
        if ($son_eklenen_id>0) {
            echo '<link rel="stylesheet" href="../../static/css/silme.css">
            <div class="container" id="container">
                <div class="form-container sign-up-container">
                    <form action="../anasayfa.php" method="POST">
                        <h1>Mesajınız başarılı bir şekilde gönderildi.</h1>
                        <button>Anasayfaya geri dön</button>
                    </form>
                </div>
            </div>';
        }else {
            echo '<script>alert("Mesajınız gönderilirken bir hata oluştu.")</script>';
        }
    }else{
        echo '<script>alert("Boş alanlar var. Tekrar deneyiniz.")</script>';
    }
}
?>