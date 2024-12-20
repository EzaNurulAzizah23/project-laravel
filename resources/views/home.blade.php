<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Perjalanan Eza Nurul Azizah</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        nav {
            background-color: #3B9A2A;
            padding: 1.2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        nav h1 {
            margin: 0;
            font-size: 1.8rem;
            color: white;
            font-weight: bold;
        }
        nav a {
            text-decoration: none;
            color: white;
            margin: 0 15px;
            font-size: 1.1rem;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }
        nav a:hover {
            background-color: #1F732B;
            transform: scale(1.1);
        }
        nav a:active {
            background-color: #4CAF50;
        }
        .hero {
            text-align: center;
            padding: 6rem 2rem;
            background-color: #ffffff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            margin: 2rem auto;
            width: 90%;
            max-width: 900px;
            border-radius: 15px;
            position: relative;
        }
        .hero h2 {
            font-size: 3rem;
            color: #4CAF50;
            margin-bottom: 1rem;
            font-weight: bold;
            text-transform: uppercase;
        }
        .hero p {
            font-size: 1.3rem;
            color: #555;
            line-height: 1.8;
            margin-bottom: 2rem;
        }
        .hero button {
            padding: 1rem 2rem;
            font-size: 1.2rem;
            font-weight: bold;
            color: white;
            background-color: #4CAF50;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }
        .hero button:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }
        .hero button:focus {
            outline: none;
        }
        .hero .image-container {
    position: absolute;
    top: 8px; /* Menempatkan gambar sedikit ke bawah dari atas */
    left: 20px; /* Menempatkan gambar sedikit ke kiri */
    width: 120px;
    height: 120px;
    border-radius: 50%;
    border: 5px solid #ffffff;
    overflow: hidden;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
}


        .hero .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <nav>
        <h1>Website Perjalanan Eza Nurul Azizah</h1>
        <div>
            <a href="http://127.0.0.1:8000/">Home</a>
            <a href="http://127.0.0.1:8000/about">About</a>
            <a href="http://127.0.0.1:8000/profile">Profile</a>
            <a href="http://127.0.0.1:8000/contact">Contact</a>
        </div>
    </nav>
    <div class="hero">
        <h2>Selamat Datang di Website 
            Eza Nurul Azizah!</h2>
        <p>
            Di sini Anda akan menemukan kisah perjalanan saya, mulai dari pengalaman pribadi hingga profesional. Saya sangat senang bisa berbagi dengan Anda semua.
        </p>
        <p>
            Ikuti perjalanan saya, temui berbagai tantangan, pencapaian, dan inspirasi yang saya dapatkan sepanjang waktu. Semoga dapat memberikan motivasi dan semangat!
        </p>
        <button onclick="location.href='http://127.0.0.1:8000/about'">Pelajari Lebih Lanjut</button>
        <div class="image-container">
            <img src="Ezanurul.jpg" alt="Gambar Profil">
        </div>
    </div>
</body>
</html>
