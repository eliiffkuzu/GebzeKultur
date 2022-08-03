<!DOCTYPE html>
<html lang="tr">

<!-- eksiklikler -->
<!-- kullanıcı fotografı -->


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> <?php session_start();
          echo $_SESSION["user"]; ?></title>
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->


    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->

        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="images/e.png" alt="">
            <p class="name"><?php echo $_SESSION["ad"] ; ?></p>
            <p class="designation">
              <?php echo $_SESSION['user']; ?>
            </p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item"> <!--active-->
              <a class="nav-link" href="panel.php">
                <img src="images/icons/1.png" alt="">
                <span class="menu-title">Ana Ekran</span>
              </a>
            </li>



         <li  class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
                <img src="images/icons/9.png" alt="">
                <span class="menu-title">Etkinlik İşlemleri<i class="fa fa-sort-down"></i></span>
              </a>
              
              <div class="collapse" id="sample-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="etkinlik_ekle.php">
                        <!-- <img src="images/icons/2.png" alt=""> -->
                        <span class="menu-title">Etkinlik Ekle</span>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="etkinlik_iptal.php">
                        <!-- <img src="images/icons/4.png" alt=""> -->
                        <span class="menu-title">Etkinlik İptal</span>
                      </a>
                    </li>



                    <li class="nav-item">
                      <a class="nav-link" href="etkinlik_guncelle.php">
                        <!-- <img src="images/icons/5.png" alt=""> -->
                        <span class="menu-title">Etkinlik Güncelle</span>
                      </a>
                    </li>
  
                 </ul>
               </div>
              </li>



              <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sample-pages1" aria-expanded="false" aria-controls="sample-pages">
                <img src="images/icons/9.png" alt="">
                <span class="menu-title">Duyuru İşlemleri<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="sample-pages1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="duyuru_ekle.php">
                      Duyuru Ekle
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="duyuru_sil.php">
                      Duyuru Sil
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="duyuru_guncelle.php">
                      Duyuru Güncelle
                    </a>
                  </li>
                </ul>
              </div>
            </li>



            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sample-pages1" aria-expanded="false" aria-controls="sample-pages">
                <img src="images/icons/9.png" alt="">
                <span class="menu-title">Kullanıcı İşlemleri<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="sample-pages1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="kullanici_ekle.php">
                      Kullanıcı Ekle
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="kullanici_sil.php">
                      Kullanıcı Sil
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="kullanici_yetkisi.php">
                      Kullanıcı Yetkisi
                    </a>
                  </li>
                </ul>
              </div>
            </li>



            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sample-pages2" aria-expanded="false" aria-controls="sample-pages">
                <img src="images/icons/9.png" alt="">
                <span class="menu-title">Personel İşlemleri<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="sample-pages2">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="personel_ekle.php">
                      Personel Ekle
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="personel_sil.php">
                      Personel Sil
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="personel_listele.php">
                      Personel Listele
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="personel_guncelle.php">
                      Personel Güncelle
                    </a>
                  </li>
                </ul>
              </div>
            </li>


            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sample-pages3" aria-expanded="false" aria-controls="sample-pages">
                <img src="images/icons/9.png" alt="">
                <span class="menu-title">Kategori İşlemleri<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="sample-pages3">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="kategori_ekle.php">
                      Kategori Ekle
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="kategori_sil.php">
                      Kategori Sil
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="kategori_listele.php">
                      Kategori Listele
                    </a>
                  </li>
                </ul>
              </div>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="mesaj.php">
                <img src="images/icons/005-forms.png" alt="">
                <span class="menu-title">Mesaj Kutusu</span>
              </a>
            </li>    



            <li class="nav-item">
              <a class="nav-link" href="../login/cikis.php">
                <img src="images/icons/logout.png" alt="">
                <span class="menu-title">Çıkış Yap</span>
              </a>
            </li>
          </ul>        
        </nav>