<?php
session_start();
if($_SESSION["ad"]=="" || $_SESSION["soyad"]=="")
{
  header("location:../login/panelgiris.php");
}
?>

<?php include "navbar_sol.php"; ?>

<!-- partial -->
<div class="content-wrapper">
  <h3 class="page-heading mb-4">YÖNETİM PANELİ</h3>
  <div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <h4 class="text-danger">
                <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i>
              </h4>
            </div>
            <div class="float-right">
              <p class="card-text text-dark">Mesaj Sayısı</p>
              <h4 class="bold-text">1

              </h4> <!-- mesaj sayısı yer alacak -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <h4 class="text-warning">
                <i class="fa fa-users float-right icon-grey-big" aria-hidden="true"></i>
              </h4>
            </div>
            <div class="float-right">
              <p class="card-text text-dark">Yaklaşan Etkinlik Sayısı</p>
              <h4 class="bold-text">5</h4> <!-- Yaklaşan Etkinlik Sayısı -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <h4 class="text-success">
                <i class="fa fa-users float-right icon-grey-big" aria-hidden="true"></i>
              </h4>
            </div>
            <div class="float-right">
              <p class="card-text text-dark">İptal Edilen Etkinlik Sayısı</p>
              <h4 class="bold-text">0</h4> <!-- İptal Edilen Etkinlik Sayısı -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <h4 class="text-primary">
                <i class="fa fa-users float-right icon-grey-big" aria-hidden="true"></i>
              </h4>
            </div>
            <div class="float-right">
              <p class="card-text text-dark">Gerçekleşen Etkinlik Sayısı</p>
              <h4 class="bold-text">50</h4> <!-- Toplam Gerçekleşen Etkinlik Sayısı -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Tarihi yaklaşan etkinlikler sırasıyla listelenecek -->
  <div class="card-deck">
    <div class="card col-lg-12 px-0 mb-4">
      <div class="card-body">
        <h5 class="card-title">Etkinlikler</h5>
        <div class="table-responsive">
          <table class="table center-aligned-table">
            <thead>
              <tr class="text-primary">
                <th>Etkinlik id</th>
                <th>Kategori</th>
                <th>başlık</th>
                <th>açıklama</th>
                <th>Sorumlu Personel ad </th>
                <th>tarih/ yyy-aa-gg-saat</th>
              </tr>
            </thead>
            <tbody>
              <?php

              include "../login/baglanti.php";
              /*
                       $sec="SELECT * FROM etkinlikler";
                       $kategori="";
                       $sonuc=$conn->query($sec);
                       if($sonuc->num_rows>0)
                       {
                          while($cek=$sonuc->fetch_assoc())
                          {
                             echo "
        
                                 <tr>
                                    <td>".$cek['id']."</td>
                                    <td>".$cek['kategori_id']."</td>
                                    <td>".$cek['baslik']."</td>
                                    <td>".$cek['aciklama']."</td>
                                    <td>".$cek['gorevli_personel_id']."</td>
                                 </tr>
        
                               ";
                           }
                        }                    
                      else
                      {
                          echo "kayitli veri bulunamadı";

                      }
                      */

              $sec = "SELECT * from etkinlikler LEFT JOIN kategoriler ON kategoriler.id=etkinlikler.kategori_id INNER JOIN personeller ON personeller.id=etkinlikler.gorevli_personel_id ORDER BY etkinlikler.id DESC";
              $sorgu = mysqli_query($conn, $sec);
              while ($sonuc = mysqli_fetch_row($sorgu)) {
                echo "
        
                                 <tr>
                                    <td>" . $sonuc[0] . "</td>
                                    <td>" . $sonuc[8] . "</td>
                                    <td>" . $sonuc[3] . "</td> 
                                    <td>" . $sonuc[4] . "</td>  
                                    <td>" . $sonuc[10] . "  " . $sonuc[11] . "</td>
                                    <td>" . $sonuc[1] . "</td>  
                                 </tr>
        
                               ";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


</div>



<?php include "footer.php"; ?>