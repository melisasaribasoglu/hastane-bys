<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAYAT HASTANE BİLGİ SİSTEMİ</title>
    <!-- CSS -->
    <link rel="stylesheet" href="static/css/kayitgiris.css">
</head>
<body>
    <h1 id="page-title">GİRİŞ SAYFASI</h3><br>
    <div class="container" id="container">
      <!-- Kayıt Olma -->
      <div class="form-container sign-up-container">
        <form action="templates/layout/_kayitvt.php" method="POST">
          <h1>Kayıt Ol</h1>
          <input type="text" name="ad" placeholder="Adınızı Giriniz" />
          <input type="text" name="soyad" placeholder="Soyadınızı Giriniz" />
          <input type="number" name="tc" placeholder="TC Kimlik Numaranızı Giriniz" />
          <input type="password" name="sifre" placeholder="Şifrenizi Giriniz" />
          <input type="text" name="tel" placeholder="Telefon Numaranızı Giriniz" />
          <select name="cinsiyet" id="cinsiyet">
            <option value="Cinsiyet Seçiniz">Cinsiyet Seçiniz</option>
            <option value="Kadın">Kadın</option>
            <option value="Erkek">Erkek</option>
          </select>
          <button>Kayıt Ol</button>
        </form>
      </div>
      <!-- Giriş Yapma -->
      <div class="form-container sign-in-container">
        <form action="templates/layout/_girisvt.php" method="POST">
          <h1>Giriş Yap</h1>
          <input type="number" name="tc" placeholder="TC Kimlik Numarınızı Giriniz" />
          <input type="password" name="sifre" placeholder="Şifrenizi Giriniz" />
          <button>Giriş Yap</button>
        </form>
      </div>
      <!-- Geçiş Sayfaları -->
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Hoşgeldiniz!</h1>
            <p>İşlemlerinizi hızlı bir şekilde gerçekleştirmek için giriş yapınız.</p>
            <img src="https://i.pinimg.com/originals/98/80/dd/9880ddf30d520f2e36855efb8e5cfb20.gif" style="widht:150px; height:150px" alt="kuaaforgiff"><br>
            <button class="ghost" id="signIn">Giriş Yap</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Hala Kayıt Olmadınız Mı?</h1>
            <p>Hastane Randevu Sistemimize kayıt olarak randevularınızı hızlı bir şekilde alabilirsiniz.</p>
            <img src="https://m.gifmania.com.tr/Hareketli-Gifler-Insanlar/Gif-Resimleri-Meslekler/Animasyonlar-Hemsireler/Hemsireler-61167.gif" style="widht:150px; height:150px" alt="kuaaforgiff"><br>
            <button class="ghost" id="signUp">Kayıt Ol</button>
          </div>
        </div>
      </div>
    </div>
    <!-- JS -->
  <script src="static/js/kayitgiris.js"></script>
</body>
</html>