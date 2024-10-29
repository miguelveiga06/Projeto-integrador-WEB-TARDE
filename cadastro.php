<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pagmais";

$conn = new mysql($servername, $username, $password, $dbname);

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Cadastro | PagMaix</title>
    <link rel="stylesheet" href="style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="fita_direita"></div>

    <div class="box1">  
        <header>
            <h2 class="logo">PagMaix <i class='bx bxs-cart-alt'></i></h2>
            <nav class="navegacao">
                <a href="#">Home</a>
                <a href="#">Sobre</a>
                <a href="#">Serviços</a>
                <a href="#">Contatos</a>
            </nav>
        </header>
        <div class="logo img">
            <img src="" alt="Logo">
        </div>
    </div>

    <div class="capa">
        <form id="CadastreForm" method="POST" action="cadastro.php">
            <h1>Cadastro PagMaix</h1>
            <div class="input-box">
                <input type="text" name="nome_usuario" placeholder="Usuário" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" name="senha" placeholder="Senha" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="password" name="senha_confirm" placeholder="Confirmar Senha" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="cargo">
                <h3>Qual seu cargo?</h3>
                <label>
                    <input type="radio" name="nivel" value="estoquista" required>
                    Estoquista
                </label>
                <label>
                    <input type="radio" name="nivel" value="gerente" required>
                    Gerente
                </label>
                <label>
                    <input type="radio" name="nivel" value="repositor" required>
                    Repositor
                </label>
            </div>

            <div class="copyright">
                <i class='bx bx-copyright'></i>
            </div>
            <div class="dumbdevs">
                <h1>DumbDevs 2024</h1>
            </div>
            <button type="submit" class="btn">Cadastrar-se</button>

            <div class="register-link">
                <p>Já tem uma conta?!
                    <a href="login.html" class="btn-link">Fazer Login</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>