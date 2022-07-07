<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
      
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <nav class="navbar bg-light">
                <div class="container">
                  <a class="navbar-brand" href="#">
                    <img src="" alt="" width="70" height="54">
                  </a>
                </div>
              </nav>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="../home.html">Beranda</a>
              <a class="nav-link" href="">Jurusan</a>
              <a class="nav-link" href="">Pendaftaran</a>
              <a class="nav-link" href="">Pembayaran</a>
            </div>
          </div>
        </div>
      </nav>
            <br><center><h2>Tampilkan Data Pembayaran</h2></center><br>
        <!-- CARDs -->
        <div class="container">
        <div class="card">
            <div class="card-header bg-primary">
                Data Dosen
            </div>
            <div class="card-body">
            <?php
                include '../database.php';
                $pembayaran = new Pembayaran();
                foreach ($pembayaran->show($_GET['id']) as $data) {
                    $kode_pembayaran = $data['kode_pembayaran'];
                    $id_pendaftaran = $data ['id_pendaftaran'];
                    $tanggal_pembayaran = $data ['tanggal_pembayaran'];
                    $uang_pendaftaran = $data ['uang_pendaftaran'];
                    $uang_seragam = $data ['uang_seragam'];
                    $uang_kegiatan = $data ['uang_kegiatan'];
                    $total_pembayaran = $data ['total_pembayaran'];
                    $nama = $data ['nama'];
                }
    ?>
                        <form action="../Pembayaran/proses.php" method="post">
                <input type="hidden" name="aksi" value="show">
                <input type="hidden" name="id" value="<?php echo $id; ?>" disabled>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Pembayaran</label> 
                        <input type="text" class="form-control" name="kode_pembayaran" value="<?php echo $kode_pembayaran; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="id_pendaftaran" value="<?php echo $nama; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal pembayaran</label> 
                        <input type="text" class="form-control" name="tanggal_pembayaran" value="<?php echo $tanggal_pembayaran; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Uang Pendaftaran</label>
                        <input type="text" class="form-control" name="uang_pendaftaran" value="<?php echo $uang_pendaftaran; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Uang Seragam</label>
                        <input type="text" class="form-control" name="uang_seragam" value="<?php echo $uang_seragam; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Uang kegiatan</label>
                        <input type="text" class="form-control" name="uang_kegiatan" value="<?php echo $uang_kegiatan; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Total Pembayaran</label>
                        <input type="text" class="form-control" name="total_pembayaran" value="<?php echo $total_pembayaran; ?>" disabled>
                    </div>
            </form>
            

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