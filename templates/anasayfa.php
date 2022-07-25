<?php 
// Veritabanı bağlantısını dosyaya dahil ediyoruz
require '../config/_vtbaglanti.php';
$klinik = $database->select("klinik", "*");
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

<!-- Slider Başlangıcı -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" id="carousel-image">
    <div class="carousel-item active">
      <img src="../static/img/slider/slider1.jpg" class="d-block w-100" style='height:30rem' alt="...">
    </div>
    <div class="carousel-item">
      <img src="../static/img/slider/slider2.jpg" class="d-block w-100" style='height:30rem' alt="...">
    </div>
    <div class="carousel-item">
      <img src="../static/img/slider/slider3.jpg" class="d-block w-100" style='height:30rem' alt="...">
    </div>
    <div class="carousel-item">
      <img src="../static/img/slider/slider4.jpg" class="d-block w-100" style='height:30rem' alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container my-4">
  <h2 class="text-center text-info">KLİNİKLER</h2>
  <!--Carousel Wrapper-->
  <div id="multi-item-example2" class="carousel slide carousel-multi-item" data-ride="carousel">

    <!--Controls-->
    <div class="controls-top">
      <a class="btn-floating" href="#multi-item-example2" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
      <a class="btn-floating" href="#multi-item-example2" data-slide="next"><i
          class="fas fa-chevron-right"></i></a>
    </div>
    <!--/.Controls-->
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#multi-item-example2" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example2" data-slide-to="1"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <!-- <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
      Php ile yazıldığında slider düzgün çalışmıyor
          <?php
            // foreach($klinik as $klinikveri){
            //   echo '
            //   <div class="col-md-3" style="float:left">
            //     <div class="card mb-2">
            //       <img class="card-img-top"
            //         src="'.$klinikveri['klinik_foto'].'" alt="Card image cap">
            //       <div class="card-body" style="height: 350px">
            //         <h4 class="card-title text-center h-25">'.$klinikveri['klinik_adi'].'</h4>
            //         <p class="card-text"><i class="fas fa-long-arrow-alt-right"></i> '.$klinikveri['klinik_aciklama'].'</p>
            //       </div>
            //     </div>
            //   </div>
            //   ';
            // }
          ?>
      </div>
    </div> -->
    <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top"
              src="../static/img/klinikler/acilservis.jpg" alt="Card image cap">
            <div class="card-body" style="height: 350px">
              <h4 class="card-title text-center h-25">Acil Servis</h4>
              <p class="card-text"><i class="fas fa-long-arrow-alt-right"></i> Acil servisimiz 24 saat boyunca kesintisiz çalışma nedeniyle, hastaneye başvuran tüm hastalara gereken tıbbi ve sosyal hizmetleri verebilecek düzeyde yapılanmıştır.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top"
              src="../static/img/klinikler/beslenmevediyet.jpg" alt="Card image cap">
            <div class="card-body" style="height: 350px">
              <h4 class="card-title text-center h-25">Beslenme ve Diyet</h4>
              <p class="card-text"><i class="fas fa-long-arrow-alt-right"></i> Sağlıklı beslenme bilinci oluşturmayı, yapılan planlamalar sayesinde kişilerin yaşam kalitesini arttırmayı ve hastalık tedavilerine destek olmayı hedefliyoruz.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top"
              src="../static/img/klinikler/beyinvesinircerrahisi.jpg" alt="Card image cap">
            <div class="card-body" style="height: 350px">
              <h4 class="card-title text-center h-25">Beyin ve Sinir Cerrahisi</h4>
              <p class="card-text"><i class="fas fa-long-arrow-alt-right"></i> Beyin ve sinir sistemiyle ilgili tüm girişimleri ve ameliyatları; tıbbi ve etik değerlerden ödün vermeden, en son bilgi ve teknolojiyi kullanarak, nitelikli ve uluslararası standartlarda başarı ile yapmaktadır.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="float:left">
        <div class="card mb-2">
            <img class="card-img-top"
              src="../static/img/klinikler/cocukcerrahisi.jpg" alt="Card image cap">
            <div class="card-body" style="height: 350px">
              <h4 class="card-title text-center h-25">Çocuk Cerrahisi</h4>
              <p class="card-text"><i class="fas fa-long-arrow-alt-right"></i> Bebek anne karnında iken ilk bir aydan itibaren oluşan doğumsal anomaliler ve doğduktan sonra 17 yaşına kadar olan çocukların tüm cerrahi müdahale gerektiren yapısal bozuklukları ile ilgilen bölümdür.</p>
            </div>
          </div>
        </div>
      </div>
      <!--/.First slide-->
      <!--Second slide-->
      <div class="carousel-item">
        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top"
              src="../static/img/klinikler/goguscerrahisi.jpg" alt="Card image cap">
            <div class="card-body" style="height: 350px">
              <h4 class="card-title text-center h-25">Göğüs Cerrahi</h4>
              <p class="card-text"><i class="fas fa-long-arrow-alt-right"></i> Hastanın göğüs boşluğunda bulunan ana damarlar ve kalp hariç diğer organ ve alanlarda bulunan hastalıkların cerrahi tedavileri ve travmaları ile ilgilenen bilim dalıdır.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top"
              src="../static/img/klinikler/kadinhastaliklarivedogum.jpg" alt="Card image cap">
            <div class="card-body" style="height: 350px">
              <h4 class="card-title text-center h-25">Kadın Hastalıkları ve Doğum</h4>
              <p class="card-text"><i class="fas fa-long-arrow-alt-right"></i> Kadınların üreme organları sağlığı, riskli ve normal gebelik takibi, gebelik eğitimi, doğum, menopoz, osteoporoz, kısırlık, tüp bebek, cinsel hastalıklar, rahim ve yumurtalık kanserleri ve kistlerle ilgili her türlü tedavi hizmetlerini vermektedir.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top"
              src="../static/img/klinikler/psikiyatri.jpg" alt="Card image cap">
            <div class="card-body" style="height: 350px">
              <h4 class="card-title text-center h-25">Psikiyatri</h4>
              <p class="card-text"><i class="fas fa-long-arrow-alt-right"></i> Genel anlamda ruh ve sinir hastalıkları alanında hizmet vermektedir.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top"
              src="../static/img/klinikler/uykulaboratuvari.jpg" alt="Card image cap">
            <div class="card-body" style="height: 350px">
              <h4 class="card-title text-center h-25">Uyku Laboratuvarı</h4>
              <p class="card-text"><i class="fas fa-long-arrow-alt-right"></i> Tüm uyku bozukluklarına teşhis ve tedavi imkanı sağlayan bir merkezdir.</p>
            </div>
          </div>
        </div>
      </div>
      <!--/.Second slide-->
    </div>
    <!--/.Slides-->
  </div>
</div>
<div class="container my-4">
  <h2 class="text-center text-info">DOKTORLAR</h2>
  <!--Carousel Wrapper-->
  <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

    <!--Controls-->
    <div class="controls-top">
      <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
      <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
          class="fas fa-chevron-right"></i></a>
    </div>
    <!--/.Controls-->

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example" data-slide-to="1"></li>
      
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="col-md-3" style="float:left">
        <div class="card mb-2">
            <img class="card-img-top"
              src="../static/img/doktorlar/erkekdoktor.png" alt="Card image cap">
            <div class="card-body" style="height: 170px">
              <h4 class="card-title text-center h-25">Hakan Necip İscan</h4>
              <div class="card-text mt-5">
                <p class="card-text"><i class="fas fa-clinic-medical"></i> Çocuk Cerrahisi</p>
                <p class="card-text"><i class="far fa-envelope"></i> hakannecip@hbs.com</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top"
              src="../static/img/doktorlar/erkekdoktor.png" alt="Card image cap">
            <div class="card-body" style="height: 170px">
              <h4 class="card-title text-center h-25">Mehmet Serdar Binnet</h4>
              <div class="card-text mt-5">
                <p class="card-text"><i class="fas fa-clinic-medical"></i> Acil Servis</p>
                <p class="card-text"><i class="far fa-envelope"></i> mehmetserdar@hbs.com</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top"
              src="../static/img/doktorlar/kadindoktor.png" alt="Card image cap">
            <div class="card-body" style="height: 170px">
              <h4 class="card-title text-center h-25">Rana Karayalçın</h4>
              <div class="card-text mt-5">
                <p class="card-text"><i class="fas fa-clinic-medical"></i> Beslenme ve Diyet</p>
                <p class="card-text"><i class="far fa-envelope"></i> ranakarayalcin@hbs.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top"
              src="../static/img/doktorlar/erkekdoktor.png" alt="Card image cap">
            <div class="card-body" style="height: 170px">
              <h4 class="card-title text-center h-25">Emrah Altıparmak</h4>
              <div class="card-text mt-5">
                <p class="card-text"><i class="fas fa-clinic-medical"></i> Uyku Laboratuvarı</p>
                <p class="card-text"><i class="far fa-envelope"></i> emrahh@hbs.com</p>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!--/.First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top"
              src="../static/img/doktorlar/erkekdoktor.png" alt="Card image cap">
            <div class="card-body" style="height: 170px">
              <h4 class="card-title text-center h-25">Emre Özgür</h4>
              <div class="card-text mt-5">
                <p class="card-text"><i class="fas fa-clinic-medical"></i> Beyin ve Sinir Cerrahisi</p>
                <p class="card-text"><i class="far fa-envelope"></i> emreozgur@hbs.com</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top"
              src="../static/img/doktorlar/kadindoktor.png" alt="Card image cap">
            <div class="card-body" style="height: 170px">
              <h4 class="card-title text-center h-25">Bahar Öznur</h4>
              <div class="card-text mt-5">
                <p class="card-text"><i class="fas fa-clinic-medical"></i> Çocuk Cerrahisi</p>
                <p class="card-text"><i class="far fa-envelope"></i> baharoznur@hbs.com</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top"
              src="../static/img/doktorlar/kadindoktor.png" alt="Card image cap">
            <div class="card-body" style="height: 170px">
              <h4 class="card-title text-center h-25">Çiğdem Demiroğlu</h4>
              <div class="card-text mt-5">
                <p class="card-text"><i class="fas fa-clinic-medical"></i> Kadın Hastalıkları</p>
                <p class="card-text"><i class="far fa-envelope"></i> cigdemm@hbs.com</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top"
              src="../static/img/doktorlar/kadindoktor.png" alt="Card image cap">
            <div class="card-body" style="height: 170px">
              <h4 class="card-title text-center h-25">Eda Özdere</h4>
              <div class="card-text mt-5">
                <p class="card-text"><i class="fas fa-clinic-medical"></i> Göğüs Cerrahi</p>
                <p class="card-text"><i class="far fa-envelope"></i> edaozdere@hbs.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/.Second slide-->
        <div class="carousel-item">
          <div class="col-md-3" style="float:left">
            <div class="card mb-2">
              <img class="card-img-top"
              src="../static/img/doktorlar/erkekdoktor.png" alt="Card image cap">
              <div class="card-body" style="height: 170px">
                <h4 class="card-title text-center h-25">Hakan Bayri</h4>
                <div class="card-text mt-5">
                  <p class="card-text"><i class="fas fa-clinic-medical"></i> Beyin ve Sinir Cerrahisi</p>
                  <p class="card-text"><i class="far fa-envelope"></i> hakanbayri@hbs.com</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3" style="float:left">
            <div class="card mb-2">
              <img class="card-img-top"
                src="../static/img/doktorlar/erkekdoktor.png" alt="Card image cap">
              <div class="card-body" style="height: 170px">
                <h4 class="card-title text-center h-25">Mahmut Ercüment Cengiz</h4>
                <div class="card-text mt-5">
                  <p class="card-text"><i class="fas fa-clinic-medical"></i> Göğüs Cerrahi</p>
                  <p class="card-text"><i class="far fa-envelope"></i> mahmutt@hbs.com</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3" style="float:left">
            <div class="card mb-2">
              <img class="card-img-top"
                src="../static/img/doktorlar/erkekdoktor.png" alt="Card image cap">
              <div class="card-body" style="height: 170px">
                <h4 class="card-title text-center h-25">Mehmet Yorubulut</h4>
                <div class="card-text mt-5">
                  <p class="card-text"><i class="fas fa-clinic-medical"></i> Kadın Hastalıkları</p>
                  <p class="card-text"><i class="far fa-envelope"></i> mahmutt@hbs.com</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3" style="float:left">
            <div class="card mb-2">
              <img class="card-img-top"
                src="../static/img/doktorlar/erkekdoktor.png" alt="Card image cap">
              <div class="card-body" style="height: 170px">
                <h4 class="card-title text-center h-25">Muktedir Orese</h4>
                <div class="card-text mt-5">
                  <p class="card-text"><i class="fas fa-clinic-medical"></i> Psikiyatri</p>
                  <p class="card-text"><i class="far fa-envelope"></i> muktedirr@hbs.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.Slides-->
  </div>
</div>

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