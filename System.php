<?php

class System
{
    // DEV
    // private $server = "localhost";
    // private $database = "undangan";
    // private $username = "root";
    // private $password = "";

    // PROD
    private $server = "localhost";
    private $database = "zurpgcnv_undanganPernikahan";
    private $username = "zurpgcnv_admin";
    private $password = "KvLp,x[kDq#@";

    

    public function koneksi()
    {
        $koneksi = mysqli_connect($this->server, $this->username, $this->password, $this->database);
        if (!$koneksi) {
            echo "gagal";
            die("koneksi gagal" . mysqli_connect_error());
        }
        return $koneksi;
    }

    public function insertMessage()
    {
        // Mengatur zona waktu ke Asia/Jakarta (WIB)
        date_default_timezone_set('Asia/Jakarta');

        $koneksi = $this->koneksi();
        if (
            isset($_POST['nama']) and isset($_POST['status_kehadiran']) and isset($_POST['pesan']) != null
        ) {
            if ($koneksi) {
                // ambil data
                $nama = htmlspecialchars($_POST['nama']);
                $statusKehadiran = htmlspecialchars($_POST['status_kehadiran']);
                $pesan = htmlspecialchars($_POST['pesan']);

                if (
                    $nama and $statusKehadiran and $pesan != null
                ) {
                    if ($nama and $statusKehadiran and $pesan != "") {
                        // Gunakan waktu sekarang sesuai zona waktu Jakarta
                        $waktu = date('Y-m-d H:i:s');
                        $query = "INSERT INTO undangan (nama,status_kehadiran,pesan,waktu) VALUES ('$nama','$statusKehadiran','$pesan','$waktu')";
                        $insert = mysqli_query($koneksi, $query);
                    }
                }
            }
        }
    }


    public function getMessageAll()
    {
        $koneksi = $this->koneksi();
        $query = "SELECT * FROM undangan ORDER BY id DESC";
        $getData = mysqli_query($koneksi, $query);

        return $getData;
    }
    public function tes(){
        echo"tess";
}

}
$system = new System;
$system->insertMessage();
// $system->tes();
