<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Daily Journal</title>
    <link rel="icon" href="img/logo.png" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-sm bg-body-tertiary sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">My Daily Journal</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutme">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="article.php">atricle</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">dashboard</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Admin
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Foto Profil</a></li>
                  <li><a class="dropdown-item" href="password.php">Ganti Password</a></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- nav end -->
    <!-- hero begin -->
    <section id="hero" class="text-center p-5 bg-danger-subtle text-sm-start">
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
          <img src="the-sweetest-memories.jpg" class="img-fluid" width="300" />
          <div>
            <h1 class="fw-bold display-4">
              Create Memories, Save Memories, Everyday
            </h1>
            <h4 class="lead display-6">
              Mencatat semua kegiatan sehari-hari yang ada tanpa terkecuali
            </h4>
          </div>
        </div>
      </div>
    </section>
    <!-- hero end -->
    <!-- article begin -->
    <section id="article" class="text-center p-5">
      <div class="countainer">
        <h1 class="fw-bold display-4 pb-3">Article</h1>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="images.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Singa</h5>
              <p class="card-text">Singa adalah spesies hewan dari keluarga felidae atau keluarga kucing. Singa berada di benua Afrika dan sebagian di wilayah India. Singa merupakan hewan yang hidup berkelompok. Biasanya terdiri dari seekor jantan & banyak betina. Kelompok ini menjaga daerah kekuasaannya. Umur singa antara 10 sampai 15 tahun di alam bebas, tetapi dalam penangkaran memungkinkan lebih dari 20 tahun. Singa yang lebih muda akan merebut kepemimpinan dari singa yang lebih tua. Kebanyakan singa yang lebih muda akan memakan anak singa dari pemimpin sebelumnya. </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="4a733b15-8467-4f7c-9c1c-349c7bfe8f57_169.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">koala</h5>
              <p class="card-text">Koala (Phascolarctos cinereus) adalah salah satu binatang berkantung (marsupial) khas dari Australia dan merupakan wakil satu-satunya dari keluarga Phascolarctidae.

                Kata koala berasal dari bahasa Dharug, salah satu bahasa Australia pribumi yang berarti tidak ada air atau dapat juga diartikan tidak minum. Koala sebenarnya minum air tetapi sangat jarang karena makanannya, daun ekaliptus, sudah mengandung cukup air sehingga koala tidak perlu turun dari pohon untuk minum
                
                Koala dapat ditemukan di sepanjang pesisir timur Australia mulai dari Adelaide sampai ke Semenanjung Cape York. </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="14 Fakta Tentang Kucing yang Unik dan Menarik copy.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kucing</h5>
              <p class="card-text">Kucing adalah sejenis mamalia karnivora dari keluarga Felidae. Kata "kucing" biasanya merujuk kepada "kucing" yang telah dijinakkan,[6] tetapi bisa juga bisa merujuk kepada "kucing besar" seperti singa dan harimau yang juga termasuk jenis kucing.

                Kucing telah berbaur dengan kehidupan manusia paling tidak sejak 5.000 tahun SM, dengan ditemukannya kerangka kucing di Pulau Siprus.[7] Sejak zaman 3.500 SM, orang Mesir Kuno telah menggunakan kucing untuk menjauhkan tikus atau hewan pengerat lain dari lumbung yang menyimpan hasil panen.[8] </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="animasi.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Sheep</h5>
              <p class="card-text">Domba atau biri-biri (Ovis) adalah salah satu ruminansia berkaki empat dengan rambut tebal yang dikenal oleh banyak orang. 
                Domba adalah salah satu jenis hewan pertama yang dijinakkan untuk keperluan agrikultural dan dipelihara untuk dimanfaatkan rambut (disebut wol), daging, dan susunya.
                 Jenis domba yang paling dikenal orang adalah domba peliharaan (Ovis aries), yang diduga keturunan dari moufflon liar dari Asia Tengah bagian Selatan dan Barat Daya. </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>
    </section>   
<!-- article end -->
    <!-- gallery begin -->
    <section id="galery"class="text-center p-5 bg-danger-subtle">
      <div class="container"></div>
          <h1 class="fw-bold display-4 pb-3">Galery</h1>
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="surfing-mentawai-islands.jpg" height="650px"class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="motor.jpg" height="650px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="tinju.jpg" height="650px"  class="d-block w-100" alt="...">
                </div>
              <div class="carousel-item">
                <img src="sky diving.jpg" height="650px"  class="d-block w-100" alt="...">
                 </div>
                 <div class="carousel-item">
                <img src="balap sepeda.webp" height="650px"  class="d-block w-100" alt="...">
                 </div>
                 <div class="carousel-item">
                <img src="lari.jpg" height="650px"  class="d-block w-100" alt="...">
                 </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <!-- gallery end -->
    <!-- schedule begin -->
    <section id="schedule" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Schedule</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
          <div class="col">
            <div class="card h-100">
              <div id="tb1" class="card-header bg-danger text-white">SENIN</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Metodelogi Penelitian<br />12.30-13.10 | H.4.5
                </li>
                <li class="list-group-item">
                  Sistem Terdistribusi<br />18.30-21.00 | H.4.8
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div id="tb2" class="card-header bg-danger text-white">
                SELASA
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Kriptografi<br />12.30-13.10 | H.3.6
                </li>
                <l class="list-group-item">
                  Pemograman Berbasis Web <kbr />12.30-14.10 | D.2.J
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div id="tb3" class="card-header bg-danger text-white">RABU</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Manajemen Proyek Teknologi Informasi<br />15.30-18.00 | H.4.6
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div id="tb4" class="card-header bg-danger text-white">KAMIS</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  otomata<br />12.30-14.10 | H.4.1
                </li>
                <li class="list-group-item">
                  basis data<br />16.20-18.00 | H.4.1
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div id="tb5" class="card-header bg-danger text-white">JUMAT</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Penambangan Data<br />10.20-12.00 | H.4.5
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div id="tb6" class="card-header bg-danger text-white">SABTU</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Bimbingan Karir</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- schedule end -->
    <!-- about me begin -->
    <section id="aboutme" class="text-center p-5 bg-danger-subtle">
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-center">
          <div class="p-3">
            <img
              src="logo-udinus.jpg"
              class="rounded-circle border shadow"
              width="300"
            />
          </div>
          <div class="p-md-5 text-sm-start">
            <h3 class="lead">A11.2020.13200</h3>
            <h1 class="fw-bold">Rio farizal Yuniananto</h1>
            Program Studi Teknik Informatika<br />
            <a
              href="https://dinus.ac.id/"
              class="fw-bold text-black text-decoration-none"
              >Universitas Dian Nuswantoro</a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- about me end -->
    <!-- footer begin -->
    <footer class="text-center p-5">
      <div>
        <a href="https://www.instagram.com/udinusofficial"
          ><i class="bi bi-instagram h2 p-2 text-dark"></i
        ></a>
        <a href="https://twitter.com/udinusofficial"
          ><i class="bi bi-twitter h2 p-2 text-dark"></i
        ></a>
        <a href="https://wa.me/+62812685577"
          ><i class="bi bi-whatsapp h2 p-2 text-dark"></i
        ></a>
      </div>
      <div>Rio Farizal Yuniananto &copy; 2025</div>
    </footer>
    <!-- footer end -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

    <script type="text/javascript">
      document.getElementById("dark").onclick = function () {
        // hero section
        document.getElementById("hero").classList.remove("bg-danger-subtle");
        document.getElementById("hero").style.backgroundColor = "#2C2C2C";
        document.getElementById("hero").style.color = "white";

        // artikel section
        document.getElementById("article").style.backgroundColor = "#2C2C2C";
        document.getElementById("article").style.color = "white";
        document.getElementById("kartu").style.backgroundColor =
          "LightSlateGray";
        document.getElementById("kartu").style.color = "white";
        document.getElementById("kartu1").style.backgroundColor =
          "LightSlateGray";
        document.getElementById("kartu1").style.color = "white";
        document.getElementById("kartu2").style.backgroundColor =
          "LightSlateGray";
        document.getElementById("kartu2").style.color = "white";
        document.getElementById("kartu3").style.backgroundColor =
          "LightSlateGray";
        document.getElementById("kartu3").style.color = "white";
        document.getElementById("kartu4").style.backgroundColor =
          "LightSlateGray";
        document.getElementById("kartu4").style.color = "white";

        // gallery section
        document.getElementById("gallery").classList.remove("bg-danger-subtle");
        document.getElementById("gallery").style.backgroundColor = "#2C2C2C";
        document.getElementById("gallery").style.color = "white";

        // sechedule
        document.getElementById("schedule").style.backgroundColor = "#2C2C2C";
        document.getElementById("schedule").style.color = "white";
        document.getElementById("tb1").classList.remove("bg-danger");
        document.getElementById("tb2").classList.remove("bg-danger");
        document.getElementById("tb3").classList.remove("bg-danger");
        document.getElementById("tb4").classList.remove("bg-danger");
        document.getElementById("tb5").classList.remove("bg-danger");
        document.getElementById("tb6").classList.remove("bg-danger");
        document.getElementById("tb1").style.backgroundColor = "LightSlateGray";
        document.getElementById("tb2").style.backgroundColor = "LightSlateGray";
        document.getElementById("tb3").style.backgroundColor = "LightSlateGray";
        document.getElementById("tb4").style.backgroundColor = "LightSlateGray";
        document.getElementById("tb5").style.backgroundColor = "LightSlateGray";
        document.getElementById("tb6").style.backgroundColor = "LightSlateGray";
      };

      // aboutme
      document.getElementById("aboutme").classList.remove("bg-danger-subtle");
      document.getElementById("aboutme").style.backgroundColor = "#2C2C2C";
      document.getElementById("aboutme").style.color = "white";

      // Footer
      document.querySelector("footer").classList.add("bg-secondary");

      document.getElementById("light").onclick = function () {
        // Revert changes made by dark mode

        // hero section
        document.getElementById("hero").classList.add("bg-danger-subtle");
        document.getElementById("hero").style.backgroundColor = "";
        document.getElementById("hero").style.color = "";

        // article section
        document.getElementById("article").style.backgroundColor = "";
        document.getElementById("article").style.color = "";
        document.getElementById("kartu").style.backgroundColor = "";
        document.getElementById("kartu").style.color = "";
        document.getElementById("kartu1").style.backgroundColor = "";
        document.getElementById("kartu1").style.color = "";
        document.getElementById("kartu2").style.backgroundColor = "";
        document.getElementById("kartu2").style.color = "";
        document.getElementById("kartu3").style.backgroundColor = "";
        document.getElementById("kartu3").style.color = "";
        document.getElementById("kartu4").style.backgroundColor = "";
        document.getElementById("kartu4").style.color = "";

        // gallery section
        document.getElementById("gallery").classList.add("bg-danger-subtle");
        document.getElementById("gallery").style.backgroundColor = "";
        document.getElementById("gallery").style.color = "";

        // schedule section
        document.getElementById("schedule").style.backgroundColor = "";
        document.getElementById("schedule").style.color = "";
        document.getElementById("tb1").classList.add("bg-danger");
        document.getElementById("tb2").classList.add("bg-danger");
        document.getElementById("tb3").classList.add("bg-danger");
        document.getElementById("tb4").classList.add("bg-danger");
        document.getElementById("tb5").classList.add("bg-danger");
        document.getElementById("tb6").classList.add("bg-danger");
        document.getElementById("tb1").style.backgroundColor = "";
        document.getElementById("tb2").style.backgroundColor = "";
        document.getElementById("tb3").style.backgroundColor = "";
        document.getElementById("tb4").style.backgroundColor = "";
        document.getElementById("tb5").style.backgroundColor = "";
        document.getElementById("tb6").style.backgroundColor = "";

        // aboutme section
        document.getElementById("aboutme").classList.add("bg-danger-subtle");
        document.getElementById("aboutme").style.backgroundColor = "";
        document.getElementById("aboutme").style.color = "";

        // Footer
        document.querySelector("footer").classList.remove("bg-secondary");
      };
    </script>
  </body>
</html>
