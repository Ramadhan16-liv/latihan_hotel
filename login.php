<?php

$username = $_POST['username'];
$password = $_POST['password'];

include 'koneksi.php';
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$query = mysqli_query($koneksi, $sql);
if(mysqli_num_rows($query)>0){
    $data = mysqli_fetch_array($query);
    session_start();
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['username'] = $data['username'];
    if($data['username']=='adan'){
        header('Location:petugas.php');
    }else{
        echo"<script>
        alert('Maaf Login Gagal, Silakan Ulangi Lagi');
        window.location.assign('index.php');
        </script>";
    }
}

?>