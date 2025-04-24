
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
        <section class=" w-full mx-auto px-3 py-8 bg-[url('https://www.mmeparavoce.com.br/imgc/containers/main/imagens/maravilhas-de-maceio-principais-pontos-turisticos.png/30303e100e1505d94018831ec4d9770b.png')] rounded-sm ">
    
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
                
        <section class="bg-gray-100 py-10 shadow-2xl">
            <div class="max-w-4xl mx-auto px-4  ">
            <h2 class="text-2xl  mb-4 text-center">Alugue um Veículo para sua Próxima Viagem</h2>
            <p class="text-center mb-8"></p>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-slate-50 p-3 rounded-md shadow-2xl">
                <h3 class=" text-lg">Carro Sedan Executivo AT</h3>
                <p>Chevrolet Cruze</p>
                <img src="https://unidashmlrac.blob.core.windows.net/wp-content/2021/03/at_chevrolet_cruze.png" class="w-full h-48 object-contain" alt="Carro">
                <p class="mt-2">R$200,67/Diária</p>
                <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Alugar</button>
                </div>
                <div class="bg-slate-50 p-3 rounded-md shadow-2xl">
                <h3 class=" text-lg">Moto Pcx</h3>
                <p>MMAX ou similares</p>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSrWf-7jjaO41htqEEdhNb2mI1aw3p58vn3w&s" class="w-full h-48 object-contain" alt="Moto">
                <p class="mt-2">R$80,57/Diária</p>
                <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Alugar</button>
                </div>
                <div class="bg-white p-3 rounded-md shadow-2xl">
                <h3 class=" text-lg">Catamarã</h3>
                <p>Catamarã</p>
                <img src="https://cdn.prod.website-files.com/5feb69f9ab0dff44b95b78d6/60fee34d0be6c53af1b50174_SY%20Staatenlos%2031.jpg" class="w-full h-48 object-contain" alt="Catamarã">
                <p class="mt-2">R$2550,57/Diária</p>
                <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Alugar</button>
                </div>
            </div>
            </div>
        </section>

        <section class="min-h-screen px-4 py-12 mb-12 bg-white rounded-xl shadow-[0_2px_14px_rgba(80,80,80,0.6)]">

            <div class="max-w-6xl  mx-auto px-4 grid md:grid-cols-2 gap-6 items-center ">
              <div>
                <h2 class=" mt-0 text-3xl black mb-4">Conheça um pouco sobre Alagoas</h2>
                <p class="mb-2 text-lg text-gray-700 leading-relaxed text-justify"> <span class="text-black text-xl">São Miguel dos Milagres</span> é um destino encantador do litoral alagoano, famoso por suas praias intocadas, mar calmo, águas cristalinas e coqueirais. A região oferece experiências únicas, como jangadas para acessar piscinas naturais. É o local ideal para quem busca descanso, contato com a natureza e a cultura local, além de contar com pousadas charmosas e uma deliciosa culinária de frutos do mar.</p>
              </div>
              <div>
                <img src="assets/img/Sao-Miguel-dos-Milagres-AL.jpg" alt="São Miguel dos Milagres" class="rounded-lg shadow">
              </div>
              <p class="mb-2 text-lg font text-gray-700 leading-relaxed text-justify">
                <span class="text-black text-xl">Esses balanços, fixados diretamente no mar,</span> são símbolos da tranquilidade de São Miguel dos Milagres. Feitos com madeira rústica e decorados com flores, são perfeitos para fotos ou para relaxar ao som da brisa do mar, refletindo a simplicidade e beleza do lugar.
                Esses resumos mantêm o foco nos principais pontos do texto original, oferecendo uma visão geral de.
              </p>
              <div>
                <img src="assets/img/provas-de-que-alagoas-e-o-caribe-brasileiro-7.webp" alt="" class="rounded-lg shadow h-[400px] w-[600px]">
              </div>
            </div>
          </section>
        
              <script src="https://cdn.jsdelivr.net/npm/alpinejs@3" defer></script>
        
              <section class="bg-white py-5  rounded-2xl ">
                <div class="max-w-6xl mx-auto px-4">
                  <h2 class="text-2xl black text-center text-zinc-900 mb-6">Passeios Incríveis em Alagoas</h2>
                  <div  class="relative rounded-xl" x-data="{ currentSlide: 0, slides: ['assets/img/praia-do-gunga-alagoas-edit-43.jpg', 'assets/img/DSC01326.jpg', 'assets/img/passeio-para-as-piscinas-naturais-de-Maragogi.jpg'] }">
                      <div x-text="currentSlide"></div>
                      <div class="overflow-hidden rounded-lg shadow-sm w-auto h-[360px]">
                        <template x-for="(slide, index) in slides" :key="index">
                          <div x-show="currentSlide === index" x-transition:enter="transition-opacity duration-300" x-transition:leave="transition-opacity duration-300">
                            <img :src="slide"
                            alt="Passeio"
                            x-show="currentSlide === index"
                            x-transition:enter="transition-opacity duration-700"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="transition-opacity duration-700"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="absolute inset-0 w-full h-full object-cover" />
                          </div>
                        </template>
                      </div>
                      <div class="absolute inset-0 flex items-center justify-between px-4">
                        <button @click="currentSlide = (currentSlide - 1 + slides.length) % slides.length" class="bg-stone-600 text-white p-2 rounded-xl shadow">
                          <i class="bi bi-chevron-left"></i>
                        </button>
                        <button @click="currentSlide = (currentSlide + 1) % slides.length" class="bg-stone-600 text-white p-2 rounded-xl shadow">
                          <i class="bi bi-chevron-right"></i>
                        </button>
                      </div>
                    </div>
            
          </div>
        </section>
        
              <section class="w-full flex justify-center px-4">
                <div class="bg-[rgba(21,199,243,0.904)] p-6 rounded-md mt-7 w-full max-w-2xl text-black shadow-md">
                  <h1 class="serif text-lg text-center mb-6">
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
                      class="w-full md:w-1/2 mx-auto block p-2 rounded-md bg-white text-black semibold hover:bg-slate-100 transition" >Enviar</button>
                  </div>
                </div>
          </section>
        
        
                <footer class="bg-[rgba(21,199,243,0.904)] text-black mt-12">
                  <div class="max-w-6xl mx-auto px-4 py-8 grid md:grid-cols-3 gap-6 text-sm">
                    <div>
                      <h3 class=" mb-2">TurisWaves</h3>
                      <p>Explore Alagoas com conforto e segurança. Alugue carros, motos ou embarcações de forma rápida e segura.</p>
                    </div>
                    <div>
                      <h4 class=" mb-2">Links Rápidos</h4>
                      <ul class="space-y-1">
                        <li><a href="{{ route('Inicio') }}" class="hover:underline">Home</a></li>
                        <li><a href="{{ route('Veículos') }}" class="hover:underline">Veículos</a></li>
                        <li><a href="#" class="hover:underline">Reservas</a></li>
                      </ul>
                    </div>
                    <div>
                      <h4 class=" mb-2">Contato</h4>
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