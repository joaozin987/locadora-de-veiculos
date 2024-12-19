<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora de Veículos</title>
    <script src="assets/js/login.js"></script>
    <link rel="stylesheet" href="assets/login.css">
</head>
<body>
    <section class="login"></section>

    <div class="form">
        <h1>Login</h1>

        <label for="user">Usuario:</label>
        <input type="text" id="user" placeholder="Digite seu Usuário">

        <label for="senha">Senha:</label>
        <input type="password" id="senha" placeholder="Digite sua senha">
        <a  href="#" class="detalhes">Esqueceu sua Senha?</a>
        
        <a class="btn-link" href="{{ route('Pveiculos') }}" onclick="logout()">Entrar</a>
   </div>
</section>
</body>
</html>
