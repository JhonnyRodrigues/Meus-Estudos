<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>25 Principais Funções PHP</title>
  <link rel="stylesheet" href="../_css/estilo.css">
  <!--endereço do estilo editado pelo professor, atenção para o padrão Linux: "../"-->
</head>

<body>
  <div>
    <?php
    //printf()
    $produto = "leite";
    $preco = 4.5;
    echo "O preço do $produto custa R$ " . number_format($preco, 2);
    echo "<br>";
    printf("O %s está custando R$ %.2f", $produto, $preco); //segue o padrão da linguagem C

    //print_r(), var_dump(), var_export()
    $vetor[0] = 4;
    $vetor[1] = 8;
    $vetor[2] = 9;
    echo "<hr>";
    print_r($vetor); //imprime "Array ( [0] => 4 [1] => 8 [2] => 9 )"
    echo "<br>";
    var_dump($vetor); //array(3) { [0]=> int(4) [1]=> int(8) [2]=> int(9) }
    echo "<br>";
    var_export($vetor); //array ( 0 => 4, 1 => 8, 2 => 9, )

    //wordwrap()
    $txt = "Aqui temos um texto gigante que vai mostrar o funcionamento da função wordwrap.";
    $result = wordwrap($txt, 9, "<br>\n", true); //o 2º parâmetro indica a quantidade de caracteres, no 3º parâmetro coloca-se a tag para quebra de linha no código visualmente e '\n' para quebra de linha no código fonte, o 4º parâmetro, sendo 'false' vai respeitar a quebra de linha POR PALAVRA, sendo 'true' vai respeitar a quebra de linha POR CARACTERE (quantificados no parâmetro 2)
    echo "<hr>";
    echo "$result";

    //strlen()
    $tamanho = strlen($txt); //string lenght
    echo "<hr>A quantidade de palavras do texto acima é: ";
    echo "$tamanho";

    //trim(), ltrim(), rtrim()
    $nome = "    Zé das Couves  ";
    echo "<hr>tamanho da string com todos os espaços: ";
    echo strlen($nome); //atenção: combinando com a função echo não usa aspas!
    $nome_sem_espacos = trim($nome);
    echo "<br>string sem espaços desnecessários: $nome_sem_espacos<br>novo tamanho: ";
    echo (strlen($nome_sem_espacos));
    $sem_espacos_inicio = ltrim($nome);
    echo "<br>tamanho da string sem os espaços iniciais: ";
    echo (strlen($sem_espacos_inicio));
    $sem_espacos_fim = rtrim($nome);
    echo "<br>tamanho da string sem os espaços no fim: ";
    echo (strlen($sem_espacos_fim));

    //str_word_count()
    $frase = "Eu vou estudar PHP";
    $contador = str_word_count($frase, 0);
    echo "<hr>A frase '$frase' possui $contador palavras.";
    $contador = str_word_count($frase, 2); //O parâmetro '0' retorna só a contagem, '1' cria um vetor e '2' cria um vetor mantendo o posicionamento de cada palavra dentro da string.
    echo "<br>Parâmetro 2: ";
    print_r($contador); //a função print_r() mostra detalhes de uma variável, principalmente se ela for um vetor

    //explode()
    $site = "Curso em Video";
    $vetor = explode(" ", $site); //Pega cada palavra e joga num índice de vetor. É uma versão mais nova da str_word_count, ela procura pelos caracteres ‘espaços’ para explodir a string em pedaços dentro de um vetor.
    echo "<hr> explode: ";
    print_r($vetor);

    //str_split()
    $nome = "Jonatas";
    $vetor = str_split($nome); //semelhante à função explode(), coloca cada letra dentro de um índice de vetor. Exemplo:
    echo "<hr>função str_split(): ";
    print_r($vetor);

    //implode() ou join()
    $vet[0] = "curso";
    $vet[1] = "em";
    $vet[2] = "video";
    $texto = implode("_", $vet); //une as strings dos índices de um vetor um uma única variável string.
    $textoj = join("#", $vet); //faz exatamente a mesma coisa
    echo "<hr>função implode:";
    print($texto);
    echo " <br>função join: ";
    print ($textoj);

    //chr() ou ord()
    $letra = chr(67); //apresenta a letra respectiva ao Unicode
    echo "<hr>A letra de código 67 é $letra.";
    $cod = ord($letra); //apresenta o código da letra
    echo "<br>O código da letra 'C' é $cod.";

    //strtolower() ou strtoupper()
    $nome = "JonAtaS RoDRigUEs";
    print("<hr>Seu nome em minúsculo é " . strtolower($nome)); //converte todas as letras para minúsculo
    print("<Br>Seu nome em MAIÚSCULO é " . strtoupper($nome)); //converte para maiúsculo

    //ucfirst() ou ucwords()
    $nome = "joNAtaS RodRiguES";
    print("<hr>função ucfirst(): ".ucfirst(strtolower($nome))); //combinada com a função anterior, converte todas as letras para minúsculo e depois converte para maiúsculo somente a 1ª letra (upper case first)
    print("<br>função ucwords(): ".ucwords(strtolower($nome))); //primeiras letras de cada palavra em maiúsculo

    //strrev()
    echo"<hr>Meu nome ao contrário é assustador!<br>";
    print(strrev(strtoupper($nome))); //string-reverse, reverte a ordem dos caracteres

    //strpos() ou stripos()
    $frase = "Estou aprendendo PHP";
    $pos = strpos($frase, "PHP"); //retorna a posição da palavra na string
    echo "<hr>A string foi encontrada na posição $pos.<br>";
    $pos = stripos($frase, "php"); //idem, ignorando caixa alta
    echo "função stripos(): $pos";

    //substr_count()
    $frase = "Estou aprendendo PHP no Curso em Video de PHP";
    $cont = substr_count($frase, "PHP"); // retorna a quantidade de vezes que a palavra apareceu na string
    print("<hr>PHP encontrado $cont vezes na frase.");

    //substr()
    //bastante utilizada, ela retorna trechos da string especificados pelos seus parâmetros. O 1º indica a string, o 2º indica a partir de onde começar (se o parâmetro for negativo, conta-se de trás para frente) e o 3º parâmetro indica o comprimento (se ele não for indicado, considera-se até o fim do comprimento).
    $site = "Curso em Video";
    echo "<hr> string: $site";
    $sub = substr($site, 0, 5);
    echo "<br> função substr() com parâmetros 0 e 5: $sub";
    $sub = substr($site, -5, 3);
    echo "<br> ... com parâmetros -5 e 3: $sub";
    $sub = substr($site, 4, 6);
    echo "<br> ... com parâmetros 4 e 6: $sub";

    //str_pad()
    $nome = "Jonatas Silva";
    $novo = str_pad($nome, 25, ".", STR_PAD_BOTH); //Seus 4 parâmetros indicam, respectivamente: variável, tamanho, caractere separador, orientação da posição (Left, Both, Center)
    print("<hr>O aluno $novo é esforçado!");

    //str_repeat()
    $txt = str_repeat("pHP", 5);
    print("<hr>O texto gerado com a função str_repeat() foi: $txt<br>");
    print(str_repeat("-", 30)); //gera 30 sinais de menos

    //str_replace() ou str_ireplace()
    $frase = "Gosto de estudar Matemática!";
    $novafrase = str_replace("Matemática", "PHP", $frase); //substitui uma string por outra
    echo "<hr> função str_replace: $novafrase"; //imprime "Gosto de estudar PHP"
    $novafrase = str_ireplace("matemática", "Tecnologia!!!", $frase); //'ireplace' igonora caixa alta
    echo "<br>função str_ireplace(): $novafrase";
    ?>
  </div>
</body>

</html>