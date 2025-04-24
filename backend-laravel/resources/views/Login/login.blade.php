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

<body class="font-poppins  text-gray-800 "  style="background-color: rgba(227, 229, 231, 0.904)">
    <header class=" shadow-md sticky top-0 z-50 " style="background-color: rgba(49, 214, 255, 0.9)">
      <nav class="flex items-center justify-between p-4 max-w-7xl mx-auto">
        <div class="text-xl font-bold">TurisWaves</div>
        <ul class="hidden md:flex gap-6 items-center">
          <li><a href="{{ route('Inicio') }}" class="hover:text-blue-600">Home</a></li>
          <li><a href="{{ route('Veículos') }}" class="hover:text-blue-600">Nossos Veículos</a></li>
          <li><a href="#" class="hover:text-blue-600">Reservas Online</a></li>
          <li><a href="{{ route('Cadastro') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Cadastre-se</a></li>
          <li><a href="{{ route('Login') }}" class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300">Entrar</a></li>
        </ul>
  
        <div class="md:hidden">
          <button onclick="menuShow()"><i class="bi bi-list text-2xl"></i></button>
        </div>
      </nav>
  
      <div class="md:hidden hidden" id="mobileMenu">
        <ul class="flex flex-col gap-4 items-center bg-white py-4">
          <li><a href="{{ route('Inicio') }}">Home</a></li>
          <li><a href="{{ route('Veículos') }}">Nossos Veículos</a></li>
          <li><a href="#">Reservas Online</a></li>
          <li><a href="{{ route('Cadastro') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Cadastre-se</a></li>
          <li><a href="{{ route('Login') }}" class="bg-gray-200 px-4 py-2 rounded">Entrar</a></li>
        </ul>
      </div>
    </header>
    
   
    <section class="flex justify-center mt-10">
      <div class="bg-gray-300 p-16 rounded-lg shadow-lg w-96 text-left">
          <form action="" method="POST">
              @csrf

              <h1 class="text-center text-4xl font-serif text-gray-800 mb-6">Login</h1>

              <label for="email" class="block text-black text-xl font-serif mb-2">E-mail:</label>
              <input type="text" id="email" name="email" placeholder="Digite seu e-mail"
                  class="w-full p-3 mb-3 border border-gray-400 rounded-md text-gray-700">

              <label for="password" class="block text-black text-xl mb-2 font-serif">Senha:</label>
              <input type="password" id="password" name="password" placeholder="Digite sua senha"
                  class="w-full p-3 mb-3 border border-gray-400 rounded-md text-gray-700">

              <a href="#" class="text-blue-700 text-sm text-right block mb-6">Esqueceu sua Senha?</a>

              <button type="submit" class="block text-center bg-black text-white py-2 px-8 rounded-lg w-full">
                  Entrar
              </button>
              @if ( session('status'))
                <span class="txt_success">{{ session('status')}} </span>
          </form>
      </div>
  </section>

    <footer class=" text-white mt-12" style="background: rgba(21,199,243,0.904)">
      <div class="max-w-6xl mx-auto px-4 py-8 grid md:grid-cols-3 gap-6 text-sm">
        <div>
          <h3 class="font-bold mb-2">TurisWaves</h3>
          <p>Explore Alagoas com conforto e segurança. Alugue carros, motos ou embarcações de forma rápida e segura.</p>
        </div>
        <div>
           
        </div>
        <div>
          <h4 class="font-bold mb-2">Contato</h4>
          <p>Email: contato@turiswaves.com</p>
          <p>Telefone: (82) 99999-9999</p>
          <p>Endereço: Maceió - AL</p>
        </div>
      </div>
      <div class=" text-center text-xs py-2" style="background: rgba(21,199,243,0.904)">
        © 2025 TurisWaves. Todos os direitos reservados.
      </div>
    </footer>
</body>
</html>
