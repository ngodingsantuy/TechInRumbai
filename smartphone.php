<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="csss/bootstrap.css">

    <title>TechInRumbai</title>
  </head>
  <body>
    <?php include "koneksi.php"; ?>
<section id="Home" class="Home">
  <div class="container">   
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
      <div class="container">
      <img src="img/logo2.png" width="5%" class="rounded-circle">
      <a class="navbar-brand" href="index.php" >TechInRumbai</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">OperatingSystem</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="windows.php">Windwows</a>
              <a class="dropdown-item" href="machintos.php">Machintos</a>
              <a class="dropdown-item" href="linux.php">Linux</a>
            </div>
          </li>
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hardware</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="vga.php">VGA</a>
              <a class="dropdown-item" href="Processor.php">Processor</a>
              <a class="dropdown-item" href="komputergear.php">Komputer Gear</a>
            </div>
          </li>            
          <li class="nav-item active">
            <a class="nav-link" href="smartphone.php">SmartPhone</a>
          </li>                              
          <li class="nav-item active">
            <a class="nav-link" href="emoney.php">E-Money</a>
          </li>
          <form action="login.php" method="POST">
<button class="btn btn-primary" id="tombol" type="submit">Login</button>
          </form>
        </ul>  
      </div>
</nav>
</div>
</section>
<section >
  <div class="container"style="
    margin-top: 100px;">
    <div class="jumbotron jumbotron-fluid">
    <h1 class="display-4">smartphone</h1>
    <p class="lead">Berita seputar smartphone.</p>
</div>
  </div>
</section>
<?php        
    $i=0;
    $query=mysqli_query($db,"SELECT * FROM artikel where kategori='smartphone'");
    while ($m = mysqli_fetch_array($query)) 
    { ?>

    <?php
                    $i++;
                        ?>
<?php
$isi=substr($m['isi'],1,200);
  ?>
<div class="container">
<div class="card">
    <img src="img/<?php echo $m['gambar'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $m['judul']; ?></h5>
    <p class="card-text"><?php echo $isi; ?>......</p>
    <p class="card-text"><small class="text-muted"><?php echo $m['tanggal'] ?></small></p>
    <a href="tampilartikel.php?id=<?php print $m['id_artikel']?>" class="btn btn-primary">Lihat Selengkapnya</a>
  </div>
</div>
</div>
                    <?php } ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="jss/bootstrap.min.js"></script>
  </body>
</html>