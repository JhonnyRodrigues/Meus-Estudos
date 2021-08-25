<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Vetores</title>
  <link rel="stylesheet" href="../_css/estilo.css">
  <!--endereço do estilo editado pelo professor, atenção para o padrão Linux: "../"-->
</head>

<body>
  <div>
    <pre>
      <?php
      //criando vetor
      $n = array(3, 5, 8, 2); //cria um vetor já atribuindo valores
      $n[] = 7; //cria uma nova posição, no final do vetor
      echo "criando vetor:<br>";
      print_r($n); //função apropriada para imprimir vetores

      //criando vetor por range()
      $c = range(5, 20, 5); //respectivos parâmetros: valor inicial, final e passo
      echo "<hr>função range(): <br>";
      print_r($c);

      //iteração foreach(){}
      $c = range(4, 20, 2); //criando um vetor
      echo "<hr><table border='1'>função foreach(): <tr></tr>"; //cria uma tabela
      foreach ($c as $valor) { //percorre todos os elementos do vetor, ou seja, "Para cada elemento do vetor $c tratado como $valor, faça:"
        echo "<td>$valor</td>"; //imprime dentro de uma tabela
      }
      echo "</table>";

      //índices personalizados
      $vetor = array(3 => "a", 1 => "b", 0 => "c", 7 => "d"); //Cria um vetor com chaves personalizadas. A atribuição é feita associando cada índice a seu determinado valor através do símbolo de associação(=>).
      echo "<hr>índices personalizados:<br>";
      print_r($vetor);

      //desalocando com unset()
      unset($vetor[1]); //desaloca(apaga) elemento através do índice do vetor
      echo "<hr>função unset() para desalocar índices: <br>";
      print_r($vetor);

      //Chaves associativas
      $v = array( //No PHP, vetores NÃO são homogêneos
        "nome" => "Ana",
        "idade" => 23,
        "peso" => 65.7
      );
      echo "<hr>No PHP, as variáveis compostas NÃO são homogêneas:<br>";
      print_r($v);

      //foreach associativo
      echo "<hr> foreach associativo:<br>";
      foreach ($v as $key => $c) { //"para cada elemento de vetor($v), nomeado como minha chave($key), associado ao conteúdo($c), faça {"
        echo "O campo $key possui o conteúdo $c<br>";
      }
      echo "</pre>";

      //adicionando e removendo elementos de vetores
      $vetor[] = 7;             //adiciona elemento no final
      array_push($vetor, 7);    //adiciona elemento no final
      array_unshift($vetor, 7); //adiciona elemento no início
      array_shift($vetor);      //elimina elemento no início
      array_pop($vetor);        //elimina elemento no final
      unset($vetor[1]);         //elimina elemento no índice especificado
      echo "<hr> adicionando e removendo elementos do vetor:<br>";
      print_r($vetor);

      //ordenando valores com sort() ou rsort()
      $vet = array("J", "H", "O", "N", "Y");
      echo "<hr>Funções para Ordenação de Valores:<br>vetor atual:";
      print_r($vet);
      sort($vet); //ordenação crescente
      echo "<br>sort():  ";
      print_r($vet);
      rsort($vet); //ordenação reversa
      echo "<br>rsort(): ";
      print_r($vet);

      //ordenação associativa com asort() ou arsort()
      $vet = array("S", "I", "L", "V", "A");
      echo "<hr>Função para Ordenação Associativa:<br>vetor: ";
      print_r($vet);
      asort($vet); //também altera a ordem dos índices pois os valores mantêm suas chaves.
      echo"asort(): ";
      print_r($vet);
      arsort($vet); //associativa reversa
      echo "arsort(): ";
      print_r($vet);

      //ordenação por chaves com ksort()
      echo "<hr>Função para Ordenação por Chaves:<br>vetor: ";
      print_r($vet);
      ksort($vet); //key_sort
      echo "ksort(): ";
      print_r($vet);
      krsort($vet);//key_reverse_sort
      echo "krsort: ";
      print_r($vet);
      ?>
    
  </div>
</body>

</html>