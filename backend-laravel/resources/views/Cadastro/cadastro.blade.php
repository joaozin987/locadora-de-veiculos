<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora de Veículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="assets/js/cadastro.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
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
    
    <section class=" flex justify-center ">

    <div class=" mt-8 p-14 rounded-lg shadow-lg w-96 text-left  bg-gray-300 " >
        <h1 class="text-black text-4xl font-serif mb-6 text-center">Crie sua conta</h1>
        <form method="POST" action="{{ route('Cadastro.store') }}">
          @csrf
      
          <label for="nome" class="block text-black mb-2 text-lg font-serif">Nome Completo</label>
          <input type="text" id="name" name="name" class="w-full p-2 mb-4 border border-black rounded" placeholder="Digite seu Nome Completo">
         
          @error('name')
            <p>{{ $message }} </p>
          @enderror

          <label for="email" class="block text-black mb-2 text-lg font-serif">E-mail:</label>
          <input type="email" id="email" name="email" class="w-full p-2 mb-4 border border-black rounded" placeholder="Digite seu E-mail">
         
          @error('email')
            <p>{{ $message }} </p>
         @enderror

          <label for="senha" class="block text-black mb-2 text-lg font-serif">Senha:</label>
          <input type="password" id="password" name="password" class="w-full p-2 mb-4 border border-black rounded" placeholder="Digite sua senha" maxlength="30">
          
          @error('password')
          <p>{{ $message }} </p>
          @enderror

          <button type="submit" class="w-full text-center bg-black text-white py-2 rounded-lg block hover:bg-cadetblue hover:shadow-md">Cadastre-se</button>
         
          @if (session('status'))
          <div class="mt-4 p-2 bg-red-100 border border-red-400 text-red-700 rounded-lg">
              <span class="font-medium">{{ session('status') }}</span>
          </div>
          @endif
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
