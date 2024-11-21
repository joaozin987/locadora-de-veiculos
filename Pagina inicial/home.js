// Seleciona os elementos principais
const container = document.querySelector('.veiculos-container');
const setaEsquerda = document.querySelector('.seta-esquerda');
const setaDireita = document.querySelector('.seta-direita');

// Adiciona o evento de clique na seta esquerda
setaEsquerda.addEventListener('click', () => {
  container.scrollLeft -= 300; // Move 300px para a esquerda
});

// Adiciona o evento de clique na seta direita
setaDireita.addEventListener('click', () => {
  container.scrollLeft += 300; // Move 300px para a direita
});
