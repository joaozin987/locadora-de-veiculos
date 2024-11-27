const inputs = document.querySelectorAll('input[type="time"], input[type="date"]');

inputs.forEach(input => {
  input.addEventListener('focus', () => {
    setTimeout(() => {
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
});

document.querySelectorAll('.btn').forEach((button) => {
    button.addEventListener('click', () => {
        alert('Veículo selecionada!'); 
    });
});
