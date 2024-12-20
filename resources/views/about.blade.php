<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman About - Perjalanan Eza Nurul Azizah</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            max-width: 1200px;
            margin-top: 50px;
            align-items: center;
            gap: 30px;
        }
        .image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .image img {
            width: 300px;
            height: 400px;
            object-fit: cover;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }
        .content {
            flex: 2;
            max-width: 600px;
            text-align: left;
        }
        h1 {
            color: #4CAF50;
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        p {
            font-size: 1.2rem;
            line-height: 1.8;
        }
        .links {
            margin-top: 20px;
            display: flex;
            gap: 15px;
        }
        .links a {
            text-decoration: none;
            color: white;
            font-size: 1rem;
            font-weight: bold;
            padding: 12px 20px;
            border: none;
            border-radius: 25px;
            background-color: #4CAF50;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .links a:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Bagian Gambar -->
        <div class="image">
            <img src="about1.jpg" alt="Foto About">
        </div>

        <!-- Bagian Konten -->
        <div class="content">
            <h1>About Eza Nurul Azizah</h1>
            <p>
                Selamat datang di halaman ini, tempat di mana saya berbagi cerita tentang perjalanan hidup saya. Setiap pengalaman yang saya lewati telah membentuk saya menjadi pribadi yang lebih kuat dan penuh inspirasi.
                <br><br>
                Dari perjalanan profesional hingga momen-momen pribadi yang penuh pembelajaran, saya selalu percaya bahwa setiap langkah kecil membawa makna besar. Dalam setiap tantangan yang saya hadapi, saya belajar untuk tetap maju dan tidak pernah menyerah.
                <br><br>
                Di sini, saya ingin mengajak Anda untuk melihat lebih dalam tentang perjalanan saya, apa yang telah saya capai, dan bagaimana saya terus berusaha menjadi lebih baik setiap harinya.
            </p>
            <div class="links">
                <a href="http://127.0.0.1:8000/">Kembali ke Home</a>
                <a href="http://127.0.0.1:8000/profile">Lihat Profile</a>
                <a href="http://127.0.0.1:8000/contact">Hubungi Saya</a>
            </div>
        </div>
    </div>
</body>
</html>
