<?php
 
$host = "localhost";
$user = "root";
$pass = " ";
$db = "Pagmais";
 
$conn= new mysql($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$successMessage = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $
 
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Login | PagMais</title>
    <link rel="stylesheet" href="style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <h2 class="logo">PagMais <i class='bx bxs-cart-alt'></i></h2>
        <nav class="navegacao">
            <a href="#">Home</a>
            <a href="#">Sobre</a>
            <a href="#">Serviços</a>
            <a href="#">Contatos</a>
        </nav>
    </header>
    <div class="logo img">
        <img src="file:///C:/Users/roger.8990/Downloads/cart.png" alt="Logo">
    </div>
 
    <div class="capa">
        <form id="loginForm" method="POST" action="login.php"> <!-- Ação para o script de login -->
            <h1>Login PagMaix</h1>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                <form metod="post" action="cadastro.php">
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" name="senha" placeholder="Senha" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="copyright">
                <i class='bx bx-copyright'></i>
            </div>
            <div class="dumbdevs">
                <footer>
        <p>© 2024 - DumbDevs</p>
    </footer>
            </div>
            <div class="lembrar-mais-tarde">
                <label><input type="checkbox">Lembrar-me</label>
                <a href="">Esqueceu sua Senha?</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Não tem uma conta?
                    <a href="file:///C:/Users/roger.8990/OneDrive%20-%20Senac%20Paran%C3%A1/Documentos/HTML/paguemais/cadastro.html">Registrar-se</a>
                   
                </p>
            </div>
        </form>
    </div>
</body>
</html>