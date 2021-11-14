<?php
session_start();
require 'koneksi.php';
$mahasiswa = query("SELECT * FROM mahasiswaa ORDER BY nim asc");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="cover.css">

    <title>CRUD</title>
</head>

<body>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">

    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-200 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Universitas Sidu</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="indexadmin.php">Home</a>
        <a class="nav-link" href="dataadmin.php">Data Mahasiswa</a>
        <a class="nav-link" href="#">About</a>
        <a class="nav-link" href="logout.php">Logout</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
    <br><br><br>
    <h1>Welcome.</h1>
    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora cupiditate fugiat minus aperiam neque perspiciatis fuga tenetur doloremque porro repellendus? Voluptatem sunt asperiores fuga? Animi eveniet assumenda sit ducimus. Doloremque.</p>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias consectetur beatae adipisci et reiciendis nisi nesciunt veniam ipsum, culpa dolore repellendus suscipit optio, animi quia natus accusantium ratione ea hic.</p>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus reiciendis eius porro! Officia, sed distinctio at ad excepturi nihil cumque repudiandae illo totam ut, mollitia natus architecto atque qui magnam!</p>  
    <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
  </main>

  <footer class="mt-auto text-white-50">
    <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
  </footer>
</div>


    
  </body>

</html>