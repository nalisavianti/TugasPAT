<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Kasir</title>
  </head>
  <body >
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid" >
    <a class="navbar-brand" href="kasir.php" style="color:white;">Administrator</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;">
            Transaksi
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="?menu=penjualan">Penjualan</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color:white;">
            Laporan
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="?menu=cetak_faktur">Cetak Faktur</a></li>
            <li><a class="dropdown-item" href="?menu=semua_penjualan">Semua Penjualan</a></li>
            <li><a class="dropdown-item" href="?menu=penjualan_pertanggal">Penjualan Pertanggal</a></li>
          </ul>
        </li>
    </ul>
      <form class="d-flex">
        <ul class="nav navbar-expand-lg justify-content-end ">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;">
                    Kasir
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="?menu=ubah_pass">Ubah Password</a></li>
                </ul>
            </li>
            <li class="nav-right">
                <a class="nav-link" aria-current="page" href="login.php" style="color:white;" onclick="return confirm('Anda Yakin Ingin Keluar?')">Logout</a>
            </li>
        </ul>
      </form>
    </div>
  </div>
  </nav>
  <aside>
      <div class="box" >
          <img src="img/buku.jpg" height="250px" width="250px">
          <div style="text-align:center;">
            <h2>Toko Buku Aja</h2>
            Jln.Lodaya Gunung Geulis City Euy
          </div>
      </div>
  </aside>
<br>
<?php 
    switch(@$_GET['menu']){
        case 'penjualan';
        include 'penjualan.php';
        break;

        case 'cetak_faktur';
        include 'cetak_faktur.php';
        break;

        case 'semua_penjualan';
        include 'semua_penjualan.php';
        break;

        case 'penjualan_pertanggal';
        include 'penjualan_pertanggal.php';
        break;

        case 'ubah_pass';
        include 'ubah_pass.php';
        break;

        break;
    }
?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#data').DataTable();
        } );
    </script>
    
  </body>
</html>