  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Anggota</h1>
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
                <h3 class="card-title">Data Anggota</h3>
                <div class="card-tools">
                  <a href="?p=anggota&act=add" type="button" class="btn btn-sm btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No Anggota</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    include 'config.php';
                    $query = mysqli_query($link,"SELECT*FROM member");
                    if(mysqli_num_rows($query)>0){
                      while($data = mysqli_fetch_array($query)){
                      ?>
                  <tr>
                    <td><?=$data['nomor_anggota']?></td>
                    <td><?=$data['nama']?></td>
                    <td><?=$data['jk']?></td>
                    <td><?=$data['tanggal_lahir']?></td>
                    <td><?=$data['alamat']?></td>
                    <td>
                      <a href="?p=anggota&act=edit&id=<?php echo $data["id"]; ?>" type="button" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</a> 
                      <a href="hapus_anggota.php?id=<?php echo $data["id"]; ?>" type="button" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data Anggota <?php echo $data['nomor_anggota'] ?>?')"><i class="fas fa-trash"></i> Hapus</a>
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