<?php 
// Veritabanı bağlantısını dosyaya dahil ediyoruz
require '../config/_vtbaglanti.php';
session_start();
$kullaniciveri = $database->select("kullanici", "*", ["kullanici_id" => $_SESSION["kullaniciID"]]);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
<title>HAYAT HASTANE BİLGİ SİSTEMİ</title>
<meta name="keywords" content="Bilgi Yönetim Proje">
<meta name="description" content="Hastane Randevu Sistemi">
<meta name="author" content="Burak Şentürk-Emre Demir">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../static/css/hesapbilgileri.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
  <link rel="stylesheet" href="../static/css/anasayfa.css">
<style>
body{
    background-image: url('https://www.wallpapertip.com/wmimgs/99-998859_background-image-for-hospital.jpg');
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="../static/img/logo.png" alt="logo" style="width:50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
      <li class="nav-item">
        <a class="nav-link" href="anasayfa.php">Anasayfa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="randevugecmis.php">
          Randevu Geçmişi
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="hesapbilgileri.php">
          Hesap Bilgileri
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="iletisim.php" tabindex="-1" aria-disabled="true">İletişim</a>
      </li>
    </ul>
    <div>
        <a href="randevual.php"><button type="button" class="btn btn-outline-info mr-2"><i class="fas fa-user-plus"></i> Randevu Al</button></a>
    </div>
    <div>
        <a href="./layout/_cikis.php"><button type="button" class="btn btn-outline-danger"><i class="fas fa-sign-out-alt"></i> Çıkış</button></a>
    </div>
  </div>
</nav>
<button class="tablink" onclick="openPage('Home', this, '#FFE082')">Hesap Bilgilerim</button>
<button class="tablink" onclick="openPage('Contact', this, '#FFE082')">Şifre Değiştir</button>

<div id="Home" class="tabcontent">
  <h3>Hesap Bilgileriniz</h3>
  <table class="table table-dark">
  <thead>
    <tr>
      <th>#</th>
      <th>Adınız</th>
      <th>Soyadınız</th>
      <th>T.C. Kimlik Numaranız</th>
      <th>Cinsiyetiniz</th>
      <th>Şifreniz</th>
      <th>Telefon Numaranız</th>
    </tr>
  </thead>
    <tbody>
    <!-- Bu alanda sürekli dönecek olan alanlarımız Php içinde 'foreach' ile döndürülüyor -->
    <?php
      /* 'sira' ile veri tabanından kayıt silinince oluşacak olan bozuk görüntü engelleniyor  */
      $sira = 1;
      foreach($kullaniciveri as $veri){
        echo "
          <tr>
            <td>$sira</td>
            <td>".$veri['ad']."</td>
            <td>".$veri['soyad']."</td>
            <td>".$veri['tc']."</td>
            <td>".$veri['cinsiyet']."</td>
            <td>".$veri['sifre']."</td>
            <td>".$veri['tel']."</td>
          </tr>
        ";
        /* 'sira' Bu alanda her seferinde bir arttırılır */
        $sira++;
      }
    ?>
  </tbody>
</table>
</div><br>


<div id="Contact" class="tabcontent">
  <div class="container">
  <div class="giris">
  <h3>Şifre Değiştirme Sayfası</h3>
	<!-- Kullanıcı giriş bilgilerini aldığımız kısım başlangıcı -->
    <form action="" method="POST">
		<div class="pc">
			<input type="password" required="" name="eskisifre">
			<span> Şifrenizi Giriniz: </span>
    </div>
		<div class="pc">
			<input type="password" required="" name="yenisifre">
			<span> Yeni Şifrenizi Giriniz: </span>
    </div>
		<div class="pc">
			<input type="submit" value="Değiştir">
    </div>
  </form>
  <?php 
    include('./layout/_sifredegistirme.php');
  ?>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
    function openPage(pageName, elmnt, color) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }

    // Show the specific tab content
    document.getElementById(pageName).style.display = "block";

    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click(); 
</script>

</body>
</html>