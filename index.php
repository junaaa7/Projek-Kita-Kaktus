<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!---- font awesom --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!------fonts--->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <!-- css style ----->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <!----animation----->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!------favicon------>
    <link rel="shortcut icon" href="">
    <!---------------------------------------->
    <title>KITA KAKTUS</title>
    <style>
      /* Styling untuk modal deskripsi kategori */
      .modal-content {
        border-radius: 10px;
      }
      
      .modal-header {
        background-color: #f8f9fa;
        border-bottom: 2px solid #dee2e6;
      }
      
      .modal-title {
        color: #333;
        font-weight: bold;
      }
      
      .modal-body img {
        max-height: 300px;
        object-fit: contain;
      }
      
      .deskripsi-kategori {
        font-size: 1rem;
        line-height: 1.6;
        color: #555;
      }
      
      /* Efek hover pada card kategori */
      .card-kategori {
        cursor: pointer;
        transition: transform 0.2s;
      }
      
      .card-kategori:hover {
        transform: translateY(-3px);
      }
    </style>
  </head>
  <body>
    <!------ navbar------->
    <section class="nav-navbar fixed-top  bg-light">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">KITA KAKTUS</a>
        <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#about">about</a>
            <a class="nav-item nav-link" href="#produk">Product</a>
          </div>
        </div>
      </div>  
    </nav>
  </section>
    <!-------------endl navbar-------->
    <!------------crousel----------->
    <section id="home" class="awal">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="./assets/img/dasboard (1).jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./assets/img/dasboard (2).jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./assets/img/dasboard.jpeg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="col-md-6">
              <div class="row">
                <div class="col-lg-6">
                  <!-- Card Euphorbia - Bisa Diklik -->
                  <div class="card card-kategori" data-toggle="modal" data-target="#modalEuphorbia">
                    <div class="row">
                      <div class="col-md-8 col-9">
                        <div class="card-body">
                          Euphorbia
                        </div>
                      </div>
                      <div class="col-md-4 col-3">
                      <img src="./assets/img/kaktus(6).png" class="img-fluid" alt="Euphorbia">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <!-- Card Monacantha - Bisa Diklik -->
                  <div class="card card-kategori" data-toggle="modal" data-target="#modalMonacantha">
                    <div class="row">
                      <div class="col-md-8   col-9">
                        <div class="card-body">
                          Monacantha
                        </div>
                      </div>
                      <div class="col-md-4 col-3">
                      <img src="./assets/img/kaktus(1).png" class="img-fluid" alt="Monacantha">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <!-- Card Sukulen - Bisa Diklik -->
                  <div class="card card-kategori" data-toggle="modal" data-target="#modalSukulen">
                    <div class="row">
                      <div class="col-md-8 col-9">
                        <div class="card-body">
                          Sukulen
                        </div>
                      </div>
                      <div class="col-md-4 col-3">
                      <img src="./assets/img/kaktus(2).png" class="img-fluid" alt="Sukulen">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <!-- Card Mammillaria - Bisa Diklik -->
                  <div class="card card-kategori" data-toggle="modal" data-target="#modalMammillaria">
                    <div class="row">
                      <div class="col-md-8 col-9">
                        <div class="card-body">
                          Mammillaria
                        </div>
                      </div>
                      <div class="col-md-4 col-3">
                      <img src="./assets/img/kaktus(4).png" class="img-fluid" alt="Mammillaria">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!--------------about----------->
    <section id="about" class="about bg-white mt-5">
      <div class="container">
          <div class="row mb-4">
              <div class="col-lg-9 sec-2 mt-5">
                <h2>About us Cactus</h2>
                  <p>Kaktus adalah salah satu anggota famili Cactaceae yang sangat khas karena dapat hidup lama tanpa air. Habitat Kaktus ada di daerah gurun, padang rumput kering atau wilayah yang panas.
Kita Kaktus adalah brand tanaman hias yang berdiri sejak tahun 2024. Fokus pada pengembangan dan penjualan berbagai jenis Kaktus dan Sekulen yang berkualitas. Kami berkomitmen menghadirkan Koleksi Kaktus terbaik untuk pecinta tanaman di Indonesia. Kami menyediakan puluhan jenis kaktus mulai dari bibit, media tanam, pot, topping tanaman, … seluruh tanaman kami di rawat secara profesional … ditanam di media yang sehat dan dipilih dengan teliti sebelum dikirim ke customer. Untuk pengiriman bisa untuk keseluruhan Indonesia.<br></p>
              </div>
              <div class="col-lg-3">
                <img src="assets/icon/logo.jpg" alt="logo" class="img-fluid">
              </div>
          </div>
      </div>
    </section>
    
    <!------------- product ------------------->
    <section class="quote bg-white">
      <div class="container">
          <div class="row">
              <div class="col-md-12 text-center">
                <h1>Sharp look, gentle heart. Style as unique as a rare cactus.</h1>
                <p>Kita.Kaktus
                </p>
              </div>
          </div>
      </div>
    </section>
    
    <!------------- product ------------------->
    <section id="produk" class="produk mt-5 mb-5">
      <div class="container">
        <div class="row">
          <h2>Our Product</h2>
        </div>
        
        <?php
        require './db/koneksi.php';
        
        // Konfigurasi pagination
        $limit = 8; // Jumlah produk per halaman
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        if ($page < 1) $page = 1;
        
        $offset = ($page - 1) * $limit;
        
        // Hitung total data
        $result_total = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM produk");
        $total_data = mysqli_fetch_assoc($result_total)['total'];
        $total_halaman = ceil($total_data / $limit);
        
        // Jika halaman melebihi total, kembali ke halaman terakhir
        if ($page > $total_halaman && $total_halaman > 0) {
          $page = $total_halaman;
          $offset = ($page - 1) * $limit;
        }
        
        // Ambil data produk untuk halaman ini
        $sql = mysqli_query($koneksi, "SELECT * FROM produk LIMIT $limit OFFSET $offset");
        ?>
        
        <div class="row text-center">
          <?php if(mysqli_num_rows($sql) > 0): ?>
            <?php while ($data = mysqli_fetch_assoc($sql)): ?>
              <div class="col-md-6 col-lg-3 mt-3">
                <div class="card">
                  <img class="card-img-top" src="./assets/produk/<?php echo $data['gambar']; ?>" alt="<?php echo $data['gambar']; ?>">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $data['nama']; ?></h4>
                    <h6 class="pb-3"><?php echo $data['harga']; ?></h6>
                    <button class="btn btn-primary btn-block btn-custom" data-toggle="modal" data-target="#pesan<?php echo $data['id']; ?>">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i> Beli
                    </button>
                  </div>
                </div>
              </div>

              <!-- Modal Buat Pesanan untuk produk ini -->
              <div class="modal fade bd-example-modal-lg" id="pesan<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body pt-5 pb-5">
                      <form role="form" method="post" action="proses.php">
                        <!-- penting: kirim id & harga produk -->
                        <input type="hidden" name="id_produk" value="<?php echo $data['id']; ?>">
                        <input type="hidden" name="harga_satuan" value="<?php echo $data['harga']; ?>">

                        <h2 class="mb-4">Buat Pesanan</h2>
                        <div role="form" class="form-row">
                          <div class="form-group col-md-6">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="barang" value="<?php echo $data['nama']; ?>" readonly>
                          </div>
                          <div class="form-group col-md-6">
                            <label>Whatsapp Penjual</label>
                            <input type="text" class="form-control" name="wa" value="<?php echo $data['wa']; ?>" readonly>
                          </div>
                        </div>

                        <label>Pesanan :</label>
                        <div role="form" class="form-row">  
                          <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="pembeli" placeholder="Name" required>
                          </div>
                          <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name="alamat" placeholder="alamat" required>
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" name="pesan" style="white-space: pre-line;" placeholder="pesan untuk penjual ..." rows="2" required></textarea>
                        </div>

                        <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                      </form>                    
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php else: ?>
            <div class="col-12">
              <p class="text-muted">Produk tidak tersedia.</p>
            </div>
          <?php endif; ?>
        </div>
        
        <!-- Pagination -->
        <?php if($total_halaman > 1): ?>
          <div class="row mt-5">
            <div class="col-12">
              <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                  <!-- Previous Button -->
                  <?php if($page > 1): ?>
                    <li class="page-item">
                      <a class="page-link" href="?page=<?php echo $page-1; ?>#produk" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                  <?php else: ?>
                    <li class="page-item disabled">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                  <?php endif; ?>
                  
                  <!-- Page Numbers -->
                  <?php 
                  $start_page = max(1, $page - 2);
                  $end_page = min($total_halaman, $start_page + 4);
                  $start_page = max(1, $end_page - 4);
                  
                  for($i = $start_page; $i <= $end_page; $i++): 
                  ?>
                    <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                      <a class="page-link" href="?page=<?php echo $i; ?>#produk"><?php echo $i; ?></a>
                    </li>
                  <?php endfor; ?>
                  
                  <!-- Next Button -->
                  <?php if($page < $total_halaman): ?>
                    <li class="page-item">
                      <a class="page-link" href="?page=<?php echo $page+1; ?>#produk" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  <?php else: ?>
                    <li class="page-item disabled">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  <?php endif; ?>
                </ul>
              </nav>
              <p class="text-center text-muted mt-2">
                Menampilkan <?php echo ($total_data > 0) ? ($offset + 1) : 0; ?> - 
                <?php echo min($offset + $limit, $total_data); ?> dari <?php echo $total_data; ?> produk
                (Halaman <?php echo $page; ?> dari <?php echo $total_halaman; ?>)
              </p>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </section>

    <!------------- brand ------------------->
    <section class="brand mt-5 bg-custom">
      <div class="container">
        <div class="row text-center pb-5 pt-2">
          <div class="col-6 col-lg-3 mt-3">
            <div class="card">
              <div class="card-body text-center">
                <a href="https://www.tiktok.com/@kitakaktus" target="_blank">
                  <img src="./assets/icon/tiktok.png" width="80px" class="img-fluid" alt="TikTok Logo">
                </a>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 mt-3">
            <div class="card">
              <div class="card-body">
                <a href="https://shopee.co.id/kita_kaktus" target="_blank">
                  <img src="./assets/icon/shopee.png" width="80px" class="img-fluid" alt="Shopee Logo">
                </a>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 mt-3">
            <div class="card">
              <div class="card-body">
                <a href="https://wa.me/6287871797367" target="_blank">
                  <img src="./assets/icon/whatsapp.png" width="80px" class="img-fluid" alt="Whatsapp Logo">
                </a>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 mt-3">
            <div class="card">
              <div class="card-body">
                <a href="https://maps.app.goo.gl/JoJiboW7GciMEWcs5" target="_blank">
                  <img src="./assets/icon/rumah.png" width="80px" class="img-fluid" alt="Maps Logo">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!------------- footer ------------------->
    <div class="footer bg-custom">  
      <div class="card-footer text-white text-center ">
        <div class="container">
          <div class="row"> 
            <div class="col-sm-12 pt-3 pb-3">
              <span>&copy; 2025. KITA KAKTUS.</span>
            </div>
          </div>
        </div>
      </div>     
    </div>      
    <!------------- end footer ------------------->

    <!-- ============================================ -->
    <!-- MODAL UNTUK DESKRIPSI KATEGORI TANAMAN -->
    <!-- ============================================ -->

    <!-- Modal Euphorbia -->
    <div class="modal fade" id="modalEuphorbia" tabindex="-1" role="dialog" aria-labelledby="modalEuphorbiaLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalEuphorbiaLabel">Euphorbia</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img src="./assets/img/kaktus(6).png" class="img-fluid" alt="Euphorbia">
              </div>
              <div class="col-md-6">
                <h4>Euphorbia</h4>
                <div class="deskripsi-kategori">
                  <p><strong>Euphorbia</strong> adalah genus tanaman yang sangat besar dan beragam dalam famili Euphorbiaceae. Banyak spesies Euphorbia yang menyerupai kaktus, meskipun sebenarnya tidak terkait.</p>
                  
                  <p><strong>Ciri-ciri:</strong></p>
                  <ul>
                    <li>Memiliki getah berwarna putih seperti susu</li>
                    <li>Batang berdaging untuk menyimpan air</li>
                    <li>Duri-duri yang sebenarnya adalah daun termodifikasi</li>
                    <li>Bunga kecil berwarna-warni</li>
                  </ul>
                  
                  <p><strong>Perawatan:</strong></p>
                  <ul>
                    <li>Membutuhkan sinar matahari penuh</li>
                    <li>Penyiraman secukupnya (biarkan tanah kering antara penyiraman)</li>
                    <li>Media tanam porous dengan drainase baik</li>
                    <li>Tahan terhadap kondisi kering</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Monacantha -->
    <div class="modal fade" id="modalMonacantha" tabindex="-1" role="dialog" aria-labelledby="modalMonacanthaLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalMonacanthaLabel">Monacantha</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img src="./assets/img/kaktus(1).png" class="img-fluid" alt="Monacantha">
              </div>
              <div class="col-md-6">
                <h4>Monacantha</h4>
                <div class="deskripsi-kategori">
                  <p><strong>Monacantha</strong> adalah salah satu jenis kaktus yang termasuk dalam genus Opuntia. Tanaman ini dikenal dengan sebutan "Prickly Pear" atau "Nopal".</p>
                  
                  <p><strong>Ciri-ciri:</strong></p>
                  <ul>
                    <li>Memiliki batang berbentuk pipih (cladode)</li>
                    <li>Duri-duri halus yang disebut glochids</li>
                    <li>Buah yang dapat dimakan berwarna merah atau ungu</li>
                    <li>Bunga berwarna kuning atau merah muda</li>
                  </ul>
                  
                  <p><strong>Perawatan:</strong></p>
                  <ul>
                    <li>Sinar matahari langsung minimal 6 jam sehari</li>
                    <li>Penyiraman hanya ketika tanah benar-benar kering</li>
                    <li>Toleran terhadap berbagai jenis tanah</li>
                    <li>Dapat bertahan di suhu dingin hingga -10°C</li>
                  </ul>
                  
                  <p><strong>Manfaat:</strong></p>
                  <ul>
                    <li>Buahnya kaya antioksidan dan vitamin C</li>
                    <li>Digunakan dalam pengobatan tradisional</li>
                    <li>Sebagai tanaman hias dan pagar alami</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Sukulen -->
    <div class="modal fade" id="modalSukulen" tabindex="-1" role="dialog" aria-labelledby="modalSukulenLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalSukulenLabel">Sukulen</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img src="./assets/img/kaktus(2).png" class="img-fluid" alt="Sukulen">
              </div>
              <div class="col-md-6">
                <h4>Sukulen</h4>
                <div class="deskripsi-kategori">
                  <p><strong>Sukulen</strong> adalah tanaman yang memiliki jaringan tebal dan berdaging untuk menyimpan air. Istilah "sukulen" berasal dari kata Latin "sucus" yang berarti jus atau getah.</p>
                  
                  <p><strong>Ciri-ciri:</strong></p>
                  <ul>
                    <li>Daun atau batang yang tebal dan berdaging</li>
                    <li>Kemampuan menyimpan air dalam jangka panjang</li>
                    <li>Bentuk yang beragam dan unik</li>
                    <li>Warna daun bervariasi dari hijau, merah, ungu, hingga abu-abu</li>
                  </ul>
                  
                  <p><strong>Jenis-jenis Sukulen Populer:</strong></p>
                  <ul>
                    <li>Echeveria - Roset yang indah</li>
                    <li>Crassula - Termasuk Jade Plant</li>
                    <li>Sedum - Tumbuh merambat atau tegak</li>
                    <li>Haworthia - Sukulen kecil dengan pola unik</li>
                    <li>Aloe - Termasuk lidah buaya</li>
                  </ul>
                  
                  <p><strong>Perawatan:</strong></p>
                  <ul>
                    <li>Cahaya terang tapi tidak langsung</li>
                    <li>Penyiraman dalam-dalam tapi jarang</li>
                    <li>Media tanam khusus sukulen dengan drainase baik</li>
                    <li>Perhatikan sirkulasi udara</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Mammillaria -->
    <div class="modal fade" id="modalMammillaria" tabindex="-1" role="dialog" aria-labelledby="modalMammillariaLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalMammillariaLabel">Mammillaria</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img src="./assets/img/kaktus(4).png" class="img-fluid" alt="Mammillaria">
              </div>
              <div class="col-md-6">
                <h4>Mammillaria</h4>
                <div class="deskripsi-kategori">
                  <p><strong>Mammillaria</strong> adalah genus kaktus terbesar dengan lebih dari 200 spesies. Nama "Mammillaria" berasal dari bahasa Latin "mammilla" yang berarti puting, merujuk pada tuberkelnya yang berbentuk seperti puting.</p>
                  
                  <p><strong>Ciri-ciri:</strong></p>
                  <ul>
                    <li>Tubuh berbentuk bulat atau silindris</li>
                    <li>Memiliki tuberkel (tonjolan) yang tersusun spiral</li>
                    <li>Areola terbagi menjadi dua bagian</li>
                    <li>Bunga muncul dari axil tuberkel (bukan dari areola)</li>
                    <li>Bunga berbentuk lingkaran (corona) di sekitar puncak tanaman</li>
                  </ul>
                  
                  <p><strong>Jenis-jenis Populer:</strong></p>
                  <ul>
                    <li>Mammillaria elongata - "Ladyfinger Cactus"</li>
                    <li>Mammillaria hahniana - "Old Lady Cactus"</li>
                    <li>Mammillaria plumosa - "Feather Cactus"</li>
                    <li>Mammillaria bombycina - "Silken Pincushion"</li>
                    <li>Mammillaria zeilmanniana - "Rose Pincushion"</li>
                  </ul>
                  
                  <p><strong>Perawatan:</strong></p>
                  <ul>
                    <li>Sinar matahari penuh hingga parsial</li>
                    <li>Penyiraman moderat selama musim tanam</li>
                    <li>Media sangat porous dengan banyak pasir dan perlite</li>
                    <li>Perlindungan dari embun beku</li>
                    <li>Pemupukan ringan di musim semi dan musim panas</li>
                  </ul>
                  
                  <p><strong>Keunikan:</strong></p>
                  <p>Mammillaria dikenal sebagai "kaktus bantal" karena bentuknya yang bulat dan padat. Bunganya yang melingkar di puncak tanaman memberikan tampilan seperti mahkota.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/costum.js"></script>

<script>
  // Script untuk menambahkan efek hover pada card kategori
  $(document).ready(function() {
    // Tambahkan class cursor pointer pada card kategori
    $('.card-kategori').css('cursor', 'pointer');
    
    // Efek hover sederhana
    $('.card-kategori').hover(
      function() {
        $(this).css('box-shadow', '0 4px 8px rgba(0,0,0,0.1)');
      },
      function() {
        $(this).css('box-shadow', 'none');
      }
    );
  });
</script>

  </body>
</html>