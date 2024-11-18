function addClickEventToDiv(divId, inputId) {
    const div = document.getElementById(divId);
    const input = document.getElementById(inputId);

    div.addEventListener('click' , () => {
        input.focus();
        input.click();
    });
}

    addClickEventToDiv('retirada-group', 'data-de-retirada');
    addClickEventToDiv('devolucao-group',  'data-de-devolucao');
    addClickEventToDiv('horario-retirada-group', 'horario-de-retirada');
    addClickEventToDiv('horario-devolucao-group', 'horario-de-devolucao');