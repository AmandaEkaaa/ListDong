<div class="row">
    <!-- Statistik Utama -->
    <div class="col-xl-3 col-md-6">
        <div class="card stat-card bg-gradient-primary text-white">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="avtar avtar-s bg-light-primary">
                            <i class="ti ti-search f-24"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="mb-0">Total Pencarian</h6>
                        <h4 class="mb-0">1,248</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6">
        <div class="card stat-card bg-gradient-success text-white">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="avtar avtar-s bg-light-success">
                            <i class="ti ti-bookmark f-24"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="mb-0">Bookmark</h6>
                        <h4 class="mb-0">356</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6">
        <div class="card stat-card bg-gradient-warning text-white">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="avtar avtar-s bg-light-warning">
                            <i class="ti ti-device-tv f-24"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="mb-0">Total Donghua</h6>
                        <h4 class="mb-0">892</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6">
        <div class="card stat-card bg-gradient-info text-white">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="avtar avtar-s bg-light-info">
                            <i class="ti ti-category f-24"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="mb-0">Genre Tersedia</h6>
                        <h4 class="mb-0">24</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Chart Popularitas Genre -->
    <div class="col-xl-8 col-md-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Popularitas Genre Donghua</h5>
                <div class="dropdown">
                    <button class="btn btn-link arrow-none" type="button" data-bs-toggle="dropdown">
                        <i class="ti ti-dots-vertical"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Minggu Ini</a>
                        <a class="dropdown-item" href="#">Bulan Ini</a>
                        <a class="dropdown-item" href="#">Tahun Ini</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="genre-chart"></div>
            </div>
        </div>
    </div>
    
    <!-- Quick Actions -->
    <div class="col-xl-4 col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Quick Actions</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-3">
                    <a href="?page=genre&action=create" class="btn btn-primary quick-action-btn d-flex align-items-center">
                        <i class="ti ti-plus me-3"></i>
                        <div class="text-start">
                            <strong>Tambah Genre Baru</strong>
                            <small class="d-block">Tambah genre donghua baru</small>
                        </div>
                    </a>
                    <a href="?page=genre&action=index" class="btn btn-outline-primary quick-action-btn d-flex align-items-center">
                        <i class="ti ti-list me-3"></i>
                        <div class="text-start">
                            <strong>Kelola Genre</strong>
                            <small class="d-block">Lihat & edit semua genre</small>
                        </div>
                    </a>
                    <a href="#" class="btn btn-outline-success quick-action-btn d-flex align-items-center">
                        <i class="ti ti-device-tv me-3"></i>
                        <div class="text-start">
                            <strong>Tambah Donghua</strong>
                            <small class="d-block">Input donghua baru</small>
                        </div>
                    </a>
                    <a href="#" class="btn btn-outline-info quick-action-btn d-flex align-items-center">
                        <i class="ti ti-bookmark me-3"></i>
                        <div class="text-start">
                            <strong>Kelola Bookmark</strong>
                            <small class="d-block">Lihat bookmark users</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Donghua Terbaru -->
    <div class="col-xl-6 col-md-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Donghua Terbaru</h5>
                <a href="#" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
            </div>
            <div class="card-body activity-scroll">
                <div class="list-group list-group-flush">
                    <div class="list-group-item px-0">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="https://via.placeholder.com/60x80/4f46e5/ffffff?text=DH" alt="Donghua" class="donghua-img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">The Legend of Sword</h6>
                                <p class="text-muted mb-1">Action, Adventure • Episode 12/24</p>
                                <small class="text-muted">Ditambahkan 2 jam lalu</small>
                            </div>
                            <span class="badge bg-success">Aktif</span>
                        </div>
                    </div>
                    <div class="list-group-item px-0">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="https://via.placeholder.com/60x80/dc2626/ffffff?text=DH" alt="Donghua" class="donghua-img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Magic Academy</h6>
                                <p class="text-muted mb-1">Fantasy, School • Episode 8/12</p>
                                <small class="text-muted">Ditambahkan 5 jam lalu</small>
                            </div>
                            <span class="badge bg-success">Aktif</span>
                        </div>
                    </div>
                    <div class="list-group-item px-0">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="https://via.placeholder.com/60x80/059669/ffffff?text=DH" alt="Donghua" class="donghua-img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Space Odyssey 2024</h6>
                                <p class="text-muted mb-1">Sci-Fi, Space • Episode 1/26</p>
                                <small class="text-muted">Ditambahkan 1 hari lalu</small>
                            </div>
                            <span class="badge bg-warning">Baru</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Aktivitas Terkini -->
    <div class="col-xl-6 col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Aktivitas Terkini</h5>
            </div>
            <div class="card-body activity-scroll">
                <div class="list-group list-group-flush">
                    <div class="list-group-item px-0">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="activity-icon bg-light-success">
                                    <i class="ti ti-user-plus f-18 text-success"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <p class="mb-1"><strong>User baru</strong> "donghua_lover" bergabung</p>
                                <small class="text-muted">30 menit lalu</small>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item px-0">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="activity-icon bg-light-primary">
                                    <i class="ti ti-bookmark f-18 text-primary"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <p class="mb-1"><strong>15 bookmark baru</strong> untuk "The Legend of Sword"</p>
                                <small class="text-muted">2 jam lalu</small>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item px-0">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="activity-icon bg-light-info">
                                    <i class="ti ti-category f-18 text-info"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <p class="mb-1">Genre <strong>"Isekai"</strong> ditambahkan</p>
                                <small class="text-muted">5 jam lalu</small>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item px-0">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="activity-icon bg-light-warning">
                                    <i class="ti ti-search f-18 text-warning"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <p class="mb-1"><strong>48 pencarian</strong> untuk "action fantasy"</p>
                                <small class="text-muted">1 hari lalu</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Welcome Banner -->
<div class="row mt-4">
    <div class="col-12">
        <div class="card welcome-banner text-white">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h3 class="mb-2">List it. Watch it. Love it.</h3>
                        <p class="mb-0">Temukan donghua favoritmu di ListDong. Semua episode, semua genre – satu tempat, semua lengkap.</p>
                    </div>
                    <div class="col-md-4 text-end">
                        <i class="ti ti-device-tv banner-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Chart untuk popularitas genre
    const options = {
        series: [{
            name: 'Jumlah View',
            data: [450, 320, 280, 240, 190, 160, 140, 120, 100, 85]
        }],
        chart: {
            type: 'bar',
            height: 350,
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                borderRadius: 4,
                horizontal: true,
            }
        },
        dataLabels: {
            enabled: false
        },
        xaxis: {
            categories: ['Action', 'Fantasy', 'Romance', 'Comedy', 'Adventure', 
                        'Sci-Fi', 'Drama', 'Mystery', 'Horror', 'Sports'],
        },
        colors: ['#4f46e5'],
        grid: {
            borderColor: '#f1f1f1',
        }
    };

    const chart = new ApexCharts(document.querySelector("#genre-chart"), options);
    chart.render();
});
</script>

<style>
/* ===== CUSTOM STYLES FOR LISTDONG DASHBOARD ===== */

/* Primary Color Theme */
:root {
    --listdong-primary: #4f46e5;
    --listdong-primary-dark: #4338ca;
    --listdong-secondary: #7c3aed;
    --listdong-accent: #06b6d4;
}

/* Gradient Backgrounds */
.bg-gradient-primary {
    background: linear-gradient(135deg, var(--listdong-primary) 0%, var(--listdong-secondary) 100%) !important;
}

.bg-gradient-success {
    background: linear-gradient(135deg, #059669 0%, #10b981 100%) !important;
}

.bg-gradient-warning {
    background: linear-gradient(135deg, #d97706 0%, #f59e0b 100%) !important;
}

.bg-gradient-info {
    background: linear-gradient(135deg, #0891b2 0%, #06b6d4 100%) !important;
}

/* Card Styles */
.card {
    border: none;
    border-radius: 12px;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    margin-bottom: 1.5rem;
    transition: all 0.3s ease;
    background: #ffffff;
}

.card:hover {
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    transform: translateY(-2px);
}

.card-header {
    background: transparent;
    border-bottom: 1px solid #e5e7eb;
    padding: 1.25rem 1.5rem;
    font-weight: 600;
}

.card-header h5 {
    margin: 0;
    color: #1f2937;
    font-weight: 700;
}

/* Stat Cards */
.stat-card {
    border-radius: 12px;
    overflow: hidden;
}

.stat-card .card-body {
    padding: 1.5rem;
}

.stat-card .avtar {
    width: 60px;
    height: 60px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 255, 255, 0.2);
}

.stat-card .avtar i {
    font-size: 1.5rem;
}

.stat-card h4 {
    font-size: 1.75rem;
    font-weight: 700;
    margin: 0.5rem 0 0 0;
}

.stat-card h6 {
    font-size: 0.875rem;
    opacity: 0.9;
    margin: 0;
}

/* Button Styles */
.btn {
    border-radius: 10px;
    padding: 0.75rem 1.5rem;
    font-weight: 600;
    transition: all 0.3s ease;
    border: none;
}

.btn-primary {
    background: var(--listdong-primary);
    border-color: var(--listdong-primary);
}

.btn-primary:hover {
    background: var(--listdong-primary-dark);
    border-color: var(--listdong-primary-dark);
    transform: translateY(-1px);
}

.btn-outline-primary {
    border: 2px solid var(--listdong-primary);
    color: var(--listdong-primary);
    background: transparent;
}

.btn-outline-primary:hover {
    background: var(--listdong-primary);
    color: white;
    transform: translateY(-1px);
}

/* Quick Action Buttons */
.quick-action-btn {
    padding: 1rem 1.25rem;
    text-align: left;
    border-radius: 12px;
    transition: all 0.3s ease;
}

.quick-action-btn i {
    font-size: 1.25rem;
    margin-right: 0.75rem;
}

.quick-action-btn:hover {
    transform: translateX(5px);
}

/* List Group Styles */
.list-group-item {
    border: none;
    padding: 1.25rem 0;
    border-bottom: 1px solid #f3f4f6;
    transition: background-color 0.2s ease;
}

.list-group-item:hover {
    background-color: #f9fafb;
}

.list-group-item:last-child {
    border-bottom: none;
}

/* Badge Styles */
.badge {
    border-radius: 8px;
    padding: 0.375rem 0.75rem;
    font-weight: 600;
    font-size: 0.75rem;
}

.badge.bg-success {
    background: linear-gradient(135deg, #059669, #10b981) !important;
}

.badge.bg-warning {
    background: linear-gradient(135deg, #d97706, #f59e0b) !important;
}

/* Donghua Image Placeholder */
.donghua-img {
    width: 60px;
    height: 80px;
    object-fit: cover;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

/* Activity Icons */
.activity-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.activity-icon i {
    font-size: 1rem;
}

/* Welcome Banner */
.welcome-banner {
    background: linear-gradient(135deg, var(--listdong-primary) 0%, var(--listdong-secondary) 100%);
    border-radius: 16px;
    padding: 2rem;
    position: relative;
    overflow: hidden;
}

.welcome-banner::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -10%;
    width: 200px;
    height: 200px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
}

.welcome-banner h3 {
    font-weight: 800;
    margin-bottom: 1rem;
}

.welcome-banner p {
    font-size: 1.1rem;
    opacity: 0.9;
    margin: 0;
}

.welcome-banner .banner-icon {
    font-size: 4rem;
    opacity: 0.3;
    position: absolute;
    right: 2rem;
    top: 50%;
    transform: translateY(-50%);
}

/* Chart Container */
#genre-chart {
    border-radius: 12px;
}

/* Dropdown Styles */
.dropdown-menu {
    border: none;
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    border-radius: 10px;
    padding: 0.5rem;
}

.dropdown-item {
    border-radius: 6px;
    padding: 0.5rem 1rem;
    transition: all 0.2s ease;
}

.dropdown-item:hover {
    background: var(--listdong-primary);
    color: white;
}

/* Responsive Design */
@media (max-width: 768px) {
    .stat-card .card-body {
        padding: 1rem;
    }
    
    .stat-card h4 {
        font-size: 1.5rem;
    }
    
    .welcome-banner {
        padding: 1.5rem;
        text-align: center;
    }
    
    .welcome-banner .banner-icon {
        position: relative;
        right: auto;
        top: auto;
        transform: none;
        margin-top: 1rem;
    }
    
    .quick-action-btn {
        padding: 0.875rem 1rem;
    }
}

/* Animation for cards */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.card {
    animation: fadeInUp 0.5s ease-out;
}

/* Custom scrollbar for activity list */
.activity-scroll {
    max-height: 400px;
    overflow-y: auto;
}

.activity-scroll::-webkit-scrollbar {
    width: 6px;
}

.activity-scroll::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
}

.activity-scroll::-webkit-scrollbar-thumb {
    background: var(--listdong-primary);
    border-radius: 10px;
}

.activity-scroll::-webkit-scrollbar-thumb:hover {
    background: var(--listdong-primary-dark);
}
</style>