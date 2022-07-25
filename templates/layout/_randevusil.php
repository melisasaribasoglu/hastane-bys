<?php
require '../../config/_vtbaglanti.php';
error_reporting(0);

if(isset($_GET["id"])){
    $silinecekrandevu_id=$_GET["id"];
    //Kayıt listeleme
    $randevusilmee=$database->get("randevular","*", ["randevu_id" => $silinecekrandevu_id]);
    if($randevusilmee>0){
        // silme işlemi
        $data = $database->delete("randevular", ["randevu_id" => $silinecekrandevu_id]);
        echo '<link rel="stylesheet" href="../../static/css/silme.css">
            <div class="container" id="container">
                <div class="form-container sign-up-container">
                    <form action="../anasayfa.php" method="POST">
                        <h1>Randevu silme işlemi başarılı bir şekilde gerçekleşti.</h1>
                        <button>Anasayfaya geri dön</button>
                    </form>
                </div>
            </div>';
    }else{
        // hata alınırsa yönlendirme yapılacak
        header('Location: ../randevugecmis.php?m=randevusilme_hata');
    }
}
?>