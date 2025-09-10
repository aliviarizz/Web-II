<!DOCTYPE html>
<html>
<head>
    <title>Website Soft Pink</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background-color: #fff5f7; /* pink sangat muda */
            text-align: center;
            margin: 0;
            padding: 0;
            color: #4a3f4d;
        }

        header {
            background-color: #f48fb1; /* pink soft */
            color: white;
            padding: 20px;
            border-bottom: 3px solid #ec407a; /* pink lebih tua */
        }

        .container {
            padding: 50px 20px;
        }

        h1 {
            color: #d81b60; /* pink tua */
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            color: #6d4c5b;
        }

        .logo {
            margin-top: 20px;
            width: 180px;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }

        footer {
            margin-top: 40px;
            background-color: #f48fb1; 
            color: white;
            padding: 15px;
        }

        button {
            margin-top: 20px;
            background-color: #ec407a;
            border: none;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #d81b60; 
        }
    </style>
</head>
<body>
    <header>
        <h2>Website Saya</h2>
    </header>

    <div class="container">
        <h1>Halo, Selamat Datang!</h1>
        <p>Ini tampilan Laravel yang saya buat🌸</p>
        
        <img src="{{ asset('images/loopy.jpg') }}" alt="Loopy" width="200">

        <br>
        <button>Mulai Jelajahi</button>
    </div>

    <footer>
        <p>&copy; 2025 Website Loopy</p>
    </footer>
</body>
</html>
