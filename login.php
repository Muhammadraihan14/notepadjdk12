<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- aos -->

     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- bosstrap -->

    <style type="text/css">




       
.box-login {
    margin: 200px auto;
    width: 400px;
    padding: 10px;
    border:1px solid #ccc;
    border-radius: 10px;
    background: white;
}

.container {
    margin-top: -150px;
}

/*.box-image {
    margin: 200px auto;
    width: 400px;
    padding: 10px;

}*/




    </style>

	<title>Login User | Portal SMANSAKA</title>
</head>
<body>
    <main>
    <div class="container">
       <!--  <div class="box-image">
            <img src="gambar/login.png" class="img-fluid" alt="image">
            
        </div> -->
        <div class="box-login shadow-lg">
        <img src="gambar/login_user.svg" class="img-fluid" alt="image">
        <form action="" method="">
             <input type="email" class="form-control " placeholder="Email atau Nomor Telepon">
            <input type="password" class="form-control mt-2" placeholder="Kata Sandi">
        </form>
        <div class="d-grid gap-2">
        <a href="reg.php" target="_blank" class="btn btn-outline-primary mt-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
        </svg>
        Masuk</a>
        </div>
        <hr>
        <div class="d-grid gap-2">
        <a href="tambah_akun.php" target="_blank" class="btn btn-outline-success mt-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
        </svg>
        Buat Akun Baru</a>
        </div>
        </div>
    </div>
</main>

<footer>

    <!-- footer -->
  <section id="Contact">

  <div class="container-fluid mt-5">
    <div class="container">
      
      <div class="row align-items-center">
        <div class="col-4">
          <img src="gambar/Landak.png" class="img-fluid">
        </div>  
    

     
        <div class="col-3 footer-contact">
        
           <h3 class="h3" >Hubungi kami</h3>
          <p class="text-sm">Jalan Raya Karangan <br>
          Desa Karangan <br>
          Kabupaten Landak <br>
          Contact Center 0-8969-1819-664 <br>
          Malayani mulai <br>
          Jam 08.00 s/d 15.00 WIB

          </p>
        </div>

        <div class="col-4 footer-newsletter">
          <h3 class="h3">Peta Sekolah</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.635656437928!2d109.37373141437394!3d0.5482631996000089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e2d8204925eea3%3A0x4bc0d9af925ab756!2sSMA%20NEGERI%201%20MEMPAWAH%20HULU!5e0!3m2!1sid!2sid!4v1620909503906!5m2!1sid!2sid" width="300" height="150" style="border:0;" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  </section>
    <!-- end footer -->
    
</footer>


<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>

<script>
gsap.from('.box-login', {duration: 1, y: -100, opacity: 0, ease:'bounce'});
</script>
<!-- end GSAP -->

   
	
</body>
</html>