<div class="container mt-4" style="max-width: 600px;">

    <div class="card shadow border-0 rounded-4">
        <div class="card-body p-4">

            <h4 class="fw-bold mb-3" style="color:#6c63ff;">🎵 Tambah Genre Baru</h4>
            <p class="text-muted mb-4">Isi form di bawah untuk menambahkan genre baru ya sayang 💖</p>

            <form method="POST" action="?page=genre&action=create">
                
                <!-- Input Nama Genre -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Nama Genre</label>
                    <input type="text" class="form-control form-control-lg rounded-3" 
                           name="nama" placeholder="Contoh: Romance, Action, Fantasy..." required>
                </div>

                <!-- Tombol -->
                <button type="submit" name="submit" 
                    class="btn w-100 text-white fw-semibold rounded-3"
                    style="background:#6c63ff;">
                    💾 Simpan Genre
                </button>

            </form>

        </div>
    </div>

</div>
