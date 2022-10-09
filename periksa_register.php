<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
$lokasi = $_POST['lokasi'];
$nomorhp = '087788934569';
//$_POST['nomorhp'];

$nomor = mysqli_query($koneksi, "SELECT * FROM user WHERE nomorhp='$nomorhp'");
$cek = mysqli_num_rows($nomor);

if($cek > 0){
	header("location:register.php?alert=sudah terdaftar");
}else{
	echo $username.$password.$lokasi.$nomorhp;
	//mysqli_query($koneksi, "INSERT INTO `user`(`user_id`, `user_nama`, `user_username`, `user_password`, `user_foto`, `user_level`, `location`, `nomorhp`) VALUES (null,'value-2','value-3','value-4','value-5','value-6','value-7','value-8')");
	//header("location:index.php?alert=silahkan login");
}
