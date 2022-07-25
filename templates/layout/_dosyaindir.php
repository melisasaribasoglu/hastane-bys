<?php
header("Content-type:application/vnd.ms-excel");
header("Content-disposition: attachment; filename=randevularım.xls");
require '../config/_vtbaglanti.php';
session_start();
$resim['yol']=base64_encode("deneme.pdf");

// mysql_select_db("hastaneby", mysql_connect("localhost","root"));

// // Başlık alanları
// echo 'Kullanıcı ID'."\t" . 'Ad' . "\t" . 'Soyad' . "\t" . 'TC No' . "\t" . 'Klinik' . "\t" . 'Doktor' . "\t" . 'Tarih' . "\t" . 'Saat'. "\n";

// $doktor_listele = mysql_query("Select * from doktor where doktor_id in (Select doktor from randevular)");
// $klinik_listele = mysql_query("Select * from klinik where klinik_id in (Select klinik from randevular)");
// $kullanici_listele =mysql_query("Select * from kullanicilar where tc in (Select tc from randevular)");
// $listele =mysql_query("Select * from randevular");
// while($row = mysql_fetch_array($listele)){
//     $row1 = mysql_fetch_array($doktor_listele);
//     $row2 = mysql_fetch_array($klinik_listele);
//     $row3 = mysql_fetch_array($kullanici_listele);
//     echo $row["randevu_id"]. "\t" . $row3["ad"]. "\t" . $row3["soyad"]. "\t" . $row2["klinik_adi"]. "\t" . $row1["unvan_ad_soyad"]. "\t" . $row["tarih"]. "\t". $row["saat"]. "\n";
// }

?>

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
