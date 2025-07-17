

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Daftar Pasien</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .top-links {
            text-align: right;
            margin-bottom: 15px;
        }

        .top-links a {
            display: inline-block;
            padding: 8px 15px;
            margin-left: 5px;
            text-decoration: none;
            background-color: #007BFF;
            color: white;
            border-radius: 4px;
        }

        .top-links a:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th {
            background-color: #333;
            color: white;
            padding: 10px;
        }

        td {
            padding: 8px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #eee;
        }
    </style>
</head>
<body>
</div>
<div class="container">
    <h1>📚 Daftar Pasien Bidan Rani</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                        <td>1</td>
                        <td>Aulia</td>
                        <td>1 September 2004</td>
                        <td>Wanita</td>
                        <td>9 Korong</td>
                      </tr><tr>
                        <td>2</td>
                        <td>Putri</td>
                        <td>14 Juni 2006</td>
                        <td>Wanita</td>
                        <td>Lubuk Begalung</td>
                      </tr><tr>
                        <td>3</td>
                        <td>Budi</td>
                        <td>4 Mei 2000</td>
                        <td>Pria</td>
                        <td>Koto Tangah</td>
                      </tr>        </tbody>
    </table>
    <div class="form-container">
        <form method="POST">
        <p>Sudah punya akun? <a href="login.php">Login</a></p>
        <p>Belum punya akun? <a href="register.php">Register</a></p>
    </form>
</div>

</body>
</html>
