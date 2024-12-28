function menuShow(){
  let menuMobile = document.querySelector('.menu-mobile');
  if(menuMobile.classList.contains('open')){
     menuMobile.classList.remove('open');
     document.querySelector('.icon').src = "assets/img/menu.png";
  } else{
   menuMobile.classList.add('open');
    document.querySelector('.icon').src = "assets/img/close.png";
  }
}


function setupTimeAndDateInputs() {
    const inputs = document.querySelectorAll('input[type="time"], input[type="date"]');
  
    inputs.forEach(input => {
      input.addEventListener('click', () => {
        if (typeof input.showPicker === 'function') {
          input.classList.add('active'); // Adiciona feedback visual
          setTimeout(() => {
            input.showPicker();
          }, 7); // Suaviza o timing para evitar comportamento abrupto
        } else {
          console.warn('showPicker não é suportado neste navegador.');
        }
      });
  
      // Remove o efeito visual após o uso
      input.addEventListener('blur', () => {
        input.classList.remove('active');
      });
    });
  }
  
  // Chamada da função para configurar os inputs
  setupTimeAndDateInputs();


const url = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/AL/municipios';
let municipios = []; // Variável global para armazenar os dados

    // Carrega os dados dos municípios
    $(document).ready(function() {
        $.getJSON(url, function(data) {
            municipios = data; // Armazena os dados na variável
        });
    });

    // Evento de digitação no input
    $("#retirada").on("input", function() {
        const termo = $(this).val().toLowerCase();
        let sugestoes = "";

        // Filtra os municípios que começam com as letras digitadas
        const filtrados = municipios.filter(mun =>
            mun.nome.toLowerCase().startsWith(termo)
        );

        // Gera as sugestões dinamicamente
        if (filtrados.length > 0 && termo !== "") {
            sugestoes = "<ul class='suggestions'>";
            filtrados.forEach(mun => {
                sugestoes += `<li>${mun.nome}</li>`;
            });
            sugestoes += "</ul>";
        }

        // Remove sugestões antigas e adiciona novas
        $(".suggestions").remove();
        $(this).after(sugestoes);

        // Preenche o input ao clicar numa sugestão
        $(".suggestions li").on("click", function() {
            $("#retirada").val($(this).text());
            $(".suggestions").remove();
        });
    });

    // Remove as sugestões ao clicar fora do input
    $(document).on("click", function(e) {
        if (!$(e.target).closest(".form-group").length) {
            $(".suggestions").remove();
        }
    });



    function logout() {
      alert("Você saiu da conta!"); 
      window.location.href = "login.html"; 
  }


  let count = 1;
  document.getElementById("radio1").checked = true;

  setInterval(function(){
    nextImage();
  },5000)

  function nextImage(){
    count++;
    if(count>2){
      count = 1;
    }
    document.getElementById("radio"+count).checked = true;
  }