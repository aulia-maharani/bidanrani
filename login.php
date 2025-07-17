

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
    background:rgb(230, 0, 255);
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background:rgb(152, 0, 179);
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
    color:rgb(255, 0, 225);
    text-decoration: none;
}
    </style>
</head>
<body>
<div class="form-container">
    <h2>Login</h2>
    
    
    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <div class="top-bar">
        <a href="dashboard.php">Login</a>
    </div>
        <p>Belum punya akun? <a href="register.php">Daftar</a></p>
    </form>
</div>
</body>
</html>
