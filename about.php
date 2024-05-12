<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Tentang BeliCeria?</h3>
         <p>BeliCeria merupakan e-commerce yang menjual barang-barang elektronik berbasis online, yang memungkinkan setiap orang di Indonesia
            dapat berbelanja barang-barang elektronik secara daring, sekaligus memberikan sebuah pengalaman jual beli online yang aman dan nyaman.
         </p>
         <a href="contact.php" class="btn">Hubungi Kami</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Review Pelanggan</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.png" alt="">
         <p>Produk ini benar-benar luar biasa! Kualitasnya sangat tinggi, dan saya sangat puas dengan performanya.
            Harganya sangat terjangkau dan pengiriman sangat cepat. Saya pasti akan merekomendasikan produk ini kepada teman-teman saya.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>  John Doe</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.png" alt="">
         <p>Baru-baru ini saya berbelanja di toko online ini dan saya sangat senang dengan pengalaman saya. Situs webnya sangat mudah dinavigasi, saya menemukan produk yang saya cari dengan cepat. Pengiriman juga sangat cepat dan produk tiba dalam kondisi yang sempurna.
            Harga produknya sangat kompetitif, dan saya merasa mendapatkan nilai yang bagus. Saya pasti akan berbelanja di sini lagi.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Jane Smith</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.png" alt="">
         <p>Saya berharap pengiriman bisa lebih cepat. Saya memesan produk ini hampir dua minggu yang lalu, dan masih belum menerimanya.
            Selain itu, ada beberapa masalah dengan situs web yang membuat saya kesulitan saat berbelanja. Saya harap toko online ini bisa memperbaiki masalah ini.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Mark Johnson</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <p>Saya memesan produk X dari toko online ini, dan saya sangat senang dengan kualitasnya. Produk ini sangat cocok dengan deskripsi dan gambar yang ditampilkan di situs web.
            Harganya juga terjangkau. Saya akan merekomendasikan produk ini kepada teman-teman saya.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Karina</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
         <p>Saya sudah berbelanja di toko online ini selama beberapa tahun, dan saya selalu puas dengan pengalaman berbelanja saya. Mereka memiliki beragam produk yang bagus, dan pengiriman selalu tepat waktu. 
            Harga-harga yang mereka tawarkan juga sangat bersaing. Ini adalah tempat yang baik untuk berbelanja online.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Shaikh</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.png" alt="">
         <p>Saya sangat senang berbelanja di toko online ini.
            Proses pesanannya sangat mudah, pengiriman cepat, dan produknya sesuai dengan deskripsi. Saya pasti akan berbelanja di sini lagi.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nina</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>