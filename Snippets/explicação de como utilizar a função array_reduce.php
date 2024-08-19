<?php

$textao = '13/08/13 09h42min - Victor Silva - PIRACICABA.solida:
<ul><li><strong>Arquivo</strong> <a href="/redmine/attachments/download/20302/2CadastroCliente.png">2CadastroCliente.png</a> adicionado</li><li><strong>Arquivo</strong> <a href="/redmine/attachments/download/20306/CadastroAS2024112541.png">CadastroAS2024112541.png</a> adicionado</li></ul><p>Teste realizado ontem pelo solicitante:
Exemplos de alterações cadastrais e testes NO VALIDA:</ p> <p>? MATRÍCULA 198291</ p> <p>NO dia 21 / 06 / 2024 foi aberta a AS2024110187 ? ? 4552 ? Serviço Comercial ?,
que ficou pendente até o dia 12 / 08 / 2024,
DATA de sua conclusão. NO dia 15 / 07 / 2024,
acerca da AS mencionada,
o Setor de Cadastramento e Registro alterou a titularidade,
a categoria ? de Residencial para Público-Municipal ? inseriu complemento: ? Campo de Futebol ?,
e ainda inseriu endereço alternativo: ? Rua Antônio Corrêa Barbosa,
2233 ?. Verifica-se que após o encerramento da referida AS,
realizado pela Divisão de Relacionamento Comercial NO dia 12 / 08 / 2024,
parte das alterações realizadas NO dia 15 / 07 / 2024 pelo Setor de Cadastramento e Registro se perderam,
voltando para o estado anterior,
conforme podemos verificar NO histórico: categoria retornou para residencial,
o endereço alternativo e o complemento foram removidos.</ p> <p>? MATRÍCULA 34353</ p> <p>Para testes,
realizamos alterações cadastrais NO VALIDA,
e NO dia 09 / 08 / 2024 às 08:29 h foi aberta a AS2024112536 "3362 - Serviços Diversos Fiscalização". NO mesmo dia às 08:30 h,
o Setor de Cadastramento e Registro alterou a categoria de comercial para residencial e a numeração da casa de ? 53 ? para ? 100 ?. Observa-se que às 08:34 h,
o escriturário Rafael Romani do polo Piracicamirim,
à pedido,
concluiu a AS2024112536,
e,
consequentemente,
como podemos verificar NO histórico a categoria e a numeração voltaram respectivamente para comercial e ? 53 ? NO mesmo horário da conclusão da AS2024112536.</ p> <p>Em continuidade ao teste,
NO dia 10 / 08 / 2024 às 09:19 h foi aberta a AS2024112541 ? 4552-Serviço Comercial ?. Na sequência,
às 09:37 h,
realizei várias alterações cadastrais (
	troca de titularidade,
	inserção de complemento de endereço e endereço alternativo,
	alteração do número do imóvel de ? 53 ? para ? 200 ?,
	da categoria de comercial para residencial e da economia de 2 para 1
). Observa-se que NO dia 12 / 08 / 2024,
foi concluída a AS 202411254,
e o resultado foi o retorno da categoria de residencial para comercial e a economia de 1 para 2,
permanecendo somente AS demais alterações realizadas para teste.</ p> <p>Após os testes,
verificamos que AS situações acima relatadas ocorrem em autorizações de serviços que possuem dentro de sua conclusão ou encerramento,
a possibilidade de alterações cadastrais na aba ? 2 Cadastro de Cliente ?,
anexo 2 CadastroCliente.</ p> <p>Sendo assim,
podemos concluir que essas autorizações de serviços que possibilitam acertos cadastrais em sua conclusão,
não carregam AS informações atualizadas NO momento de seu encerramento,
mas sim informações cadastrais da DATA de sua abertura,
de modo que,
se ocorrerem alterações do número do imóvel ou da categoria entre o período de sua abertura e encerramento,
esses dados cadastrais alterados,
não estarão atualizados NO momento se der o encerramento dessas AS ? s. Ademais,
saliento que nem sempre essas autorizações de serviços têm como finalidade alterações cadastrais,
de maneira que,
NO momento de seu encerramento,
comumente inserem o parecer na aba ? 1 Dados da Execução ?,
sem verificar os dados cadastrais na aba ? 2 Cadastro de Cliente ?,
salvando diretamente,
executando a ordem de serviço,
resultando NO problema que aqui temos por objeto.</ p> <p>Para complementar,
salientamos que essas autorizações de serviços são abertas por diversos motivos,
e não necessariamente para realização de alterações cadastrais,
de forma que não é incumbência do usuário que vai encerrar a autorização de serviço,
verificar se os dados cadastrais na aba ? 2 Cadastro de Cliente ?,
estão iguais ao da matrícula,
isto é,
atualizados.</ p> <p>Como exemplo,
segue o print da aba ? 2 Cadastro de Cliente ? da AS2024112541 da matrícula 34353,
antes de seu encerramento.</ p> <p>Conforme observamos na imagem,
a categoria do imóvel já estava atualizada para RESIDENCIAL e economia 1,
porém,
dentro da AS2024112541,
ainda constava como COMERCIAL e economia 2. Ao encerrar essa autorização de serviço,
sua categoria é alterada indevidamente para COMERCIAL,
economia 2. Salientamos que acertos cadastrais são realizados por diversos setores dentro do SEMAE (
	Cadastro ? Atendimento ? Fiscalização ? Relacionamento Comercial
).</ p> <p>Para solução do problema,
entendemos que AS autorizações de serviços que possibilitem alterações cadastrais,
NO ato de seu encerramento,
precisam estar com todas AS informações cadastrais atualizadas na aba ? 2 Cadastro de Cliente ?,
e não somente algumas,
como a titularidade da ligação,
mas também a categoria,
numeração do imóvel etc.</ p>';

$array = str_split($textao, 4000); //quebra o texto em pedaços de 4 mil caracteres para cada chave de um array
var_dump($array);

$result = array_reduce($array,
	function ($acumulador, $chunk) {
		$acumulador .= "|| TO_CLOB('{$chunk}')"; //concatena a função CLOB para cada pedaço do $textao
		return $acumulador;
	},
	'' //acumulador é iniciado como uma string vazia
);

var_dump($result);


a saída imprimirá: string(5249) "|| TO_CLOB('13/08/13 09h42min - V ... blahblahblah ... al')|| TO_CLOB('terações ...blahblahblah ... numeração do imóvel etc.</ p>')"

//Nota: posteriormente, foi implementada condicional ternária no $acumulador para que a string não inicie com o operador de concatenação (||) do SGBD Oracle