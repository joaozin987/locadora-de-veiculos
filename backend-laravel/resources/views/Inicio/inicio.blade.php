<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora de Veículos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/inicio.css">
    <script src="assets/js/inicio.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<body>
    <header>
        <nav class="nav-bar">
           <div class="logo">
            <h4>TurisWaves</h4>
           </div>
            <div class="center">
            <ul>
                <li><a  href="{{ route('Inicio') }}">Home</a></li>
                <li><a  href="{{ route('Veículos') }}">Nossos Veículos</a></li>
                <li><a  href="#">Reservas Online</a></li>
                <a class="button" href="{{ route('Cadastro') }}">Cadastre-se</a>
                <a class="button" href="{{ route('Login') }}">Entrar</a>
            </ul>
        </div>
    
        <div class="mobile-menu-icon">
            <button onclick="menuShow()"><i class="bi bi-list"></i></button>
        </div>
        </nav>
        <div class="menu-mobile">
            <ul>
                <li> <li><a  href="{{ route('Inicio') }}">Home</a></li>
                <li><a  href="{{ route('Veículos') }}">Nossos Veículos</a></li>
                <li><a  href="#">Reservas Online</a></li>
                <a class="button" href="{{ route('Cadastro') }}">Cadastre-se</a>
                <a class="button" href="{{ route('Login') }}">Entrar</a>
            </ul>
        </div>
 </header>
    <nav>
        <div class="formulario">

            <div class="container">
                <h1>Aluguel de Veículos em Alagoas</h1>
                <p>Aluguel de Veículos em Alagoas: conforto e segurança</p>
            </div>

            <div class="form-group">

                <i class="fas fa-map-marker-alt icon"></i>
                <label for="retirada">Retirada</label>
                <input type="text" id="retirada" placeholder="Digite seu município" autocomplete="off">
            </div>
            
            <div class="form-group">
                <label for="data-de-retirada">Data de retirada</label>
                <input type="date" id="date" onclick="teste()" value="Botao"> 
            </div>
      
            <div class="form-group">
                <label for="horario de retirada">Horário de retirada</label>
                <input type="time"  id="time" placeholder="--:--">
            </div>

            <div class="form-group">
                <label for="data-de-devolucao">Data de Devolucao</label>
                <input type="date" id="date" placeholder="--:--">
           </div>

            <div class="form-group">
                <label for="horario-de-devolucao">Horário de devolução</label>
                <input type="time" id="time">
            </div>
        
            <a class="button" href="{{ route('Veículos') }}">Continuar</a> 
        </div>
    </div>
        <div class="alugue">
            <h2>Alugue um Veículo para sua Próxima Viagem</h2>
            <p>Pesquise por tipo de Veículo</p>

            <div class="veiculos-container">
        
            <div class="cartao">
                <h3>Carro Sedan Executivo AT</h3>
                <p>Grupo AT</p>
                <p>Chevrolet Cruze | Toyota Corolla ou Similares</p>
                <img src="https://unidashmlrac.blob.core.windows.net/wp-content/2021/03/at_chevrolet_cruze.png" alt="Carro Sedan Executivo">
                <p>A partir de <strong>R$ 250,67/Diária</strong></p>
                <button>Alugar</button>
            </div>

            <div class="cartao">
                <h3>Moto Pcx</h3>
                <p>Grupo CX</p>
                <p> MMAX ou similares</p>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSrWf-7jjaO41htqEEdhNb2mI1aw3p58vn3w&s" alt="Moto Pcx">
                <p>A partir de <strong>R$ 80,57/Diária</strong></p>
                <button>Alugar</button>
              </div>

              <div class="cartao">
                <h3>Catamarã</h3>
                <p>Grupo CT</p>
                <p> Catamarã ou similares</p>
                <img src="https://cdn.prod.website-files.com/5feb69f9ab0dff44b95b78d6/60fee34d0be6c53af1b50174_SY%20Staatenlos%2031.jpg" alt="Catamarã">
                <p>A partir de <strong>R$ 2550,57/Diária</strong></p>
                <button>Alugar</button>
              </div>
            </div>
        </div>

        <!--Sobre alagoas-->
      <section class="sobre">
        <div class="flex">
            <div class="txt-sobre">
                <h1>Conheça um pouco sobre Alagoas</h1>
            
                <div class="img">
                    <img src="assets/img/Sao-Miguel-dos-Milagres-AL.jpg" alt="">
                </div>

                <div class="texto">
                <p >Alagoas situado na região Nordeste do Brasil, é um estado encantador que atrai turistas de todas as partes do mundo devido à sua rica cultura, gastronomia e, principalmente, às suas paisagens naturais deslumbrantes. Com um litoral banhado por águas cristalinas, praias paradisíacas e uma hospitalidade única, o estado é conhecido como o "Caribe Brasileiro".</p>
                
                <p>Entre os diversos pontos turísticos de Alagoas, São Miguel dos Milagres se destaca como um verdadeiro santuário de tranquilidade e beleza. Localizado na Costa dos Corais, a cerca de 100 km da capital Maceió, este pequeno município é famoso por suas praias de areia branca, mar calmo e piscinas naturais formadas por recifes durante a maré baixa.</p>
                <p>São Miguel dos Milagres, com sua atmosfera tranquila e beleza natural inigualável, é um destino que oferece mais do que belas paisagens: proporciona uma experiência de renovação e conexão com a essência do Nordeste brasileiro. Se você busca momentos inesquecíveis em um pedaço do paraíso, Alagoas e seus encantos são o lugar certo para explorar.</p>
                </div>
            </div>
        </div>
      </section>

      <!--Sobre turismo-->
      <section class="turismo">
        <div class="flex">
            <div class="txt-turismo">
                <h1>Descubra o Caribe Brasileiro em Alagoas!</h1>
                <p> As Galés de Maragogi são as mais conhecidas e atraem turistas do mundo todo que buscam essa experiência única de conexão com a natureza. </p>
                <div class="img-t">
                    <img src="assets/img/piscinas-naturais-maceio-maragogi.jpg" alt="">
                    <img src="assets/img/passeio-para-as-piscinas-naturais-de-Maragogi.jpg" alt="">
                    <img src="assets/img/provas-de-que-alagoas-e-o-caribe-brasileiro-7.webp" alt="200px">
                </div>
                </div>
            </div>
        </div>
      </section>

      <section class="passeio">
        <div class="flex">
            <div class="passeios">
                <h2>Passeios Turísticos Do Gunga</h2>
                <p class="onee">Os passeios pelo Gunga são uma experiência única e inesquecível para quem visita essa região deslumbrante.</p>
                <p class="onee">Os passeios nas falésias do Gunga oferecem uma emocionante aventura com paisagens deslumbrantes, atividades de buggy, caminhadas, rapel e tirolesa. Uma experiência imperdível para os amantes da natureza e da aventura.</p>
            
                <div class="img-p">
                <img src="assets/img/passeio-de-quadriciclo (1).jpg" alt="">
                <img src="assets/img/praia-do-gunga-alagoas-edit-43.jpg" alt="">
                <img src="assets/img/falesias-praia-do-gunga.jpg" alt="200px">
            </div>
        </div>
        </div>
      </section>

      <section class="rodape">
        <div class="roda">
            <h1>Dicas, promoções e ofertas exclusivas para Aluguel de Veiculos no seu e-mail.</p>
                <h1>

        <label for="Nome">Nome </label>
        <input type="text" id="Nome" placeholder="Digite seu nome">

        <label for="e-mail">E-mail</label>
        <input type="text"  id="e-mail" placeholder="Digite seu e-mail">

        <button class="enviar">Enviar</button>
    </section>

        <footer class="main-footer">
            <div class="section">
                <h1>Alugue um veiculo</h1>
    
            <p class="p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi veniam officiis veritatis quis eius odio odit sapiente temporibus nesciunt facere, atque omnis corporis hic ipsam quaerat neque quos alias ab!</p>
        </div>
            <div class="section">
            <h1>Atendimento ao cliente</h1>
            <a class="btn-social" href="https://www.instagram.com/joaosantoszz__/" target="_blank">
                <i class="bi bi-instagram"></i>
            </a>
            <a class="btn-social" href="https://wa.me/5582998271078" target="_blank">
                <i class="bi bi-whatsapp"></i>
            </a>
                        
            <p class="p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vel ducimus exercitationem odio autem inventore nisi rerum, eveniet quo aut atque ex aliquid porro, nobis distinctio quam ab officiis natus?</p>
            
        </div>
        </footer>
    </nav>
</body>
</html>