<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora de Veiculos</title>
    <link rel="stylesheet" href="assets/cadastro.css">
    <script src="assets/js/cadastro.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<body>
    <div>   
        <h1>Crie sua conta</h1>
        <form action="Controller.php" method="post"></form>
        
        <label for="Nome Completo">Nome Completo</label>
        <input type="text" id="nome"  placeholder="Digite seu Nome Completo">

        <label for="email">E-mail:</label>
        <input type="text" id="email"  placeholder=" Digite seu E-mail">

        <label for="idade">Idade:</label>
        <input type="number" placeholder="Idade" >
        
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" placeholder="(00) 000 000 000" maxlength="12" oninput="this.value = value.replace(/[^0-9]/g, '');">
    
       <label for="cpf">CPF:</label>
        <input type="text" id="cpf"  maxlength="11" placeholder="(000.000.000-00)" oninput="this.value = value.replace(/[^0-9]/g, '');">
        
        <label for="senha">Senha:</label>
        <input type="text" id="senha" max="30" placeholder="Digite sua senha" >
        
        <label for="data-nascimento">Data de Nascimento:</label>
        <input type="date" id="data-nascimento" maxlength="8">
        
        <label for="cep">CEP:</label>
        <input type="text" id="cep" placeholder="Digite o CEP" maxlength="9" onblur="pesquisacep(this.value)" oninput="this.value = value.replace(/[^0-9]/g, '');">
        
        <label for="estado">Estado:</label>
        <input type="text" id="estado" placeholder="Digite seu Estado" maxlength="20">
        
        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" placeholder="Digite sua Cidade" maxlength="40">
        
        <label for="bairro">Bairro:</label>
        <input type="text" id="bairro" placeholder="Digite seu Bairro" maxlength="30">
        
        <label for="rua">Rua:</label>
        <input type="text" id="rua" placeholder="Digite sua Rua" maxlength="50">
        
         
        <a class="btn-link" href="{{ route('Login') }}" onclick="logout()">Cadastre-se</a>
    </div>
    
</body>
</html>
