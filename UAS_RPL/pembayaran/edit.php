<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Navbar</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>
            <center><h2>DATA DARI PENDAFTARAN</h2></center>
        <!-- CARDs -->
        <div class="container">
        <div class="card">
            <div class="card-header">
                Edit Data Pendaftaran
            </div>
            <div class="card-body">

            <?php
                include '../database.php';
                $bayar = new pembayaran();
                foreach ($bayar->edit($_GET['id']) as $data) {

                    $id               = $data['id'];
                    $kode_pembayaran = $data['kode_pembayaran'];
                    $id_pendaftaran            = $data['id_pendaftaran'];
                    $tanggal_pembayaran    = $data['tanggal_pembayaran'];
                    $uang_pendaftaran     = $data['uang_pendaftaran'];
                    $uang_seragam    = $data['uang_seragam'];
                    $uang_kegiatan            = $data['uang_kegiatan'];

                }
            ?>
            
            <form action="../pembayaran/proses.php" method="post">
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <div class="form-group">
                        <label for="exampleInputEmail1">KODE PEMBAYARAN</label> 
                        <input type="text" class="form-control" name="kode_pembayaran" value="<?php echo $kode_pembayaran; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NAMA</label>
                        <select name ="id_pendaftaran" class="form-control" value="<?php echo $nama; ?>">
                        <?php
                            $daftar =  new pendaftaran();
                            $no = 1;
                            foreach ($daftar->index() as $data){
                        ?>
                            <option value="<?php echo $data['id'] ?> "> <?php echo $data['nama'] ?></option>
                            <?php } ?>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">TANGGAL PEMBAYARAN</label> 
                        <input type="date" class="form-control" name="tanggal_pembayaran" value="<?php echo $tanggal_pembayaran; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">UANG PENDAFTARAN</label> 
                        <input type="text" class="form-control" name="uang_pendaftaran" value="<?php echo $uang_pendaftaran; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">UANG SERAGAM</label> 
                        <input type="text" class="form-control" name="uang_seragam" value="<?php echo $uang_seragam; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">UANG KEGIATAN</label> 
                        <input type="text" class="form-control" name="uang_kegiatan" value="<?php echo $uang_kegiatan; ?>">
                    </div>
                    <button type="submit" name="save" class="btn btn-info">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>