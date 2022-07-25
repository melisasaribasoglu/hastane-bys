<?php
    require '../config/_vtbaglanti.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HAYAT HASTANE BİLGİ SİSTEMİ</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
  <link rel="stylesheet" href="../static/css/anasayfa.css">
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
<!-- Nav End -->

<table class="table table-hover table-dark mt-5 mb-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ad</th>
      <th scope="col">Soyad</th>
      <th scope="col">TC No</th>
      <th scope="col">Klinik</th>
      <th scope="col">Doktor</th>
      <th scope="col">Tarih</th>
      <th scope="col">Saat</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <!-- Veritabanı üzerinden kişiye ait olan yazılan bütün mesajları çekiyoruz -->
  <?php
    $tc = $database->select("kullanici", "tc", ["kullanici_id" => $_SESSION["kullaniciID"]]);
    $randevular = $database->select("randevular", "*", ["tc" => $tc]);
    foreach($randevular as $randevu){
        $klinik = $database->get("klinik", "*", ["klinik_id" => $randevu["klinik"]]);
        $doktor = $database->get("doktor", "*", ["doktor_id" => $randevu["doktor"]]);
        $kullanici = $database->get("kullanici", "*", ["tc" => $randevu["tc"]]);
        echo '
            <tr>
                <td scope="row">'.$kullanici["kullanici_id"].'</td>
                <td scope="row">'.$kullanici["ad"].'</td>
                <td scope="row">'.$kullanici["soyad"].'</td>
                <td scope="row">'.$kullanici["tc"].'</td>
                <td scope="row">'.$klinik["klinik_adi"].'</td>
                <td scope="row">'.$doktor["unvan_ad_soyad"].'</td>
                <td scope="row">'.$randevu["tarih"].'</td>
                <td scope="row">'.$randevu["saat"].'</td>
                <td scope="row"><a href="layout/_randevusil.php?id='.$randevu["randevu_id"].'"><button type="button" class="btn btn-danger">Sil</button></a></td>
            </tr>';
    }
    ?>
  </tbody>
</table>
<div class="d-flex justify-content-end">
<a href="./layout/_dosyaindir.php"><button class="btn btn-outline-success mr-2">Excel Olarak İndir</button></a>
</div>

<!-- Footer -->
<footer class="footer-section mt-5">
  <div class="container">
      <div class="footer-cta pt-5 pb-5">
          <div class="row">
              <div class="col-xl-4 col-md-4 mb-30">
                  <div class="single-cta">
                      <i class="fas fa-map-marker-alt"></i>
                      <div class="cta-text">
                          <h4>Adres</h4>
                          <span>Ceren, Alici Blv. No : 17, 06157 Yenimahalle/Ankara</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-md-4 mb-30">
                  <div class="single-cta">
                      <i class="fas fa-phone"></i>
                      <div class="cta-text">
                          <h4>Telefon</h4>
                          <span>0850 888 1111</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-md-4 mb-30">
                  <div class="single-cta">
                      <i class="far fa-envelope-open"></i>
                      <div class="cta-text">
                          <h4>E-mail</h4>
                          <span>hastanebilgisistemi@info.com</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-content pt-5 pb-5">
          <div class="row">
              <div class="col-xl-4 col-lg-4 mb-50">
                  <div class="footer-widget">
                      <div class="footer-logo">
                          <h3 style="color:white">HAYAT HASTANE BİLGİ SİSTEMİ</h3>
                      </div>
                      <div class="footer-text">
                          <p>İşlemlerinizi hızlı şekilde halletmenin yolu Hayat Hastane Bilgi Sistemlerinden geçer..</p>
                      </div>
                      <div class="footer-social-icon">
                          <span>Bizi Takip Edin</span>
                          <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                          <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                          <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                  <div class="footer-widget">
                      <div class="footer-widget-heading">
                          <h3>Linkler</h3>
                      </div>
                      <ul>
                          <li><a href="./anasayfa.php">Anasayfa</a></li>
                          <li><a href="./randevual.php">Randevu Al</a></li>
                          <li><a href="./randevugecmis.php">Randevu Geçmişi</a></li>
                          <li><a href="./hesapbilgileri.php">Hesap Bilgileri</a></li>
                          <li><a href="./iletisim.php">İletişim</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                  <div class="footer-widget">
                      <div class="footer-widget-heading">
                          <h3>Abone Ol</h3>
                      </div>
                      <div class="subscribe-form">
                          <form action="#">
                              <input type="text" placeholder="Email Adresiniz">
                              <button><i class="fab fa-telegram-plane"></i></button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="copyright-area">
      <div class="container">
          <div class="row">
              <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                  <div class="copyright-text">
                      <p>Copyright &copy; 2021, All Right Reserved <a href="#">Hastane Bilgi Sistemi</a></p>
                  </div>
              </div>
              <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                  <div class="footer-menu">
                      <ul>
                          <li><a href="./anasayfa.php">Anasayfa</a></li>
                          <li><a href="./randevual.php">Randevu Al</a></li>
                          <li><a href="./randevugecmis.php">Randevu Geçmişi</a></li>
                          <li><a href="./hesapbilgileri.php">Hesap Bilgileri</a></li>
                          <li><a href="./iletisim.php">İletişim</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>