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