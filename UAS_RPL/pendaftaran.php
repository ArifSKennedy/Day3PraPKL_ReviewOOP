<?php
class Pendaftaran extends Database{

// menampilkan data pendaftaran ke index.php
public function index()
{
    $datapendaftaran = mysqli_query($this->koneksi, "select pendaftaran.id, pendaftaran.kode_pendaftaran, pendaftaran.nama, pendaftaran.tanggal_lahir, pendaftaran.tempat_lahir, pendaftaran.jenis_kelamin, pendaftaran.agama,
     jurusan.jurusan FROM jurusan JOIN pendaftaran ON jurusan.id = pendaftaran.id_jurusan ");
    
    return $datapendaftaran;
}

public function create($kode_pendaftaran,$nama,$tanggal_lahir,$tempat_lahir,$jenis_kelamin,$agama,$id_jurusan){
     mysqli_query($this->koneksi, 
     "insert into pendaftaran values (null,'$kode_pendaftaran','$nama','$tanggal_lahir','$tempat_lahir','$jenis_kelamin','$agama','$id_jurusan')");
}

// memilih data pendaftaran yang akan diubah
public function edit($id){
     $datapendaftaran = mysqli_query($this->koneksi, "select pendaftaran.id, pendaftaran.kode_pendaftaran, pendaftaran.nama, pendaftaran.tanggal_lahir, pendaftaran.tempat_lahir, pendaftaran.jenis_kelamin, pendaftaran.agama,
     jurusan.jurusan FROM jurusan JOIN pendaftaran ON jurusan.id = pendaftaran.id_jurusan where pendaftaran.id='$id'");
    return $datapendaftaran;
}
// merubah data pendaftaran

public function update($id,$kode_pendaftaran,$nama,$tanggal_lahir,$tempat_lahir,$jenis_kelamin,$agama,$id_jurusan){
    mysqli_query($this->koneksi,
     "update pendaftaran set kode_pendaftaran='$kode_pendaftaran',nama='$nama',tanggal_lahir='$tanggal_lahir',
     tempat_lahir='$tempat_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama',id_jurusan='$id_jurusan' where id='$id'");
}

// menampilkan data pendaftaran berdasarkan id
public function show($id){
     $datapendaftaran = mysqli_query($this->koneksi, "select pendaftaran.id, pendaftaran.kode_pendaftaran, pendaftaran.nama, pendaftaran.tanggal_lahir, pendaftaran.tempat_lahir, pendaftaran.jenis_kelamin, pendaftaran.agama,
     jurusan.jurusan FROM jurusan JOIN pendaftaran ON jurusan.id = pendaftaran.id_jurusan where pendaftaran.id='$id'");
    return $datapendaftaran;
}

// menghapus data pendaftaran
public function delete($id){
     mysqli_query($this->koneksi, "delete from pendaftaran where id=$id");
}
}

?>