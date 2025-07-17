

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Penyakit</title>
    <style>
        body {
    background: #f0f0f0;
    font-family: Arial, sans-serif;
}

.form-container {
    background: white;
    max-width: 400px;
    margin: 60px auto;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

label {
    display: block;
    margin: 10px 0 5px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    width: 100%;
    background: #007BFF;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background: #0056b3;
}

.alert {
    color: #b10000;
    background: #ffd6d6;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 15px;
}

.success {
    color: #006400;
    background: #ccffd9;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 15px;
}

a {
    color: #007BFF;
    text-decoration: none;
}
    </style>
</head>
<body>
<div class="form-container">
    <h2>Penjelasan Penyakit</h2>

    
    <form method="POST">
        <label>Nama Pasien:</label>
        <input type="text" name="judul" required>

        <label>Nama Dokter:</label>
        <input type="text" name="penulis" required>

        <label>Penjelasan Penyakit:</label>
        <input type="text" name="penulis" required>

        <button type="submit">Simpan</button>
        <a href="data.php">← Kembali</a>
    </form>
</div>
</body>
</html>
