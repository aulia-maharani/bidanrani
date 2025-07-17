

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kelola Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
            padding: 30px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .top-bar {
            text-align: right;
            margin-bottom: 15px;
        }

        .top-bar a {
            text-decoration: none;
            padding: 8px 15px;
            margin-left: 5px;
            background-color:rgb(221, 0, 255);
            color: white;
            border-radius: 4px;
        }

        .top-bar a.logout {
            background-color: #dc3545;
        }

        .top-bar a:hover {
            opacity: 0.9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a.action-btn {
            margin-right: 5px;
            padding: 5px 10px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        a.action-btn.delete {
            background-color: #dc3545;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>📚 Data Pasien</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Penjelasan Penyakit</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                    <td>1</td>
                    <td>Aulia</td>
                    <td>1 September 2004</td>
                    <td>Wanita</td>
                    <td>9 Korong</td>
                    <td>
                        <a href='edit.php?id=3' class='action-btn'>Edit</a>
                        <a href='hapus.php?id=3' class='action-btn delete' onclick='return confirm("Yakin ingin menghapus buku ini?");'>Hapus</a>
                    </td>
                  </tr><tr>
                    <td>2</td>
                    <td>Putri</td>
                    <td>14 Juni 2006</td>
                    <td>Wanita</td>
                    <td>Lubuk Begalung</td>
                    <td>
                        <a href='edit.php?id=2' class='action-btn'>Edit</a>
                        <a href='hapus.php?id=2' class='action-btn delete' onclick='return confirm("Yakin ingin menghapus buku ini?");'>Hapus</a>
                    </td>
                  </tr><tr>
                    <td>3</td>
                    <td>Budi</td>
                    <td>4 Mei 2000</td>
                    <td>Pria</td>
                    <td>Koto Tangah</td>
                    <td>
                        <a href='edit.php?id=1' class='action-btn'>Edit</a>
                        <a href='hapus.php?id=1' class='action-btn delete' onclick='return confirm("Yakin ingin menghapus buku ini?");'>Hapus</a>
                    </td>
                  </tr>        </tbody>
    </table>
     <div class="top-bar">
        <a href="dashboard.php">Dashboard</a>
        <a href="uas.php" class="logout">Logout</a>
    </div>
</div>

</body>
</html>
