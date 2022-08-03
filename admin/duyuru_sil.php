


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
                <h5 class="card-title mb-4">Duyuru Sil</h5>

                <div class="table-responsive">

                  <form class="forms-sample" action="duyuru_sil.php" method="POST">

                    <div class="form-group">
                      <label for="etkinlikbasligi">Duyuru ID Giriniz</label>
                      <input type="text" class="form-control p-input" name="duyuru_sil_id" id="etkinlikbasligi" aria-describedby="emailHelp">
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


