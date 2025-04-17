<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora de Veículos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="assets/js/cadastro.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<body class="bg-gray-700 flex justify-center items-center min-h-screen">
    
    <div class="bg-indigo-500 p-16 rounded-lg shadow-lg w-[600px] text-left">
        <h1 class="text-white text-4xl font-serif mb-6">Crie sua conta</h1>
        <form action="{{ route('Login') }}" method="get">
            @csrf
            <label for="nome" class="block text-gray-200 mb-2 text-lg">Nome Completo</label>
            <input type="text" id="nome" class="w-full p-2 mb-4 border border-black rounded" placeholder="Digite seu Nome Completo">

            <label for="email" class="block text-gray-200 mb-2 text-lg">E-mail:</label>
            <input type="text" id="email" class="w-full p-2 mb-4 border border-black rounded" placeholder="Digite seu E-mail">

            <label for="senha" class="block text-gray-200 mb-2 text-lg">Senha:</label>
            <input type="text" id="senha" class="w-full p-2 mb-4 border border-black rounded" placeholder="Digite sua senha" maxlength="30">

            <label for="cep" class="block text-gray-200 mb-2">CEP:</label>
            <input type="text" id="cep" class="w-full p-2 mb-4 border border-black rounded" placeholder="Digite o CEP" maxlength="9" onblur="pesquisacep(this.value)" oninput="this.value = value.replace(/[^0-9]/g, '');">

            <label for="estado" class="block text-gray-200 mb-2">Estado:</label>
            <input type="text" id="estado" class="w-full p-2 mb-4 border border-black rounded" placeholder="Digite seu Estado" maxlength="20">

            <label for="cidade" class="block text-gray-200 mb-2">Cidade:</label>
            <input type="text" id="cidade" class="w-full p-2 mb-4 border border-black rounded" placeholder="Digite sua Cidade" maxlength="40">

            <label for="bairro" class="block text-gray-200 mb-2">Bairro:</label>
            <input type="text" id="bairro" class="w-full p-2 mb-4 border border-black rounded" placeholder="Digite seu Bairro" maxlength="30">

            <label for="rua" class="block text-gray-200 mb-2">Rua:</label>
            <input type="text" id="rua" class="w-full p-2 mb-6 border border-black rounded" placeholder="Digite sua Rua" maxlength="50">

            <button class="w-full text-center bg-black text-white py-2 rounded-lg block hover:bg-cadetblue hover:shadow-md" onclick="logout()">Cadastre-se</button>
        </form>
    </div>
</body>
</html>
