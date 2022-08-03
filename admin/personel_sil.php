<?php include "navbar_sol.php"; ?>



<div class="content-wrapper">
  <h3 class="page-heading mb-4">Personel</h3>
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="col-lg-12">
            <div class="card">


            <!-- SİLME KISMI -->

              <div class="card-body">
                <h5 class="card-title mb-4">Personel Sil</h5>

                <div class="table-responsive">

                  <form class="forms-sample" action="" method="POST">

                    <div class="form-group">
                      <label for="etkinlikbasligi">Personel id Giriniz</label>
                      <input type="text" class="form-control p-input" name="personel_id" id="etkinlikbasligi" aria-describedby="emailHelp"placeholder="Personel ID">
                    </div>

                    <br>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Sil</button>
                    </div>

                  </form>

                </div>

              </div>

              <!-- GÜNCELLE KISMI -->

              <!-- <div class="card-body">
                <h5 class="card-title mb-4">Personel Güncelle</h5>

                <div class="table-responsive">

                  <form class="forms-sample" action="" method="POST">

                    <div class="form-group">
                      <label for="etkinlikbasligi">Görevli Personeli Güncelle </label>
                      <input type="text" class="form-control p-input" name="personel__güncelle_id" id="etkinlikbasligi" aria-describedby="emailHelp">
                    </div>
                    

                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Güncelle</button>
                    </div>

                  </form>

                </div>

              </div> -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include "footer.php"; ?>


<?php

session_start();
include "../login/baglanti.php";

$personel_id = $_POST["personel_id"]; //post içinde input name göre yazılacak


if (!isset($personel_id)) {

  echo "<script>alert('boş alanları doldurun')</script>";
} else {

   // $sil = "DELETE FROM `kategoriler` WHERE id='".$kategori_id."'";

      $sil = "DELETE FROM personeller WHERE id='$personel_id'";

      $sonuc = mysqli_query($conn, $sil);

  if ($sonuc) {
    echo "<script>alert('personel silindi')</script>";
  } else {
    
    echo "<script>alert('veri tabanından silinirken hata oluştu')</script>";
  }
}
?>

<!-- 

1) Önce etkinliği sil, sonra personeli sil (Bu gerçek hayata pek uygun değil )
2) Personel silinirse, etkinlik iptal olur. Silinen Personel yerine personel güncelle yapmalı






 -->