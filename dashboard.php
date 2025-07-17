

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
            padding: 30px;
        }

        .dashboard {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            margin: 8px;
            background-color:rgb(212, 0, 255);
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        a:hover {
            background-color:rgb(179, 0, 101);
        }

        .logout {
            background-color: #dc3545;
        }

        .logout:hover {
            background-color: #a71d2a;
        }
    </style>
</head>
<body>

<div class="dashboard">
    <h2>👋 Selamat datang!</h2>
    <p>Kamu berhasil login.</p>

    <a href="data.php">Data Pasien</a>
    <a href="uas.php" class="logout">Logout</a>
</div>

</body>
</html>
