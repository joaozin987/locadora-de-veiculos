        $(document).ready(function(){
        $('#telefone').mask('(00) 00000-0000');
});

     document.getElementById('cpf').addEventListener('input', function (e) {
        e.target.value = e.target.value.replace(/[^0-9]/g, '');
});
        $(document).ready(function(){
        ('#cpf').mask('000.000.000-00');
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