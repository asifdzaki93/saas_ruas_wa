<?php include 'css.php'; ?>

    <!-- login -->
    <body class="hold-transition">
      <div class="row d-flex justify-content-between mt-9">
<div class="col-4">

</div>
<div class="col-4">
  <div class="login-box">
    <!-- /.login-logo -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
      <!-- <img src="admin\pic\" alt="Silahkan Masuk Untuk Bertransaksi" style="width: 200px; height: auto;"> -->
      
      <a href="../../index2.html" class="h1"><b>Ruas WA</b> v2</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Silahkan Masuk Untuk Melanjutkan</p>

          <form action="periksa_login.php" method="POST">
            
            <div class="form-group has-feedback">
              <input type="text" class="form-control" placeholder="Nama Akun" name="username" required="required" autocomplete="off">
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" placeholder="Kata Sandi" name="password" required="required" autocomplete="off">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <!-- <div class="btn btn-block btn-primary">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div> -->

            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Ingat Sandi
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
              </div>
              <!-- /.col -->
            </div>

          </form>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <i>Belum punya akun? </i>
        <a href="register.php">Daftar !</a>
        
      </div>
    </div>
      <!-- <?php 
      if(isset($_GET['alert'])){
        if($_GET['alert'] == "gagal"){
          echo "<div class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>";
        }else if($_GET['alert'] == "logout"){
          echo "<div class='alert alert-success'>ANDA TELAH BERHASIL LOGOUT</div>";
        }else if($_GET['alert'] == "belum_login"){
          echo "<div class='alert alert-warning'>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>";
        }
      }
      ?> -->
    <!-- /.card -->
  </div>
</div>
<div class="col-4">

</div>

      </div>
    
    <!-- login -->




<?php include 'js.php'; ?>
