<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Buku</h1>
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
                <h3 class="card-title">Buku Baru</h3>
                <div class="card-tools">
                    <a href="?p=buku" type="button" class="btn btn-sm btn-primary"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                                                <!-- post= tidak tampil pada url, bisa gunakan GET jika ingin menampilkan proses pada url--> 
              <form action="simpan_buku.php" method="post" class="form-horizontal" id="quickForm">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nomorBuku" class="col-sm-2 col-form-label">Nomor Buku</label>
                    <div class="col-sm-10 col-form-input">
                        <input type="text" name="nomorBuku" class="form-control" id="nomorBuku" placeholder="Nomor Buku"minlength="5" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="namaBuku" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10 col-form-input">
                        <input type="text" name="namaBuku" class="form-control" id="namaBuku" placeholder="Nama Buku" required>
                                          <!-- name: menjadi nama variabel dalam file proses-->
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenisBuku" class="col-sm-2 col-form-label">Jenis Buku</label>
                    <div class="col-sm-10 col-form-input">
                    <input type="text" name="jenisBuku" class="form-control" id="jenisBuku" placeholder="Jenis Buku" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10 col-form-input">
                    <input type="text" name="penerbit" class="form-control" id="penerbit" placeholder="Penerbit" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tahunTerbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
                    <div class="col-sm-10 col-form-input">
                        <input type="date" name="tahunTerbit" class="form-control" id="tahunTerbit" value="1990-01-01" required>
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