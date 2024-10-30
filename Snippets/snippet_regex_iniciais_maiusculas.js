let elemento = document.querySelector('#id_sc_field_nome_funcionario_7');
elemento.textContent.toLocaleLowerCase().replaceAll(/(:?^|\s)([a-z])(?=[a-z]{2,})/g, (firstLetter) => firstLetter.toLocaleUpperCase());

/*

Analisando o trecho de código:
Objetivo: formatar iniciais dos nome das pessoas para letras maiúsculas

1- Seleciona um elemento HTML usando querySelector com o ID #id_sc_field_nome_funcionario_7.
2- Converte o conteúdo do texto (textContent) desse elemento para letras minúsculas com .toLocaleLowerCase().
3- Aplica a transformação com replaceAll() usando a expressão regular /(:?^|\s)([a-z])(?=[a-z]{2,})/g para encontrar certas letras e capitalizá-las.

Analisando a Expressão Regular /(:?^|\s)([a-z])(?=[a-z]{2,})/g. Essencialmente, essa regex identifica a primeira letra minúscula de palavras com três ou mais letras, desde que a letra esteja no início da palavra.

Explicando cada trecho da regex:
1. (:?^|\s) => identifica onde a palavra começa, seja no início da string ou logo após um espaço.
    : indica um grupo de agrupamento não capturante. Isso significa que a parte (^|\s) será verificada, mas não armazenada como uma captura separada.
    (^|\s) combina o início da string ou qualquer espaço em branco.
2. ([a-z]) => Este grupo capturante identifica uma única letra minúscula ([a-z]).
3. (?=[a-z]{2,}) => Esta é uma "assertiva de lookahead positiva" que verifica se há pelo menos duas letras minúsculas logo após o caractere capturado. Isso garante que a letra encontrada (no segundo grupo ([a-z])) esteja no início de uma palavra com três ou mais letras.
4. /g nesse modificador indica o modo global, ou seja, instrui o mecanismo de regex a continuar buscando por todas as correspondências na string em vez de parar na primeira ocorrência.

*/