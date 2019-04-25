<?php
include_once("util_function.php");

if(isset($_POST['insert'])){ // Fungsi untuk menangani form insert
    global $conn;
    $q = $conn->prepare("INSERT INTO data_nilai (npm,kode_mk,nilai) VALUE (?, ?, ?)");
    $q->bind_param("sss",$_POST['npm'],$_POST['kode_mk'],$_POST['nilai']);
    if ($q->execute()){
        $msg = "Penambahan sukses";
    }else{
        $msg = "Penambahan gagal";
    }
    echo "<script>alert('$msg');</script>";
}

if(isset($_GET['delete'])){ // Fungsi untuk menghapus data nilai,
    global $conn;
    $q = $conn->prepare("DELETE FROM data_nilai WHERE id=?");
    $q->bind_param("s",$_GET['delete']);
    if ($q->execute()){
        $msg = "Data berhasil dihapus";
    }else{
        $msg = "Ada kesalahan";
    }
    echo "<script>alert('$msg');</script>";
    $nim = $_GET['nim'];
    header("Location: cari_nilai.php?cari=&nim=$nim");
}

if(isset($_POST['edit'])){  // Fungsi untuk menupdate data nilai
    global $conn;
    $q = $conn->prepare("UPDATE data_nilai SET nilai=? WHERE id=?");
    $q->bind_param("ss",$_POST['nilai'],$_POST['edit']);
    if($q->execute()){
        header("Location: cari_nilai.php");
    }
}

if(isset($_GET['cari'])){ // Fungsi untuk mencari data nilai dg keyword NPM atau NAMA
    $nim = $_GET['nim'];
    $nama = $_GET['nama'];
    $cond = $nim? "data_nilai.npm like '%$nim%'" : "data_mhs.nama like '%nama%'" ;
    $q = "SELECT data_nilai.id, data_nilai.nilai, data_mhs.nama, data_mhs.npm, data_nilai.kode_mk, data_mk.nama_mk,data_mk.sks FROM data_nilai,data_mhs,data_mk WHERE $cond AND data_nilai.npm = data_mhs.npm AND data_nilai.kode_mk = data_mk.kode";
    session_start();
    $_SESSION['hasil'] = getData($q);
    header("Location: cari_nilai.php");
}

if(isset($_POST['tombol-login'])){ // Fungsi untuk memvalidasi login dan membuat session
    $email = $_POST['email'];
    $user_password = md5($_POST['pass']);
    $q = "SELECT password FROM admin WHERE email = '$email'";
    $msg = '';
    if($pass = getData($q)[0]){
        if($user_password === $pass['password']){
            session_start();
            $_SESSION['user'] = $email;
            header("Location: index.php");
        } else {
            $msg = "Password Salah";
            header("Location: login.php?msg=$msg");
        }
    } else {
        $msg = "Email tidak ditemukan";
            header("Location: login.php?msg=$msg");
    }
}

if(isset($_GET['logout'])){ // Fungsi untuk menghapus session user
    session_start();
	unset($_SESSION['user_session']);
	
	if(session_destroy())
	{
		header("Location: index.php");
	}
}

?>