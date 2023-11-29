<?php 
require_once('config.php');
$id = mysqli_real_escape_string($link,trim($_GET["id"]));
$query = mysqli_query($link,"SELECT * FROM peminjaman WHERE id='$id'");
if(mysqli_num_rows($query)>0){
$data = mysqli_fetch_array($query);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Peminjaman</h1>
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
                <h3 class="card-title">Update Data Peminjaman</h3>
                <div class="card-tools">
                    <a href="?p=peminjaman" type="button" class="btn btn-sm btn-primary"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                                                <!-- post= tidak tampil pada url, bisa gunakan GET jika ingin menampilkan proses pada url--> 
              <form action="proses_edit_peminjaman.php" method="post" class="form-horizontal" id="quickForm">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
              <div class="card-body">
                  <div class="form-group row">
                    <label for="nomorPinjam" class="col-sm-2 col-form-label">Nomor Pinjam</label>
                    <div class="col-sm-10 col-form-input">
                        <input type="text" name="nomorPinjam" class="form-control" id="nomorPinjam" placeholder="Nomor Pinjam"minlength="5" value="<?php echo $data["nomor_pinjam"]; ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tglPinjam" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                    <div class="col-sm-10 col-form-input">
                        <input type="date" name="tglPinjam" class="form-control" id="tglPinjam" value="2022-01-01" value="<?php echo $data["tanggal_pinjam"]; ?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="nomorBuku" class="col-sm-2 col-form-label">Nomor Buku</label>
                    <div class="col-sm-10 col-form-input">
                        <input type="text" name="nomorBuku" class="form-control" id="nomorBuku" placeholder="Nomor Buku"minlength="5" value="<?php echo $data["nomor_buku"]; ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nomorAnggota" class="col-sm-2 col-form-label">Nomor Anggota</label>
                    <div class="col-sm-10 col-form-input">
                        <input type="text" name="nomorAnggota" class="form-control" id="nomorAnggota" placeholder="Nomor Anggota"minlength="5" value="<?php echo $data["nomor_anggota"]; ?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nomorPetugas" class="col-sm-2 col-form-label">Nomor Petugas</label>
                    <div class="col-sm-10 col-form-input">
                        <input type="text" name="nomorPetugas" class="form-control" id="nomorPetugas" placeholder="Nomor Petugas"minlength="5" value="<?php echo $data["nomor_petugas"]; ?>" required>
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
    echo '<script>alert("Data Anggota Tidak Ditemukan" );window.location="home.php?p=anggota";</script>';
}
  ?>