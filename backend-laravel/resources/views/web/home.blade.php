<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora de Veículos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <script src="./home.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<body>
    <header>
        <div class="center"></div>
        <nav>
            <ul>
                <li><a href="./home.html">Home</a></li>
                <li><a href="../Veículos/veiculo.html">Nossos Veículos</a></li>
                <li><a href="#">Reservas Online</a></li>
                 <a class="button" href="../Cadastro/cadastro.html">Cadastro</a> 
            </ul>
        </nav>
 </header>
    <nav>
        <div class="formulario">

            <div class="container">
                <h1>Aluguel de Veículos em Alagoas</h1>
                <p>Aluguel de Veículos em Alagoas: mobilidade e conforto</p>
            </div>

            <div class="form-group">

                <i class="fas fa-map-marker-alt icon"></i>
                <label for="retirada">Retirada</label>
                <input type="text" id="retirada" placeholder="Barra de Santo Antônio">
            </div>
            
            <div class="form-group">
                <label for="data-de-retirada">Data de retirada</label>
                <input type="date" id="date" placeholder="dd/mm/aaaa"> 
            </div>
      
            <div class="form-group">
                <i class="fas fa-map-marker-alt icon"></i>
                <label for="igual-a-retirada">Local de Deixada</label>
                <input type="text" id="igual-a-retirada" placeholder="Paripueira"> 
                </div>
            
            <div class="form-group">
                <label for="data-de-devolucao">Data de Devolucao</label>
                <input type="date" id="date" placeholder="--:--">
           </div>

           <div class="form-group">
                <label for="horario de retirada">Horário de retirada</label>
                <input type="time"  id="time" placeholder="--:--">
            </div>

            <div class="form-group">
                <label for="horario-de-devolucao">Horário de devolução</label>
                <input type="time" id="time">
            </div>
        
            <a class="btn-link" href="../Veículos/veiculo.html">Pesquisar</a> 
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
                <p>A partir de <strong>R$ 158,67/Diária</strong></p>
                <button>Alugar</button>
            </div>

            <div class="cartao">
                <h3>Moto Pcx</h3>
                <p>Grupo CX</p>
                <p> MMAX ou similares</p>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSrWf-7jjaO41htqEEdhNb2mI1aw3p58vn3w&s" alt="Moto Pcx">
                <p>A partir de <strong>R$ 117,57/Diária</strong></p>
                <button>Alugar</button>
              </div>

              <div class="cartao">
                <h3>Catamarã</h3>
                <p>Grupo CT</p>
                <p> Catamarã ou similares</p>
                <img src="https://cdn.prod.website-files.com/5feb69f9ab0dff44b95b78d6/60fee34d0be6c53af1b50174_SY%20Staatenlos%2031.jpg" alt="Catamarã">
                <p>A partir de <strong>R$ 117,57/Diária</strong></p>
                <button>Alugar</button>
              </div>
            </div>
        </div>
    
    </nav>
</body>
</html>