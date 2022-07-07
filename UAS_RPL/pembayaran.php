<?php

class pembayaran extends database{
    //menampilkan data pembayaran ke index.php
    public function index(){
        $datapembayaran = mysqli_query($this->koneksi, "SELECT pembayaran.id,pembayaran.kode_pembayaran,pendaftaran.nama,pembayaran.tanggal_pembayaran, pembayaran.uang_pendaftaran,pembayaran.uang_seragam, pembayaran.uang_kegiatan,pembayaran.total_pembayaran,pembayaran.id_pendaftaran FROM pendaftaran JOIN pembayaran ON pendaftaran.id = pembayaran.id_pendaftaran ;");

        return $datapembayaran;
    }
    public function create($kode_pembayaran,$tanggal_pembayaran,$uang_pendaftaran,$uang_seragam,$uang_kegiatan,$total_pembayaran,$id_pendaftaran){
        mysqli_query($this->koneksi,"
        insert into pembayaran values (null,'$kode_pembayaran','$tanggal_pembayaran','$uang_pendaftaran','$uang_seragam','$uang_kegiatan','$total_pembayaran','$id_pendaftaran')
        ");
    }

    //memilih data pembayaran yang akan di ubah
    public function edit($id){
        $datapembayaran = mysqli_query($this->koneksi,"select * from pembayaran where id='$id' ");

        return $datapembayaran;
    }

    //merubah data pembayaran
    public function update($id,$kode_pembayaran,$tanggal_pembayaran,$uang_pendaftaran,$uang_seragam,$uang_kegiatan,$total_pembayaran,$id_pendaftaran){
        mysqli_query($this->koneksi,"update pembayaran set kode_pembayaran='$kode_pembayaran',tanggal_pembayaran='$tanggal_pembayaran',uang_pendaftaran='$uang_pendaftaran',uang_seragam='$uang_seragam',uang_kegiatan='$uang_kegiatan',total_pembayaran='$total_pembayaran',id_pendaftaran='$id_pendaftaran'where pembayaran.id='$id'");
    }

    //menampilkan data berdasarkan id
    public function show($id){
        $datapembayaran = mysqli_query($this->koneksi,"SELECT pembayaran.id,pembayaran.kode_pembayaran,pendaftaran.nama,pembayaran.tanggal_pembayaran, pembayaran.uang_pendaftaran,pembayaran.uang_seragam, pembayaran.uang_kegiatan,pembayaran.total_pembayaran,pembayaran.id_pendaftaran FROM pendaftaran JOIN pembayaran ON pendaftaran.id = pembayaran.id_pendaftaran  where pembayaran.id='$id'");

        return $datapembayaran;
    }

    //menghapus data pembayaran
    public function delete($id){
        mysqli_query($this->koneksi,"delete from pembayaran where id='$id'");
    }
}




?>