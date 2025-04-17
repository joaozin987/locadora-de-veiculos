<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora de Veículos</title>
    <script src="assets/js/login.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/login.css">
</head>
<body class="flex justify-center items-center min-h-screen bg-gray-700">
    <section class="">
        <div class=" bg-gray-300 p-16 rounded-lg shadow-lg w-96 text-left">
            <h1 class="text-center text-2xl text-gray-800 mb-6">Login</h1>

            <label for="user" class="block text-black mb-2">Usuário:</label>
            <input type="text" id="user" placeholder="Digite seu Usuário" class="w-full p-3 mb-3 border border-gray-400 rounded-md text-gray-700">

            <label for="senha" class="block text-black mb-2">Senha:</label>
            <input type="password" id="senha" placeholder="Digite sua senha" class="w-full p-3 mb-3 border border-gray-400 rounded-md text-gray-700">

            <a href="#" class="text-blue-700 text-sm text-right block mb-6">Esqueceu sua Senha?</a>
            
            <a href="{{ route('Pveiculos') }}" class="block text-center bg-black text-white py-2 px-8 rounded-lg ">Entrar</a>
        </div>
    </section>
</body>
</html>
