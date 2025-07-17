

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
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
    background:rgb(255, 0, 242);
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background:rgb(179, 0, 158);
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
    color:rgb(255, 0, 234);
    text-decoration: none;
}
    </style>
</head>
<body>
<div class="form-container">
    <h2>Daftar Akun</h2>
        <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Register</button>
        <p>Sudah punya akun? <a href="login.php">Login</a></p>
    </form>
</div>
</body>
</html>
