<?php include "navbar_sol.php"; ?>

<div class="content-wrapper">
<h3 class="page-heading mb-4">Kullanıcı</h3>
<div class="row mb-2">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Kullanıcı Yetkisi</h5>

              <div class="table-responsive">

                <form class="forms-sample" action="" method="POST">

                <div class="form-group">
                    <label for="etkinlikfile">Kullanıcı ID</label>
                    <input type="password" class="form-control p-input" id="etkinlikfile" name="sifre" placeholder="Soyad">
                  </div>

                  <div class="form-group">
                    <label for="etkinlikbasligi">Kullanıcı Ad</label>
                    <input type="text" class="form-control p-input" name="ad" id="etkinlikbasligi" aria-describedby="emailHelp" placeholder="Ad">
                  </div>

                  <div class="form-group">
                    <label for="etkinlikfile">Kullanıcı Soyad</label>
                    <input type="text" class="form-control p-input" id="etkinlikfile" name="soyad" placeholder="Soyad">
                  </div>


                  <!-- <div class="form-group">
                    <label for="etkinlikfile">Kullanıcı Yetkisi</label>
                    <input type="file" class="form-control p-input" id="etkinlikfile" name="fotograf" placeholder="Fotoğraf Yükleyiniz">
                  </div> -->


                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Ekle</button>
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