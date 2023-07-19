<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login Apps</title>
</head>
<body>
<main>
    <header>
        <img src="assets/img/unair_horizontal.png" alt="Unair logo">
    </header>
    <form id="loginForm" class="login-input">
        <label for="inputName">Nama</label>
        <input id="inputName" nama="text" required>
        <label for="inputNoHp">No. HP</label>
        <input id="inputNoHp" nohp="text" required>
        <label for="inputEmail">Email</label>
        <input id="inputEmail" email="text" required>
        <label for="inputPassword">Password</label>
        <input id="inputPassword" password="text" required>
        <button id="buttonLogin">SignUp</button>
    </form>
</main>

<script src="assets/js/index.js"></script>
<script src="assets/js/login.js"></script>
</body>
</html>
