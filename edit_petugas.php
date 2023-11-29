<?php 
require_once('config.php');
$id = mysqli_real_escape_string($link,trim($_GET["id"]));
$query = mysqli_query($link,"SELECT * FROM petugas WHERE id='$id'");
if(mysqli_num_rows($query)>0){
$data = mysqli_fetch_array($query);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Petugas</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Update Data Petugas</h3>
                <div class="card-tools">
                    <a href="?p=petugas" type="button" class="btn btn-sm btn-primary"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                                                <!-- post= tidak tampil pada url, bisa gunakan GET jika ingin menampilkan proses pada url--> 
              <form action="proses_edit_petugas.php" method="post" class="form-horizontal" id="quickForm">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
              <div class="card-body">
                  <div class="form-group row">
                    <label for="nomorPetugas" class="col-sm-2 col-form-label">Nomor Petugas</label>
                    <div class="col-sm-10 col-form-input">
                        <input type="text" name="nomorPetugas" class="form-control" id="nomorPetugas" placeholder="Nomor Petugas"minlength="5" value="<?php echo $data["nomor_petugas"]; ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="namaPetugas" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10 col-form-input">
                        <input type="text" name="namaPetugas" class="form-control" id="namaPetugas" placeholder="Nama Petugas" value="<?php echo $data["nama"]; ?>" required>
                                          <!-- name: menjadi nama variabel dalam file proses-->
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10 col-form-input">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenisKelamin" value="L" <?php echo $data["jk"]=="L"?'checked':'';?>>
                          <label class="form-check-label">Laki-Laki</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenisKelamin" value="P"  <?php echo $data["jk"]=="P"?'checked':'';?>>
                          <label class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label></label>
                    <div class="col-sm-10 col-form-input">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="<?php echo $data["username"]; ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="noHp" class="col-sm-2 col-form-label">No Hp</label>
                    <div class="col-sm-10 col-form-input">
                    <input type="text" name="noHp" class="form-control" id="noHp" placeholder="No Hp" value="<?php echo $data["no_hp"]; ?>" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php 
}else{
    echo '<script>alert("Data Petugas Tidak Ditemukan" );window.location="home.php?p=petugas";</script>';
}
  ?>