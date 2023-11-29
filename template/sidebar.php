  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="home.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Perpustakaan</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user0.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php  echo $_SESSION['nama']; ?>
          </a>
        </div>
      </div>
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">          
          <li class="nav-item">
            <a href="?p=anggota" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Anggota                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?p=petugas" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
               Petugas           
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?p=buku" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
              Buku           
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?p=peminjaman" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
              Peminjaman          
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?p=pengembalian" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
              Pengembalian          
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout                
              </p>
            </a>
          </li>          
        </ul>
      </nav>
    </div>
  </aside>