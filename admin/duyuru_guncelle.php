<?php include "navbar_sol.php"; ?>


<div class="content-wrapper">
  <h3 class="page-heading mb-4">Duyuru İşlemleri</h3>
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-4">Duyuru Güncelle</h5>

                <div class="table-responsive">

                  <form class="forms-sample" action="" method="POST">

                  <div class="form-group">
                      <label for="etkinlikbasligi">Duyuru ID</label>
                      <input type="text" class="form-control p-input" name="id" id="etkinlikbasligi" aria-describedby="emailHelp" placeholder="Duyuru Id Giriniz">
                    </div>

                    <div class="form-group">
                      <label for="etkinlikbasligi">Duyuru Ad</label>
                      <input type="text" class="form-control p-input" name="ad" id="etkinlikbasligi" aria-describedby="emailHelp" placeholder="Duyuru Ad Giriniz">
                    </div>


                    <div class="form-group">
                    <label for="etkinlikfile">Durum</label>
                    <fieldset>
                        <input type="radio" id="html" name="durum" value="1"checked>
                        <label for="html">Aktif</label><br>
                        <input type="radio" id="css" name="durum" value="0">
                        <label for="css">Geçmiş</label><br>
                     </fieldset>
                    </div>

                  </form>

                  <div class="form-group">
                      <button type="submit" class="btn btn-primary">Güncelle</button>
                 </div>

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





