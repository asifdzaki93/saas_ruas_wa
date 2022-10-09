<?php 
include 'header.php';
include '../koneksi.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Pengguna</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid"><!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-body">
                <form action="user_update.php" method="post" enctype="multipart/form-data">
              <?php 
              $id = $_GET['id'];              
              $data = mysqli_query($koneksi, "select * from user where user_id='$id'");
              while($d = mysqli_fetch_array($data)){
                ?>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $d['user_nama'] ?>" required="required">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $d['user_id'] ?>" required="required">
                </div>

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" value="<?php echo $d['user_username'] ?>" required="required">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" min="5" placeholder="Kosong Jika tidak ingin di ganti">
                  <p>Kosong Jika tidak ingin di ganti</p>
                </div>

                <div class="form-group">
                  <label>Level</label>
                  <select class="form-control" name="level" required="required">
                    <option value=""> - Pilih Level - </option>
                    <option <?php if($d['user_level'] == "administrator"){echo "selected='selected'";} ?> value="administrator"> Administrator </option>
                    <option <?php if($d['user_level'] == "manajemen"){echo "selected='selected'";} ?> value="manajemen"> Manajemen </option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="foto">
                  <p>Kosong Jika tidak ingin di ganti</p>
                </div>

                <div class="form-group">
                  <input type="submit" class="btn btn-sm btn-primary" value="Simpan">
                  <a href="user.php" class="btn btn-info btn-sm pull-right">Kembali</a>              


                </div>
                <?php
              }

              ?>
              
            </form>


                </div>
            </div>
        </div><!-- /.container-fluid -->
  </div>
<?php include 'footer.php'; ?>




