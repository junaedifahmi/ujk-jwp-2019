<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "data_krs";

$conn = new mysqli($serverName,$username,$password,$dbName); //making new connection

function selectAllNilai(){ // function to get all the Nilai
    $q = "SELECT * FROM data_nilai";
    return getData($q);
}

function selectAllMahasiswa(){ // Select All Mahasiswa :return array(dataMahasiswa)
    $q = "SELECT * FROM data_mhs";
    return getData($q);
}

function selectAllMK(){ // select All Mata Kuliah
    $q = "SELECT * FROM data_mk";
    return getData($q);
}

function getData($q){ // Bassicaly execute select query and bundle the result into an array
    global $conn;
    $idx = 0;
    $data = array();
    $result = $conn->query($q) or die($conn->error);
    while($row = $result->fetch_assoc()){
        $data[$idx] = $row;
        $idx++;
    }
    return $data;
}

function getHurufMutu($angka){  // Function to convert Numberic Value into Quality Value
	if ($angka <=100 && $angka >=85) {
		return 'A';
	} elseif ($angka >=70) {
		return 'B';
	} elseif ($angka >=60){
		return 'C';
	} elseif ($angka >=50){
		return 'D';
	} elseif ($angka>=0){
		return 'E';
	} else{
		return 'Nilai Tidak Valid';
	}
}

function getBobot($hm){
    $hm = getHurufMutu($hm); // getHurufMutu from nilai to be convertered to Bobot
    switch ($hm) {
        case 'A':
            return 4;
            break;
        case 'B':
            return 3;
            break;
        case 'C':
            return 2;
            break;
        case 'D':
            return 1;
            break;
        case 'E':
            return 0;
            break;
        default:
            return 0;
            break;
    }
}

function session(){ // For checking wether the session is set, if not will be redirected to home
    if(!isset($_SESSION['user'])){
        header("Location: index.php");
    }
}
?>
