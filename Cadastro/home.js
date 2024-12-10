 //funcao de clique para a data

const inputs = document.querySelectorAll('input[type="date"]');

inputs.forEach(input => {
  input.addEventListener('focus', () => {
    if (typeof input.showPicker === 'function') {
      input.blur();
      setTimeout(() => {
        input.showPicker();
      }, 50);
    } else {
      console.warn('showPicker não é suportado neste navegador.');
    }
  });
});


   $(document).ready(function(){
        $('#telefone').mask('(00) 00000-0000');
});
    document.getElementById('telefone').addEventListener('input', function (e) {
        e.target.value = e.target.value.replace(/[^0-9]/g, '');
});

    document.getElementById('cpf').addEventListener('input', function (e) {
        e.target.value = e.target.value.replace(/[^0-9]/g, '');
});
    $(document).ready(function(){
         console.log("jQuery e o jQuery Mask Plugin foram carregados corretamente.");
         $('#cpf').mask('000.000.000-00');
});
   $(document).ready(function(){
        $('#telefone').mask('000.000.000-00');
   });
   
    $(document).ready(function(){
        $("#data-nascimento").datepicker({
         dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        yearRange: "1900:2023"
});
});

     $(document).ready(function(){
        $('#cep').mask('00000-000'); 
});

    function pesquisacep(valor) {
         var cep = valor.replace(/\D/g, '');
    if (cep != "") {
        var validacep = /^[0-9]{8}$/;
    if(validacep.test(cep)) {
        document.getElementById('estado').value="...";
        document.getElementById('cidade').value="...";
        document.getElementById('bairro').value="...";
        document.getElementById('rua').value="...";
        var script = document.createElement('script');
        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
        document.body.appendChild(script);
    } else {
        limpa_formulario_cep();
        alert("Formato de CEP inválido.");
    }
    } else {
         limpa_formulario_cep();
}
}
    function limpa_formulario_cep() {
        document.getElementById('estado').value=("");
        document.getElementById('cidade').value=("");
        document.getElementById('bairro').value=("");
        document.getElementById('rua').value=("");
}
    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            document.getElementById('estado').value=(conteudo.uf);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('rua').value=(conteudo.logradouro);
        } else {
        limpa_formulario_cep();
        alert("CEP não encontrado.");
}
}

    function cadastro() {
        var nome = document.getElementById('nome').value;
        var email = document.getElementById('email').value;
        var idade = document.getElementById('idade').value;
        var telefone = document.getElementById('telefone').value;
        var cpf = document.getElementById('cpf').value;
        var data_nascimento = document.getElementById('data-nascimento').value;
        var cep = document.getElementById('cep').value;
        var estado = document.getElementById('estado').value;
        var cidade = document.getElementById('cidade').value;
        var bairro = document.getElementById('bairro').value;
        var rua = document.getElementById('rua').value;

    if (
        nome === "Joao" &&
        email === "joaosantoskp@gmail.com" &&
        (parseInt(idade) >= 0 && parseInt(idade) <= 30) && 
        telefone === "(82) 99827-10078" &&
        cpf === "071.848.644-76" &&
        data_nascimento === "2008-12-24" && 
        cep === "57043-265" &&
        estado === "AL" &&
        cidade === "Maceió" &&
        bairro === "Feitosa" &&
        rua === "Santo Antonio"
) {
    alert("Sucesso");
    } else {
    alert("Usuário não cadastrado");
  }

}
$(document).ready(function() {
    const fields = [
        { element: $('#nome'), name: 'Nome Completo' },
        { element: $('#email'), name: 'E-mail' },
        { element: $('#telefone'), name: 'Telefone' },
        { element: $('#cpf'), name: 'CPF' },
        { element: $('#senha'), name: 'Senha' },
        { element: $('#data-nascimento'), name: 'Data de Nascimento' },
        { element: $('#cep'), name: 'CEP' },
        { element: $('#estado'), name: 'Estado' },
        { element: $('#cidade'), name: 'Cidade' },
        { element: $('#bairro'), name: 'Bairro' },
        { element: $('#rua'), name: 'Rua' }
    ];

    function checkFields() {
        // Filtra os campos que estão vazios
        const emptyFields = fields.filter(field => field.element.val().trim() === '');

        if (emptyFields.length > 0) {
            // Desativa o botão se houver campos vazios
            $('#submit-button').prop('disabled', true);
            return false;
        }
        
        // Ativa o botão se todos os campos estiverem preenchidos
        $('#submit-button').prop('disabled', false);
        return true;
    }

    // Verificação inicial do botão de envio
    checkFields();

    // Habilita ou desabilita o botão com base nos campos preenchidos
    $('input').on('input', function() {
        checkFields();
    });

    // Verifica os campos ao enviar o formulário
    $('form').on('submit', function(event) {
        if (!checkFields()) {
            event.preventDefault(); // Impede o envio do formulário se houver campos vazios
            const emptyFields = fields.filter(field => field.element.val().trim() === '');
            const fieldNames = emptyFields.map(field => field.name).join(', ');
            alert('Por favor, preencha os seguintes campos: ' + fieldNames);
        }
    });
});