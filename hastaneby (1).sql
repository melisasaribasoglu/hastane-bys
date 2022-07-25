-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Haz 2021, 12:00:44
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hastaneby`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `doktor`
--

CREATE TABLE `doktor` (
  `doktor_id` int(11) NOT NULL,
  `unvan_ad_soyad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `doktor_tc` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `doktor_tel` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `eposta` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `klinik_id` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `doktor`
--

INSERT INTO `doktor` (`doktor_id`, `unvan_ad_soyad`, `doktor_tc`, `doktor_tel`, `eposta`, `klinik_id`) VALUES
(1, 'Hakan Necip İscan', '12547852394', '5326395457', 'hakannecip@hbs.com', '4'),
(2, 'Mehmet Serdar Binnet', '13456598753', '5423698797', 'mehmetserdar@hbs.com', '1'),
(3, 'Rana Karayalçın', '15654578965', '5342156398', 'ranakarayalcin@hbs.com', '2'),
(4, 'Emrah Altıparmak', '14526568963', '5412036321', 'emrahh@hbs.com', '8'),
(5, 'Emre Özgür', '25636874966', '5332369897', 'emreozgur@hbs.com', '3'),
(6, 'Bahar Öznur', '25458796325', '5345647899', 'baharoznur@hbs.com', '4'),
(7, 'Çiğdem Demiroğlu', '15423698778', '5412098978', 'cigdemm@hbs.com', '6'),
(8, 'Eda Özdere', '25636985456', '5358966787', 'edaozdere@hbs.com', '5'),
(9, 'Hakan Bayri', '36965698741', '5459876362', 'hakanbayri@hbs.com', '3'),
(10, 'Mahmut Ercüment Cengiz', '45632178961', '5423589632', 'mahmutt@hbs.com', '5'),
(11, 'Mehmet Yorubulut', '56321458758', '5415216365', 'mahmutt@hbs.com', '6'),
(12, 'Muktedir Orese', '58963254789', '5555423563', 'muktedirr@hbs.com', '7');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `ad_soyad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `klinik`
--

CREATE TABLE `klinik` (
  `klinik_id` int(11) NOT NULL,
  `klinik_adi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `klinik_aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `klinik_foto` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `klinik`
--

INSERT INTO `klinik` (`klinik_id`, `klinik_adi`, `klinik_aciklama`, `klinik_foto`) VALUES
(1, 'Acil Servis', 'Acil servisimiz 24 saat boyunca kesintisiz çalışma nedeniyle, hastaneye başvuran tüm hastalara gereken tıbbi ve sosyal hizmetleri verebilecek düzeyde yapılanmıştır.', '../static/img/klinikler/acilservis.jpg'),
(2, 'Beslenme ve Diyet', 'Sağlıklı beslenme bilinci oluşturmayı, yapılan planlamalar sayesinde kişilerin yaşam kalitesini arttırmayı ve hastalık tedavilerine destek olmayı hedefliyoruz.', '../static/img/klinikler/beslenmevediyet.jpg'),
(3, 'Beyin ve Sinir Cerrahisi', 'Beyin ve sinir sistemiyle ilgili tüm girişimleri ve ameliyatları; tıbbi ve etik değerlerden ödün vermeden, en son bilgi ve teknolojiyi kullanarak, nitelikli ve uluslararası standartlarda başarı ile yapmaktadır.', '../static/img/klinikler/beyinvesinircerrahisi.jpg'),
(4, 'Çocuk Cerrahisi', 'Bebek anne karnında iken ilk bir aydan itibaren oluşan doğumsal anomaliler ve doğduktan sonra 17 yaşına kadar olan çocukların tüm cerrahi müdahale gerektiren yapısal bozuklukları ile ilgilen bölümdür.', '../static/img/klinikler/cocukcerrahisi.jpg'),
(5, 'Göğüs Cerrahi', 'Hastanın göğüs boşluğunda bulunan ana damarlar ve kalp hariç diğer organ ve alanlarda (kaburgalar, akciğerler, göğüs duvarı, diyafragma, akciğer zarı mediyasten ve yemek borusu) bulunan hastalıkların cerrahi tedavileri ve travmaları ile ilgilenen bilim dalıdır.', '../static/img/klinikler/goguscerrahisi.jpg'),
(6, 'Kadın Hastalıkları ve Doğum', 'Kadınların üreme organları sağlığı, riskli ve normal gebelik takibi, gebelik eğitimi, doğum, menopoz, osteoporoz, kısırlık, tüp bebek, cinsel hastalıklar, rahim ve yumurtalık kanserleri ve kistlerle ilgili her türlü tedavi hizmetlerini vermektedir.', '../static/img/klinikler/kadinhastaliklarivedogum.jpg'),
(7, 'Psikiyatri', 'Genel anlamda ruh ve sinir hastalıkları alanında hizmet vermektedir.', '../static/img/klinikler/psikiyatri.jpg'),
(8, 'Uyku Laboratuvarı', 'Tüm uyku bozukluklarına teşhis ve tedavi imkanı sağlayan bir merkezdir.', '../static/img/klinikler/uykulaboratuvari.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `tc` bigint(11) NOT NULL,
  `sifre` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `cinsiyet` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevular`
--

CREATE TABLE `randevular` (
  `randevu_id` int(11) NOT NULL,
  `klinik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `doktor` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `saat` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `tc` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `doktor`
--
ALTER TABLE `doktor`
  ADD PRIMARY KEY (`doktor_id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Tablo için indeksler `klinik`
--
ALTER TABLE `klinik`
  ADD PRIMARY KEY (`klinik_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `randevular`
--
ALTER TABLE `randevular`
  ADD PRIMARY KEY (`randevu_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `doktor`
--
ALTER TABLE `doktor`
  MODIFY `doktor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `klinik`
--
ALTER TABLE `klinik`
  MODIFY `klinik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `randevular`
--
ALTER TABLE `randevular`
  MODIFY `randevu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
