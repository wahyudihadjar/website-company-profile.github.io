<?php


function url_dasar()
{
    // $_SERVER['SERVER_NAME'] : alamat website, misalkan websiteMu.com
    // $_SERVER['SCRIPT_NAME'] : directory website, websiteMu.com/blog/ $_SERVER['SCRIPT_NAME'] : blog
    $url_dasar = "http://" . $_SERVER['SERVER_NAME'] . dirname(($_SERVER['SCRIPT_NAME']));
    return $url_dasar;
}

function ambil_gambar($id_tulisan)
{
    global $koneksi;
    $sql1   = "select * from halaman where id = '$id_tulisan'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $text   = $r1['isi'];

    preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $text, $img);
    $gambar     = $img[1]; // ../gambar/filename.jpg
    $gambar     = str_replace("../gambar/", url_dasar() . "/gambar/", $gambar);

    return $gambar;
}

function ambil_kutipan($id_tulisan)
{
    global $koneksi;
    $sql1   = " select * from halaman where id = '$id_tulisan'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $text   = $r1['kutipan'];

    return $text;
}

function ambil_judul($id_tulisan)
{
    global $koneksi;
    $sql1   = " select * from halaman where id = '$id_tulisan'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $text   = $r1['judul'];

    return $text;
}

function ambil_isi($id_tulisan)
{
    global $koneksi;
    $sql1   = " select * from halaman where id = '$id_tulisan'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $text   = strip_tags($r1['isi']); // strip_tags hilangan gambar menyatu dengan isi

    return $text;
}

function bersihkan_judul($judul)
{
    $judul_baru    = strtolower($judul);
    $judul_baru    = preg_replace("/[^a-zA-Z0-9\s]/", "", $judul_baru);
    $judul_baru    = str_replace(" ", "-", $judul_baru);
    return $judul_baru;
}


function buat_link_halaman($id)
{
    global $koneksi;
    $sql1   = "select * from halaman where id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $judul  = $r1['judul'];
    // http://localhost/website-company-profile/halaman.php/12/judul
    return url_dasar() . "/halaman.php/$id/$judul";
}
