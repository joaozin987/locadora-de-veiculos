
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Locadora de Veículos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>

<body class="poppins bg-white text-gray-800">
    <header class=" shadow-md sticky top-0 z-50 bg-[rgba(21,199,243,0.904)]">
      <nav class="flex items-center justify-between p-4 max-w-7xl mx-auto">
        <div class="text-xl ">TurisWaves</div>
        <ul class="hidden md:flex gap-6 items-center">
          <li><a href="{{ route('Inicio') }}" class="hover:text-blue-600">Home</a></li>
          <li><a href="{{ route('Veículos') }}" class="hover:text-blue-600">Nossos Veículos</a></li>
          <li><a href="#" class="hover:text-blue-600">Reservas Online</a></li>
          <a href="{{ route('Login') }}" class="logout" onclick="logout()">Sair</a>
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
                  <a href="{{ route('Login') }}" class="logout" onclick="logout()">Sair</a>
              </ul>
          </div>
  
   </header>
      <nav>
        <section class=" w-full mx-auto px-2 py-8 bg-[url('https://www.mmeparavoce.com.br/imgc/containers/main/imagens/maravilhas-de-maceio-principais-pontos-turisticos.png/30303e100e1505d94018831ec4d9770b.png')] rounded-sm ">
    
            <h1 class="text-2xl  mb-4 text-center">Aluguel de Veículos em Alagoas</h1>
            <p class="text-center mb-5">Aluguel de Veículos em Alagoas: conforto e segurança</p>
            <div class="grid md:grid-cols-2 gap-6 ">
              <div>
                <label for="retirada" class="block mb-1 ml-6">Retirada</label>
                <input type="text" id="retirada" placeholder="Digite seu município" autocomplete="off" class="w-3/4 border rounded px-2 py-1 ml-4">
              </div>
              <div>
                <label for="data-de-retirada" class="block mb-1 ml-6">Data de retirada</label>
                <input type="date" id="date" class="w-3/4 border rounded px-2 py-1 ml-4">
              </div>
              <div>
                <label for="horario-de-retirada" class="block mb-1 ml-6">Horário de retirada</label>
                <input type="time" id="time" class="w-3/4 border rounded px-2 py-1 ml-4">
              </div>
              <div>
                <label for="data-de-devolucao" class="block mb-1 ml-6">Data de Devolução</label>
                <input type="date" id="date" class="w-3/4 border rounded px-2 py-1 ml-4">
              </div>
              <div>
                <label for="horario-de-devolucao" class="block mb-2 ml-6">Horário de devolução</label>
                <input type="time" id="time" class="w-3/4 border rounded px-2 py-1 ml-4">
              </div>
            </div> 
            <div class="text-center mt-6">
                <a href="{{ route('Pagina') }}" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Continuar</a>
              </div>
                </section>

    <section class="veiculos px-4 bg-slate-200">
        <h1 class="text-3xl mt-4 pt-5 pb-3 text-blue-600 font-black mb-6 text-center">Escolha seu Veículo</h1>
      
        <div class="card-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-4">
          
           <!-- Card 1 -->
          <div class="card bg-white shadow-lg rounded-lg p-4">
            <h2 class="text-lg font-semibold">Jetski</h2>
            <a href="#" class="text-blue-600 hover:text-blue-700 mb-4 block">Mais detalhes</a>
            <img src="assets/img/caption.jpg" alt="" class="w-full h-auto mb-4">
            <div class="precos">
              <p class="text-yellow-500">R$150,00/ 30min <span class="text-red-600">-5%</span></p>
              <p class="text-gray-700">R$145,00/ 30min</p>
            </div>
            <button class="btn1 w-full bg-gray-800 text-white py-2 mt-16 rounded hover:bg-blue-600">Pagar antecipado</button>
          </div>

          <div class="card bg-white shadow-lg rounded-lg p-4">
            <h2 class="text-lg font-semibold">Buggy</h2>
            <a href="#" class="text-blue-600 hover:text-blue-700 mb-4 block">Mais detalhes</a>
            <img src="assets/img/05.jpg" alt="" class="w-full h-auto mb-4">
            <div class="precos">
              <p class="text-yellow-500">R$120,00/hora <span class="text-red-600">-20%</span></p>
              <p class="text-gray-700">R$100,00/hora</p>
            </div>
            <button class="btn1 w-full bg-gray-800 text-white py-2 mt-16 rounded hover:bg-blue-600">Pagar antecipado</button>
          </div>
          
          <!-- Card 3 -->
          <div class="card-esgotado bg-white shadow-lg rounded-lg p-4 filter brightness-50">
            <h2 class="text-lg font-semibold">Lancha</h2>
            <a href="#" class="text-blue-600 hover:text-blue-700 mb-4 block">Mais detalhes</a>
            <img src="assets/img/Cópia-de-DJI_0805-scaled.jpg" alt="" class="w-full h-auto mb-4">
            <div class="status">
              <p class="text-red-600 font-bold text-xl">Indisponível</p>
            </div>
            <button class="btn consultar w-full bg-blue-600 text-white py-2 mt-14 rounded">Consultar Lojas Próximas</button>
          </div>
          
          <!-- Card 4 -->
          <div class="card bg-white shadow-lg rounded-lg p-4">
            <h2 class="text-lg font-semibold">Catamarã</h2>
            <a href="#" class="text-blue-600 hover:text-blue-700 mb-4 block">Mais detalhes</a>
            <img src="assets/img/c2c12a8b-94c7-4412-b549-06459f29fb82.large.jpg" alt="" class="w-full h-auto mb-4">
            <div class="precos">
              <p class="text-yellow-500">R$120,00/p pessoa <span class="text-red-600">-5%</span></p>
              <p class="text-gray-700">R$115,00/p pessoa</p>
            </div>
            <button class="btn1 w-full bg-gray-800 text-white py-2 mt-4 rounded hover:bg-blue-600">Pagar antecipado</button>
          </div>
          
          <!-- Card 5 -->
          <div class="card bg-white shadow-lg rounded-lg p-4">
            <h2 class="text-lg font-semibold">Hyundai HB20</h2>
            <a href="#" class="text-blue-600 hover:text-blue-700 mb-4 block">Mais detalhes</a>
            <img src="assets/img/03-hb20-2013_novembro2017.jpg" alt="" class="w-full h-auto mb-4">
            <div class="precos">
              <p class="text-yellow-500">R$120,00/dia <span class="text-red-600">-5%</span></p>
              <p class="text-gray-700">R$115,00/dia</p>
            </div>
            <button class="btn1 w-full bg-gray-800 text-white py-2 mt-12 rounded hover:bg-blue-600">Pagar antecipado</button>
          </div>
          
          <!-- Card 6 -->
          <div class="card bg-white shadow-lg rounded-lg p-4">
            <h2 class="text-lg font-semibold">Volkswagen up!</h2>
            <a href="#" class="text-blue-600 hover:text-blue-700 mb-4 block">Mais detalhes</a>
            <img src="assets/img/images (3).jpeg" alt="porte-medio" class="w-full h-auto mb-4">
            <div class="precos">
              <p class="text-yellow-500">R$90,00/dia <span class="text-red-600">-10%</span></p>
              <p class="text-gray-700">R$80,00/dia</p>
            </div>
            <button class="btn1 w-full bg-gray-800 text-white py-2 mt-4 rounded hover:bg-blue-600">Pagar antecipado</button>
          </div>
          
          <!-- Card 7 -->
          <div class="card-esgotado bg-white shadow-lg rounded-lg p-4 filter brightness-50">
            <h2 class="text-lg font-semibold">Corolla</h2>
            <a href="#" class="text-blue-600 hover:text-blue-700 mb-4 block">Mais detalhes</a>
            <img src="assets/img/corolla.jpg" alt="" class="w-full h-auto mb-4">
            <div class="status">
              <p class="text-red-600 font-bold text-xl">Indisponível</p>
            </div>
            <button class="btn consultar w-full bg-blue-600 text-white py-2 mt-4 rounded hover:bg-blue-700">Consultar Lojas Próximas</button>
          </div>
          
          <!-- Card 8 -->
          <div class="card bg-white shadow-lg rounded-lg p-4">
            <h2 class="text-lg font-semibold">Chevrolet Onix</h2>
            <a href="#" class="text-blue-600 hover:text-blue-700 mb-4 block">Mais detalhes</a>
            <img src="assets/img/images (2).jpeg" alt="" class="w-full h-auto mb-4">
            <div class="precos">
              <p class="text-yellow-500">R$180,00/dia <span class="text-red-600">-20%</span></p>
              <p class="text-gray-700">R$160,00/dia</p>
            </div>
            <button class="btn1 w-full bg-gray-800 text-white py-2 mt-6 rounded hover:bg-blue-600">Pagar antecipado</button>
          </div>
          
          <!-- Card 9 -->
          <div class="card bg-white shadow-lg rounded-lg p-4">
            <h2 class="text-lg font-semibold">Honda CG160</h2>
            <a href="#" class="text-blue-600 hover:text-blue-700 mb-4 block">Mais detalhes</a>
            <img src="https://motociclismoonline.com.br/wp-content/uploads/2024/10/Honda-CG-160-Cargo-2025.jpg" alt="" class="w-full h-auto mb-4">
            <div class="precos">
              <p class="text-yellow-500">R$70,00/dia <span class="text-red-600">-5%</span></p>
              <p class="text-gray-700">R$65,00/dia</p>
            </div>
            <button class="btn1 w-full bg-gray-800 text-white py-2 mt-12 rounded hover:bg-blue-600">Pagar antecipado</button>
          </div>
          
          <!-- Card 10 -->
          <div class="card bg-white shadow-lg rounded-lg p-4">
            <h2 class="text-lg font-semibold">Honda Bros 160</h2>
            <a href="#" class="text-blue-600 hover:text-blue-700 mb-4 block">Mais detalhes</a>
            <img src="assets/img/Honda-Bros-ABS-2025-Cinza-1.jpeg" alt="" class="w-full h-auto mb-4">
            <div class="precos">
              <p class="text-yellow-500">R$70,00/dia <span class="text-red-600">-10%</span></p>
              <p class="text-gray-700">R$60,00/dia</p>
            </div>
            <button class="btn1 w-full bg-gray-800 text-white py-2 mt-12 rounded hover:bg-blue-600">Pagar antecipado</button>
          </div>
          
          <!-- Card 11 -->
          <div class="card-esgotado bg-white shadow-lg rounded-lg p-4 filter brightness-50">
            <h2 class="text-lg font-semibold">Kawasaki Ninja</h2>
            <a href="#" class="text-blue-600 hover:text-blue-700 mb-4 block">Mais detalhes</a>
            <img src="assets/img/Kawasaki-Ninja-ZX-10R-SE_Estúdio-01.jpg" alt="" class="w-full h-auto mb-4">
            <div class="status">
              <p class="text-red-600 font-bold text-xl">Indisponível</p>
            </div>
            <button class="btn consultar w-full bg-blue-600 text-white py-2 mt-4 rounded hover:bg-blue-700">Consultar Lojas Próximas</button>
          </div>
          
          <!-- Card 12 -->
          <div class="card bg-white shadow-lg rounded-lg p-4">
            <h2 class="text-lg font-semibold">Honda CB Twister</h2>
            <a href="#" class="text-blue-600 hover:text-blue-700 mb-4 block">Mais detalhes</a>
            <img src="assets/img/CB-Twister_6.jpg" alt="" class="w-full h-auto mb-4">
            <div class="precos">
              <p class="text-yellow-500">R$86,36/dia <span class="text-red-600">-5%</span></p>
              <p class="text-gray-700">R$90,90/dia</p>
            </div>
            <button class="btn1 w-full bg-gray-800 text-white py-2 mt-4 rounded hover:bg-blue-600">Pagar antecipado</button>
          </div>
        </div>
      </section>
      

        <section class="w-full flex justify-center px-4">
        <div class="bg-[rgba(21,199,243,0.904)] p-6 rounded-md mt-7 w-full max-w-2xl text-black shadow-md">
          <h1 class="font-serif text-lg text-center mb-6">
            Dicas, promoções e ofertas exclusivas para Aluguel de Veículos no seu e-mail.
          </h1>

          <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

            <div class="w-full md:w-1/2">
              <label for="Nome" class="block mb-1">Nome</label>
              <input
                class="p-2 w-full rounded-md text-black"
                type="text"
                id="Nome"
                placeholder="Digite seu nome"
              />
            </div>

            <div class="w-full md:w-1/2">
              <label for="e-mail" class="block mb-1">Email</label>
              <input
                class="p-2 w-full rounded-md text-black"
                type="email"
                id="e-mail"
                placeholder="Digite seu e-mail"
              />
            </div>
          </div>
          
          <div class="w-full mt-4">
            <button
              class="w-full md:w-1/2 mx-auto block p-2 rounded-md bg-white text-black font-semibold hover:bg-slate-100 transition" >Enviar</button>
          </div>
        </div>
  </section>


        <footer class="bg-[rgba(21,199,243,0.904)] text-black mt-12">
            <div class="max-w-6xl mx-auto px-4 py-8 grid md:grid-cols-3 gap-6 text-sm">
              <div>
                <h3 class="font-bold mb-2">TurisWaves</h3>
                <p>Explore Alagoas com conforto e segurança. Alugue carros, motos ou embarcações de forma rápida e segura.</p>
              </div>
              <div>
                <h4 class="font-bold mb-2">Links Rápidos</h4>
                <ul class="space-y-1">
                  <li><a href="{{ route('Inicio') }}" class="hover:underline">Home</a></li>
                  <li><a href="{{ route('Veículos') }}" class="hover:underline">Veículos</a></li>
                  <li><a href="#" class="hover:underline">Reservas</a></li>
                </ul>
              </div>
              <div>
                <h4 class="font-bold mb-2">Contato</h4>
                <p>Email: contato@turiswaves.com</p>
                <p>Telefone: (82) 99999-9999</p>
                <p>Endereço: Maceió - AL</p>
              </div>
            </div>
            <div class="bg-[rgba(21,199,243,0.904)] text-center text-xs py-2">
              © 2025 TurisWaves. Todos os direitos reservados.
            </div>
          </footer>

</body>
</html>