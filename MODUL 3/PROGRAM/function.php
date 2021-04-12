<?php 
$servername = "localhost";
$database = "db_crud";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

function show($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function insert($data){
    global $conn;
    $NIP = $_POST["NIP"];
    $nama = $_POST["nama"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
	$telp =$_POST["telp"];
	$alamat = $_POST ["alamat"];

    mysqli_query($conn, "INSERT INTO db_crud VALUES('$NIP','$nama','$jenis_kelamin','$telp','$alamat')");
    return mysqli_affected_rows($conn);
}

function delete($data){
    global $conn;
    $id_merk = $_GET["delete"];
    mysqli_query($conn, "DELETE FROM merk WHERE id_merk = $id_merk");
    return mysqli_affected_rows($conn);
}

function update($data){
    global $conn;
    $NIP = $_POST["NIP"];
    $nama = $_POST["nama"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
	$telp =$_POST["telp"];
	$alamat = $_POST ["alamat"];

    mysqli_query($conn, "UPDATE db_crud= '('$NIP','$nama','$jenis_kelamin','$telp','$alamat')");
    return mysqli_affected_rows($conn);
}

?>
