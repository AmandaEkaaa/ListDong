<div class="row">
    <div class="col-md-6 offset-md-3">
        <h3 class="text-center mb-3">Tambah Genre</h3>

        <form action="" method="post">
            <div class="form-group mb-3">
                <label for="nama">Nama Genre</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama genre" required>
            </div>

            <div class="text-center">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            </div>
        </form>

        <?php
        // proses penyimpanan
        if (isset($_POST['simpan'])) {
            $nama = $_POST['nama'];

            // query insert ke database
            $query = "INSERT INTO genres (nama) VALUES ('$nama')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                echo "<div class='alert alert-success mt-3 text-center'>Data genre berhasil ditambahkan!</div>";
                echo "<meta http-equiv='refresh' content='1;url=?page=genre'>";
            } else {
                echo "<div class='alert alert-danger mt-3 text-center'>Gagal menambahkan data!</div>";
            }
        }
        ?>
    </div>
</div>
