const input = document.getElementById

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

const axios = require('axios')

exports.home = (req, res) => {
   axios.get('https://servicodados.ibge.gov.br/api/v1/localidades/estados/{UF}/municipios/${cidade}')
    .then(response => {
        res.render('pages/home', {
          cidade: response.data
     })
   }).catch(error => {
      console.log(error)
      res.send('erro')
   })
}
