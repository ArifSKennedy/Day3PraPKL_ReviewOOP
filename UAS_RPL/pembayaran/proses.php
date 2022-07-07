<?php
        include '../database.php';
        $bayar = new pembayaran();

        if(isset($_POST['save'])){

            $aksi                   = $_POST['aksi'];
            $id                     = @$_POST['id'];
            $kode_pembayaran        = $_POST['kode_pembayaran'];
            $id_pendaftaran         = $_POST['id_pendaftaran'];
            // $nama                   = $_POST['nama'];
            $tanggal_pembayaran     = $_POST['tanggal_pembayaran'];
            $uang_pendaftaran       = $_POST['uang_pendaftaran'];
            $uang_seragam           = $_POST['uang_seragam'];
            $uang_kegiatan          = $_POST['uang_kegiatan'];
            $total_pembayaran = $uang_pendaftaran + $uang_seragam + $uang_kegiatan;

                if ($aksi == "create")
                {
                    $bayar->create(
                        $kode_pembayaran,$tanggal_pembayaran,$uang_pendaftaran,$uang_seragam,$uang_kegiatan,$total_pembayaran,$id_pendaftaran);
                    header("location:index.php");
                }

                else if ($aksi == "update") 
                {
                    $bayar->update(
                        $id,$kode_pembayaran,$tanggal_pembayaran,$uang_pendaftaran,$uang_seragam,$uang_kegiatan,$total_pembayaran,$id_pendaftaran);
                    header("location:index.php");
                }

                else if ($aksi == "delete")
                {
                    $bayar->delete($id);
                    header("location:index.php");
                }
        }

?>