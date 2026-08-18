<?php
include "proses/connect.php";

// Query untuk mendapatkan data user dari database
$query = mysqli_query($conn, "SELECT * FROM tb_user");
$result = []; 
if (mysqli_num_rows($query) > 0) {
  while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
  }
}
?>

<div class="col-lg-9 mt-2">
  <div class="card">
    <div class="card-header">
      Halaman User
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col d-flex justify-content-end">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahUser">Tambah User</button>
        </div>
      </div>

      <!-- Modal Tambah User -->
      <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="needs-validation" novalidate action="proses/proses_input_user.php" method="POST">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingInput" placeholder="Your Name" name="nama" required>
                      <label for="floatingInput">Nama</label>
                      <div class="invalid-feedback">Masukkan Nama.</div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" required>
                      <label for="floatingInput">Username</label>
                      <div class="invalid-feedback">Masukkan Username.</div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <select class="form-select" name="level" required>
                        <option selected hidden value="">Pilih Level User</option>
                        <option value="1">Owner/Admin</option>
                        <option value="2">Kasir</option>
                        <option value="3">Pelayan</option>
                        <option value="4">Dapur</option>
                      </select>
                      <label for="floatingInput">Level User</label>
                      <div class="invalid-feedback">Pilih Level User.</div>
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="form-floating mb-3">
                      <input type="number" class="form-control" placeholder="08xxxxxxxxxx" name="nohp">
                      <label for="floatingInput">No HP</label>
                    </div>
                  </div>
                </div>

                <div class="form-floating mb-3">
                  <textarea class="form-control" style="height:100px" name="alamat"></textarea>
                  <label for="floatingInput">Alamat</label>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="input_user_validate" value="1234">Save changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Modal Tambah User -->

      <?php if (empty($result)) { ?>
        <p>Data user tidak ada</p>
      <?php } else { ?>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Level</th>
                <th>No HP</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($result as $row) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['username']; ?></td>
                  <td>
                    <?php
                    switch ($row['level']) {
                      case 1:
                        echo "Owner/Admin";
                        break;
                      case 2:
                        echo "Kasir";
                        break;
                      case 3:
                        echo "Pelayan";
                        break;
                      case 4:
                        echo "Dapur";
                        break;
                    }
                    ?>
                  </td>
                  <td><?php echo $row['nohp']; ?></td>
                 
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      <?php } ?>
    </div>
  </div>
</div>