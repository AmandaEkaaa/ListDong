  <style>
    body, html {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(to right, #0d0d0d, #3b0a45, #6a0dad);
      color: white;
      text-align: center;
    }

    .hero {
      max-width: 600px;
      padding: 20px;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 10px;
      animation: fadeInDown 1s ease;
    }

    p {
      font-size: 1.2rem;
      margin-bottom: 20px;
      opacity: 0.85;
    }

    .btn {
      display: inline-block;
      padding: 12px 24px;
      background: #8e24aa;
      color: #fff;
      border-radius: 30px;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
      box-shadow: 0 4px 12px rgba(0,0,0,0.4);
    }

    .btn:hover {
      background: #a13dcd;
      transform: scale(1.05);
    }

    @keyframes fadeInDown {
      from {opacity: 0; transform: translateY(-50px);}
      to {opacity: 1; transform: translateY(0);}
    }
  </style>