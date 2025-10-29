<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Tambah User</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="user_name" class="form-label">Username</label>
                            <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Masukkan username" required>
                        </div>

                        <div class="mb-3">
                            <label for="pw" class="form-label">Password</label>
                            <input type="password" name="pw" id="pw" class="form-control" placeholder="Masukkan password" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" name="simpan" class="btn btn-success w-100">Simpan</button>
                        </div>
                    </form>

                    <?php
                    if (isset($_POST['simpan'])) {
                        $user_name = $_POST['user_name'];
                        $pw = $_POST['pw'];
                        $email = $_POST['email'];

                        // enkripsi password (lebih aman)
                        $pw_hash = password_hash($pw, PASSWORD_DEFAULT);

                        // query simpan
                        $query = "INSERT INTO users (user_name, pw, email) VALUES ('$user_name', '$pw_hash', '$email')";
                        $result = mysqli_query($conn, $query);

                        if ($result) {
                            echo "<div class='alert alert-success mt-3 text-center'>User berhasil ditambahkan!</div>";
                            echo "<meta http-equiv='refresh' content='1;url=?page=user'>";
                        } else {
                            echo "<div class='alert alert-danger mt-3 text-center'>Gagal menambahkan user!</div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
