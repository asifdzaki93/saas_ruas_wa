<?php include 'header.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pengguna</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengguna</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid"><!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-header bg-primary">
                <div>
                  <a href="user_tambah.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> &nbsp Tambah Pengguna Baru</a>              
                </div>
                </div>
                <div class="card-body">
                <table class="table table-bordered table-striped dt-responsive nowrap w-100" id="table-datatable">
                  <thead>
                    <tr>
                      <th width="1%">NO</th>
                      <th>NAMA</th>
                      <th>USERNAME</th>
                      <th>LEVEL</th>
                      <th width="15%">FOTO</th>
                      <th width="10%">OPSI</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    include '../koneksi.php';
                    $no=1;
                    $data = mysqli_query($koneksi,"SELECT * FROM user");
                    while($d = mysqli_fetch_array($data)){
                      ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['user_nama']; ?></td>
                        <td><?php echo $d['user_username']; ?></td>
                        <td><?php echo $d['user_level']; ?></td>
                        <td>
                          <center>
                            <?php if($d['user_foto'] == ""){ ?>
                              <img src="../gambar/sistem/user.png" style="width: 80px;height: auto">
                            <?php }else{ ?>
                              <img src="../gambar/user/<?php echo $d['user_foto'] ?>" style="width: 80px;height: auto">
                            <?php } ?>
                          </center>
                        </td>
                        <td>                        
                          <a class="btn btn-warning btn-sm" href="user_edit.php?id=<?php echo $d['user_id'] ?>"><i class="fa fa-cog"></i></a>
                          <?php if($d['user_id'] != 1){ ?>
                            <a class="btn btn-danger btn-sm" href="user_hapus.php?id=<?php echo $d['user_id'] ?>"><i class="fa fa-trash"></i></a>
                          <?php } ?>
                        </td>
                      </tr>
                      <?php 
                    }
                    ?>
                  </tbody>
                </table>

                </div>
                <div class="card-footer">

                </div>
            </div>
        </div><!-- /.container-fluid -->
  </div>

<?php include 'footer.php'; ?>