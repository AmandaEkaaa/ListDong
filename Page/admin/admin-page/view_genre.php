<div class="container mt-4">

    <div class="card shadow border-0 rounded-4">
        <div class="card-body p-4">

            <h4 class="fw-bold mb-3" style="color:#6c63ff;">📚 Daftar Genre</h4>
            <p class="text-muted">Berikut adalah list genre yang sudah kamu tambahkan yaa 💖</p>

            <div class="table-responsive mt-3">
                <table class="table table-hover align-middle">
                    <thead style="background:#f3e8ff;">
                        <tr>
                            <th class="fw-semibold">No</th>
                            <th class="fw-semibold">Nama Genre</th>
                            <th class="fw-semibold">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php 
                        if(isset($genres) && count($genres) > 0){
                            $no = 1;
                            foreach($genres as $genre){
                        ?>
                        <tr>
                            <td class="text-muted"><?= $no++; ?></td>
                            <td class="fw-semibold"><?= $genre['nama']; ?></td>
                            <td>
                                <a href="?page=genre&action=edit&id=<?= $genre['id']; ?>" 
                                   class="btn btn-sm rounded-3 text-white"
                                   style="background:#6c63ff;">
                                    ✏ Edit
                                </a>

                                <a href="?page=genre&action=delete&id=<?= $genre['id']; ?>"
                                    class="btn btn-sm rounded-3 text-white ms-1"
                                    style="background:#ff6b81;"
                                    onclick="return confirm('Yakin ingin menghapus genre ini? 🥺');">
                                       🗑 Hapus
                                </a>
                            </td>
                        </tr>
                        <?php 
                            } 
                        } else { 
                        ?>
                        <tr>
                            <td colspan="3" class="text-center text-muted py-3">
                                Belum ada data genre 😢
                            </td>
                        </tr>
                        <?php } ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>
