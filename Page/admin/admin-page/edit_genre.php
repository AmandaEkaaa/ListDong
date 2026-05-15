
<?php
/** @var array $genre_data */
?>
<div class="container mt-4">
    <div class="card shadow border-0 rounded-4">
        <div class="card-body p-4">
            <h4 class="fw-bold mb-3" style="color:#6c63ff;">✏ Edit Genre</h4>
            <p class="text-muted">Yuk, ubah nama genrenya di sini 🌸</p>

            <form action="?page=genre&action=update" method="POST">
                <input type="hidden" name="id" value="<?= $genre_data['id']; ?>">

                <div class="mb-3">
                    <label class="form-label fw-semibold">Nama Genre</label>
                    <input type="text" name="nama" class="form-control rounded-3" 
                           value="<?= $genre_data['nama']; ?>" required>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn text-white rounded-3 px-4" style="background:#6c63ff;">
                        Simpan Perubahan
                    </button>
                    <a href="?page=genre&action=index" class="btn btn-light rounded-3 px-4 ms-2">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>