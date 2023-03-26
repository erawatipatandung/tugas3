<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?i=tt3896198&apikey=72830a9f&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container-new" style="background-image:url('foto 9.jpg');">
<div class="container">
<div class="row mt-3 text-center text-white">
  <div class="col">
<h1>Cartoon film</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="boboiboy.jpg." class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title text-danger">Boboiboy</h5>
        <p class="card-text">boboiboy adalah sebuah seri animasi Malaysia yang diproduksi oleh Animonsta Studios. Seri animasi ini menceritakan tentang seorang anak yang memiliki kekuatan luar biasa untuk melawan makhluk asing yang ingin menyerang bumi.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="marsha.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title text-danger">Marsha and The Bear</h5>
        <p class="card-text">marsha dan si beruang adalah serial televisi animasi Rusia yang oleh Oleg Kuzovkov Studio.Serial ini menceritakan tentang sebuah petualangan di antara gadis kecil bernama marsha dan sahabatnya terbaiknya yaitu Bear .</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="foto 9.jpg" class="card-img-top" height="350px">
      <div class="card-body">
        <h5 class="card-title text-danger">Doraemon</h5>
        <p class="card-text ">doraemon adalah judul sebuah manga dan anime yang sangat populer yang dikarang Fujiko sejak desember 1969 dan berkisa tentang kehidupan seorang anak pemalas kelas 5 sekolah dasar yang bernama Nobita Nobi yang di datangi oleh sebuah robot kucing doraemon yang datang dari abad ke-22.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="prozen.jpg" class="card-img-top" height="390px">
      <div class="card-body">
        <h5 class="card-title text-danger">Frozen</h5>
        <p class="card-text">frozen adalah filem fantasi musikal animasi komputer 3D Amerika 2013 yang diproduksi oleh Walt Disney Animation Studios.filem ini menceritakan tentang seorang princess yang memiliki kekuatan untuk menciptakan dan mengontrol es, dan adiknya yang tidak memiliki kekuatan apa-apa tapi berhati hangat yang bisa meluluhkan es di hati kakaknya.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="upin&ipin.jpg" class="card-img-top" height="450px">
      <div class="card-body">
        <h5 class="card-title text-danger">Upin dan Ipin</h5>
        <p class="card-text">upin dan ipin keris siamang tunggal merupakan filem animasi pengembaraan Malaysia 2019. filem ini menceritakan kisah si kembar dan kawannya di kerajaan Inderaloka dimana mereka dan watak serita dongeng perlu pertahankan kerajaan ini pada raja jahat yang ingin memusnahkannya.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="naruto1.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title text-danger">Naruto</h5>
        <p class="card-text">naruto adalah sebuah serial manga karya Masashi Kishimoto yang diadaptasi menjadi serial anime. Manga naruto bercerita seputar kehidupan tokoh utamanya,Naruto,Uzumaki,seorang ninja yang hiperaktif,periang,dan ambisius yang ingin mewujudkan keinginannya untuk mendapatkan gelar.</p>
      </div>
    </div>
  </div>
      </div>
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
