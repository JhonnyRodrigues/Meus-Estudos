// Debounce é uma técnica para adiar a execução de uma função até que o usuário PARE de disparar eventos por um curto período de tempo.

// Esse padrão de controle usa setTimeout() internamente, mas com lógica extra:
// - Cancelar o setTimeout() anterior se o evento ocorrer de novo.
// - Só executar a função após um tempo de inatividade.

function debounce(func, delay) {
  let timer;
  return function (...args) {
    clearTimeout(timer); // cancela o timer anterior
    timer = setTimeout(() => {
      func.apply(this, args); // executa a função após o delay
    }, delay);
  };
}


//Exemplo de aplicacao
elemento.addEventListener('input', debounce(
  () => { formatarDocumento(elemento); }
  , 100 //milissegundos
));


//Debouce contrário: registra o primeiro evento e ignora o resto até acabar o temporizador. (útil quando se dá vários cliques em um único botão)
function debounceLeading(func, delay = 300) {
  let timer;
  return (...args) => {
    if (!timer) {
      func.apply(this, args); // Executa imediatamente se não há timer
    }
    clearTimeout(timer); // Cancela o timeout anterior (se houver)
    timer = setTimeout(() => {
      timer = null; // Libera para uma nova execução após o timeout
    }, delay);
  };
}


//COMPARACAO
//debounce padrão	Após o usuário parar de acionar
//debounce_leading	Assim que o usuário começa, depois ignora até o timeout