<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f9fc;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
        }
        h1 {
            color: #4CAF50;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
        form {
            background-color: #fff;
            padding: 30px 50px 30px 30px; 
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        label {
            font-size: 1rem;
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }
        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }
        textarea {
            resize: none;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #45a049;
        }
        a {
            text-decoration: none;
            color: #4CAF50;
            font-size: 1rem;
            margin-top: 15px;
            display: inline-block;
        }
        a:hover {
            color: #388e3c;
        }
    </style>
</head>
<body>
    <h1>Contact</h1>
    <form action="#" method="POST">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
        
        <label for="message">Pesan:</label>
        <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini" required></textarea>
        
        <button type="submit">Kirim</button>
    </form>
    <a href="http://127.0.0.1:8000/">Kembali ke Home</a>
</body>
</html>
