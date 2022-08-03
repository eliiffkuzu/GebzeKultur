<?php include "navbar_sol.php"; ?>

<div class="content-wrapper">
  <h3 class="page-heading mb-4">Kategori</h3>
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-4">Kategori Sil</h5>

                <div class="table-responsive">

                  <form class="forms-sample" action="" method="POST">

                    <div class="form-group">
                      <label for="etkinlikbasligi">Kategori id</label>
                      <input type="text" class="form-control p-input" name="kategori_id" id="etkinlikbasligi" aria-describedby="emailHelp">
                    </div>


                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Sil</button>
                    </div>

                  </form>

                </div>

              </div>
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

$kategori_id = $_POST["kategori_id"]; //post içinde input name göre yazılacak
/*$ID = $_POST["id"];*/
// $ID = $_POST["kategori"];


if (!isset($kategori_id)) {

  echo "<script>alert('boş alanları doldurun')</script>";
} else {

      // $sil = "DELETE FROM `kategoriler` WHERE id='".$kategori_id."'";

      $sil = "DELETE FROM kategoriler WHERE id='$kategori_id'";

      $sonuc = mysqli_query($conn, $sil);

  if ($sonuc) {
    echo "<script>alert('kategori silindi')</script>";
  } else {
    
    echo "<script>alert('veri tabanından silinirken hata oluştu')</script>";
  }
}


?>