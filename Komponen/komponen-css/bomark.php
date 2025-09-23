<style>
     body {
      background-color: black;
      color: white;
      font-family: 'Segoe UI', sans-serif;
    }
    .navbar-custom {
      background-color: transparent;
    }
    .form-control::placeholder {
      color: #555;
    }
    .hero h1 {
      font-size: 2.5rem;
      font-weight: 700;
    }
    .section-title {
      font-size: 1.5rem;
      margin-bottom: 20px;
      border-bottom: 2px solid #6a5acd;
      display: inline-block;
    }
   .bg-purple {
  background-color: #a020f0;
}
    .bg-dark-gray {
    background-color: #3B3B3B !important;
  }

.anime-card-custom img {
  height: 220px;
  width: 100%;
  object-fit: cover;
  border-radius: 10px;
}

.anime-card-custom .card-title {
  display: -webkit-box;
  -webkit-line-clamp: 3;         /* Maksimal 2 baris */
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
   font-size: 0.75rem;
    font-weight: 600;
    line-height: 1.2;
}

.anime-card-custom {
  border-radius: 12px;
  overflow: hidden;
}
 .badge-orange {
    background-color: #ff2e2e; /* css QNA*/
    color: white;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    border-top-left-radius: 0;
    padding: 0.5em 0.75em;
    font-weight: bold;
    font-size: 0.75rem;
    }

    .col-5-grid {
  width: 100%;
}

@media (min-width: 992px) {
  .col-5-grid {
    width: 20%;
  }
}



.ranking-card {
  display: flex;
  align-items: center;
  background-color: #1e1e1e;
  border-radius: 10px;
  padding: 10px;
  margin-bottom: 10px;
  color: white;
}

.ranking-number {
  font-size: 20px;
  width: 30px;
  text-align: center;
  font-weight: bold;
  color: #ccc;
}

.ranking-thumb {
  width: 50px;
  height: 70px;
  object-fit: cover;
  border-radius: 5px;
  margin: 0 10px;
}

.ranking-info {
  flex: 1;
}

.ranking-info h5 {
  margin: 0;
  font-size: 14px;
}

.ranking-info p {
  margin: 4px 0;
  font-size: 12px;
}

.rating {
  color: gold;
  font-weight: bold;
}
.ranking-section {
  padding-right: 0;
  margin-top: 0 !important;
}
.col-lg-3 {
  padding-right: 0;
  margin-top: 0;
}


    .sidebar {
      background-color: #3a3a3a;
      padding: 20px;
      border-radius: 8px;
      height: 100%;
    }
    .ribbon {
  position: absolute;
  top: 12px;
  left: -40px;
  width: 160px;
  transform: rotate(-45deg);
  z-index: 1;
}

.ribbon span {
  display: block;
  background: #ff2e2e; /*css Completed */
  color: white;
  font-weight: bold;
  font-size: 0.75rem;
  text-align: center;
  padding: 4px 0;
  box-shadow: 0 2px 6px rgba(0,0,0,0.3);
}

 .btn-purple {
  background-color: #c800ff;   /* Neon ungu terang */
  color: white;
  border: none;
  padding: 6px 20px;
  font-weight: bold;
  border-radius: 8px;
  font-size: 0.9rem;
  width: auto;
  max-width: 150px;
  white-space: nowrap;
  transition: background-color 0.3s ease;
}

.btn-purple:hover {
  background-color: #a000cc;
}

.genre-dropdown {
  background-color: #212529 !important; /* Background gelap */
  border-radius: 10px;
  padding: 10px 0;
  transform: translateX(-30px); /* Supaya gak terlalu kanan */
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
}

.genre-dropdown .dropdown-item {
  color: white !important;
  font-size: 14px;
  padding: 5px 0;
}


     footer {
      background-color: #000;
      color: #ccc;
      text-align: center;
      padding: 20px 0;
      font-size: 0.9rem;
    }
    .custom-pagination .page-link {
  background-color: transparent;
  color: white;
  border: none;
  font-weight: bold;
}

.custom-pagination .page-item.active .page-link {
  background-color: #c800ff;
  color: white;
  border-radius: 8px;
}

.custom-pagination .page-link:hover {
  color: #c800ff;
}


</style>