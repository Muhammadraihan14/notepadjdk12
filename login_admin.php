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

    



    </style>

	<title>Login Admin | Portal SMANSAKA</title>
</head>
<body>
    <div class="container">
        <div class="box-login shadow-lg">
        <form action="" method="">
            <input type="email" class="form-control " placeholder="Email atau Nomor Telepon">
            <input type="password" class="form-control mt-2" placeholder="Kata Sandi">
        </form>
        <div class="d-grid gap-2">
        <a href="" target="_blank" class="btn btn-outline-primary mt-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
        </svg>
        Masuk</a>
        </div>
        </div>
    </div>



<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>

<script>
gsap.from('.box-login', {duration: 1, y: -100, opacity: 0, ease:'bounce'});
</script>
<!-- end GSAP -->
   
	
</body>
</html>