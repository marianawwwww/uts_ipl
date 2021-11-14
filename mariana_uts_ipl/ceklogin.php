<?php
session_start();
include 'koneksi.php';
 
$username = $_POST['username'];
$password = ($_POST['password']);

$result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    $cek = mysqli_num_rows($result);

    // jika $cek lebih dari 0, maka berhasil login dan masuk ke index.php
    if ($cek > 0) {
        $data = mysqli_fetch_assoc($result);
 
        if($data['level']=="admin"){
    
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            header("location:indexadmin.php");
    
        }else if($data['level']=="user"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "user";
            header("location:indexuser.php");
    
        }else{
            echo "<script>alert('Maaf, Login Gagal');document.location='login.php'</script>";
        }	
    }else{
        echo "<script>alert('Maaf, Login Gagal');document.location='login.php'</script>";
    }
    
 
	
 
?>
