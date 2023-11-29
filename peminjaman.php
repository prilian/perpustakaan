  <!-- Content Wrapper. Contains page content -->
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Peminjaman</h3>
                <div class="card-tools">
                  <a href="?p=peminjaman&act=add" type="button" class="btn btn-sm btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No Pinjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>No Buku</th>
                    <th>No Anggota</th>
                    <th>No Petugas</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    include 'config.php';
                    $query = mysqli_query($link,"SELECT*FROM peminjaman");
                    if(mysqli_num_rows($query)>0){
                      while($data = mysqli_fetch_array($query)){
                      ?>
                  <tr>
                    <td><?=$data['nomor_pinjam']?></td>
                    <td><?=$data['tanggal_pinjam']?></td>
                    <td><?=$data['nomor_buku']?></td>
                    <td><?=$data['nomor_anggota']?></td>
                    <td><?=$data['nomor_petugas']?></td>
                    <td>
                      <a href="?p=peminjaman&act=edit&id=<?php echo $data["id"]; ?>" type="button" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</a> 
                      <a href="hapus_peminjaman.php?id=<?php echo $data["id"]; ?>" type="button" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data Peminjaman <?php echo $data['nomor_pinjam'] ?>?')"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                  </tr>            
                  <?php }}else{ ?>
                    <tr>
                      <td colspan="6">Data Tidak Ada</td>
                    </tr> 
                    <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->