<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page Soft Pink</title>
  <style>
    body {
      font-family: "Segoe UI", Arial, sans-serif;
      background-color: #fff5f7;
      margin: 0;
      padding: 0;
      color: #4a3f4d;
    }
    .hero {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh; 
      text-align: center;
      padding: 20px;
    }
    .hero h1 {
      color: #d81b60;
      font-size: 40px;
      margin-bottom: 15px;
    }
    .hero p {
      font-size: 18px;
      color: #6d4c5b;
      max-width: 600px;
      margin: 0 auto 25px;
    }
    .hero img {
      margin: 20px 0;
      width: 220px;
      border-radius: 16px;
      box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }
    .cta-button {
      background-color: #ec407a;
      border: none;
      color: white;
      padding: 14px 32px;
      border-radius: 8px;
      font-size: 18px;
      cursor: pointer;
      transition: 0.3s;
      text-decoration: none;
      display: inline-block;
    }
    .cta-button:hover {
      background-color: #d81b60;
    }
  </style>
</head>
<body>

  <section class="hero">
    <h1>Halo, Selamat Datang! 🌸</h1>
    <p>
      Ini adalah landing page laravel yang saat buat
    </p>
    <img src="{{ asset('images/loopy.jpg') }}" alt="Loopy">
    <a href="#mulai" class="cta-button">Mulai Jelajahi</a>
  </section>

</body>
</html>
