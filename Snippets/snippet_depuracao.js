document.querySelector('form').addEventListener('submit', function(event) {
  event.preventDefault(); // Para evitar o envio do formulário, pois estamos apenas capturando o valor
  const campoNome = document.querySelector('input[name="nome"]').value;
  const campoCpf = document.querySelector('input[name="cpf"]').value;
  const campoCdc = document.querySelector('input[name="cdc"]').value;
  const campoEndereco = document.querySelector('input[name="endereco"]').value;
  const campoCidade = document.querySelector('input[name="cidade"]').value;
  const campoUF = document.querySelector('select[name="uf"]').value;
  const campoCep = document.querySelector('input[name="cep"]').value;
  const campoEmail = document.querySelector('input[name="email"]').value;
  const campoTelefone = document.querySelector('input[name="telefone"]').value;
  console.log('campoNome:', campoNome);
  console.log('campoCPF:', campoCpf);
  console.log('campoCDC:', campoCdc);
  console.log('campoEndereco:', campoEndereco);
  console.log('campoCidade:', campoCidade);
  console.log('campoUF:', campoUF);
  console.log('campoCep:', campoCep);
  console.log('campoEmail:', campoEmail);
  console.log('campoTelefone:', campoTelefone);
});