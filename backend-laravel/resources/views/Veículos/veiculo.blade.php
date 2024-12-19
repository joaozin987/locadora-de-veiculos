<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora de Veículos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/veiculo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="assets/js/veiculo.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<body>
    <header>

        <div class="center"></div>
        <nav>
            <ul>
                <li><a href="{{ route('Inicio') }}">Home</a></li>
                <li><a href="{{ route('Veículos') }}">Nossos Veículos</a></li>
                <li><a href="#">Reservas Online</a></li>
                <a class="button" href="{{ route('Cadastro') }}">Cadastre-se</a>
                <a class="button" href="{{ route('Login') }}">Entrar</a>
            </ul>
        </nav>
        </header>
        <nav>
            <div class="formulario">
    
                <div class="container">
                    <h1>Aluguel de Veículos em Alagoas</h1>
                    <p class="alug">Aluguel de Veículos em Alagoas: mobilidade e conforto</p>
                </div>
    
                <div class="form-group">
    
                    <i class="fas fa-map-marker-alt icon"></i>
                    <label for="retirada">Retirada</label>
                    <input type="text" id="retirada" placeholder="Digite seu município" autocomplete="off">
                </div>
                
                <div class="form-group">
                    <label for="data-de-retirada">Data de retirada</label>
                    <input type="date" id="date" placeholder="dd/mm/aaaa"> 
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
            
                <a class="button" href="../Veículos/veiculo.html">Continuar</a> 
            </div>
        </div>
        <section class="veiculos">
            <h1>Escolha seu Veículo</h1>

            <div class="card-container">
                
                <!--Card 1-->

                <div class="card">
                    <h2>Jetski</h2>
                    <a href="#" class="detalhes">Mais detalhes</a>
                    <img src="assets/img/caption.jpg" alt="" width="">
                    <div class="precos">
                    <p class="desconto">R$ 150,00/ 30min <span>-5%</span></p>
                    <p class="normal">R$ 145,00/ 30min</p>
                </div>
                <div class="botoes">
                    <button class="btn2">Pagar na loja</button>
                    <button class="btn antecipado">Pagar antecipado</button>
                </div>
                </div>

                  <!-- Card 2 -->

            <div class="card">
                <h2>Buggy</h2>
                <a href="#" class="detalhes">Mais detalhes</a>
                <img src="assets/img/05.jpg" alt="" width="">
                <div class="precos">
                    <p class="desconto">R$ 120,00/hora<span>-%20</span></p>
                    <p class="normal">R$ 100,00/hora</p>
                </div>
                <div class="botoes">
                    <button class="btn1">Pagar na loja</button>
                    <button class="btn1">Pagar antecipado</button>
                </div>
            </div>

                 <!--Card 3-->

            <div class="card-esgotado">
                <h2>Lancha</h2>
                <a href="#" class="detalhes">Mais detalhes</a>
                <img src="assets/img/Cópia-de-DJI_0805-scaled.jpg" height="200vh" width="290">
                <div class="status">
                    <p class="esgotado-texto"> Indisponível</p>
                </div>
                <div class="botoes">
                    <button class="btn consultar">Consultar Lojas Próximas</button>
                </div>
            </div>
                <!--Card 4-->

            <div class="card">
                <h2>Catamarã</h2>
                <a href="#" class="detalhes">Mais detalhes</a>
                <img src="assets/img/c2c12a8b-94c7-4412-b549-06459f29fb82.large.jpg" alt="">
                <div class="precos">
                <p class="desconto">R$ 120,00/p pessoa <span>-5%</span></p>
                <p class="normal">R$ 115,00/p pessoa</p>

            <div class="botoes">
                    <button class="btn">Pagar na loja</button>
                    <button class="btn">Pagar antecipado</button>
                </div>
             </div>
        </section>
       
        <section class="veiculos">
         

            <div class="card-container">
                
                <!--Card 5-->

                <div class="card">
                    <h2>Hyundai HB20</h2>
                    <a href="#" class="detalhes">Mais detalhes</a>
                    <img src="assets/img/03-hb20-2013_novembro2017.jpg" alt="" width="">
                    <div class="precos">
                    <p class="desconto">R$ 120,00/dia <span>-5%</span></p>
                    <p class="normal">R$ 115,00/dia</p>
                </div>
                <div class="botoes">
                    <button class="btn3">Pagar na loja</button>
                    <button class="btn antecipado">Pagar antecipado</button>
                </div>
                </div>

                  <!-- Card 6 -->

            <div class="card">
                <h2>Volkswagen up!</h2>
                <a href="#" class="detalhes">Mais detalhes</a>
                <img src="assets/img/images (3).jpeg" alt="porte-medio" width="">
                <div class="precos">
                    <p class="desconto">R$ 90,00/dia <span>-%10</span></p>
                    <p class="normal">R$ 80,00/dia</p>
                </div>
                <div class="botoes">
                    <button class="btn1">Pagar na loja</button>
                    <button class="btn">Pagar antecipado</button>
                </div>
            </div>

                 <!--Card 7-->

            <div class="card-esgotado">
                <h2>Corolla</h2>
                <a href="#" class="detalhes">Mais detalhes</a>
                <img src="assets/img/corolla.jpg" alt="" width="270">
                <div class="status">
                    <p class="esgotado-texto"> Indisponível</p>
                </div>
                <div class="botoes">
                    <button class="btn consultar">Consultar Lojas Próximas</button>
                </div>
            </div>
                <!--Card 8-->

            <div class="card">
                <h2>Chevrolet Onix</h2>
                <a href="#" class="detalhes">Mais detalhes</a>
                <img src="assets/img/images (2).jpeg" alt="">
                <div class="precos">
                <p class="desconto">R$ 180,00/dia <span>-20%</span></p>
                <p class="normal">R$ 160,/dia</p>

            <div class="botoes">
                    <button class="btn4">Pagar na loja</button>
                    <button class="btn">Pagar antecipado</button>
                </div>
             </div>
        </section>

        <section class="veiculos">
         

            <div class="card-container">
                
                <!--Card 9-->

                <div class="card">
                    <h2>Honda CG160 </h2>
                    <a href="#" class="detalhes">Mais detalhes</a>
                    <img src="assets/img/download.avif" alt="" width="">
                    <div class="precos">
                    <p class="desconto">R$ 70,00/dia <span>-5%</span></p>
                    <p class="normal">R$ 65,00/dia</p>
                </div>
                <div class="botoes">
                    <button class="btn3">Pagar na loja</button>
                    <button class="btn antecipado">Pagar antecipado</button>
                </div>
                </div>

                  <!-- Card 10 -->

            <div class="card">
                <h2> Honda Bros 160</h2>
                <a href="#" class="detalhes">Mais detalhes</a>
                <img src="assets/img/Honda-Bros-ABS-2025-Cinza-1.jpeg" alt="" width="">
                <div class="precos">
                    <p class="desconto">R$ 70,00/dia <span>-%10</span></p>
                    <p class="normal">R$ 60,00/dia</p>
                </div>
                <div class="botoes">
                    <button class="btn1">Pagar na loja</button>
                    <button class="btn">Pagar antecipado</button>
                </div>
            </div>

                 <!--Card 11-->

            <div class="card-esgotado">
                <h2>Kawasaki Ninja</h2>
                <a href="#" class="detalhes">Mais detalhes</a>
                <img src="assets/img/Kawasaki-Ninja-ZX-10R-SE_Estúdio-01.jpg" alt="" width="270">
                <div class="status">
                    <p class="esgotado-texto"> Indisponível</p>
                </div>
                <div class="botoes">
                    <button class="btn consultar">Consultar Lojas Próximas</button>
                </div>
            </div>
                <!--Card 12-->

            <div class="card">
                <h2>Honda CB Twister</h2>
                <a href="#" class="detalhes">Mais detalhes</a>
                <img src="assets/img/CB-Twister_6.jpg" alt="">
                <div class="precos">
                <p class="desconto">R$ 86,36/dia <span>-5%</span></p>
                <p class="normal">R$ 90,90/dia</p>

            <div class="botoes">
                    <button class="btn4">Pagar na loja</button>
                    <button class="btn">Pagar antecipado</button>
                </div>
             </div>
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
            
</body>
</html>