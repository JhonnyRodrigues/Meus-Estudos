<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Lista de Estados</title>
  <link rel="stylesheet" href="../_css/estilo.css">
  <!--endereço do estilo editado pelo professor, atenção para o padrão Linux: "../"-->
</head>

<body>
  <div>
    <?php
    $estado = isset($_GET["estados-brasil"]) ? $_GET["estados-brasil"] : 0;

    switch ($estado) {
        //norte
      case "AM":
      case "AC":
      case "AP":
      case "PA":
      case "RO":
      case "RR":
      case "TO":
        echo "Você mora na região <span class='foco'>Norte<span/>";
        break;
        //nordeste
      case "AL":
      case "BA":
      case "CE":
      case "MA":
      case "PB":
      case "PE":
      case "PI":
      case "RN":
      case "SE":
        echo "Você mora na região <span class='foco'>Nordeste<span/>";
        break;
        //centro-oeste
      case "DF":
      case "GO":
      case "MS":
      case "MT":
        echo "Você mora na região <span class='foco'>Centro-Oeste<span/>";
        break;
        //sudeste
      case "ES":
      case "MG":
      case "SP":
      case "RJ":
        echo "Você mora na região <span class='foco'>Sudeste<span/>";
        break;
      case "PR":
      case "SC":
      case "RS":
        echo "Você mora na região <span class='foco'>Sul<span/>";
        break;
      default:
        echo "[ERRO]";
    }
    ?>
    <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    <!--utiliza o histórico do javascript para voltar à página anterior-->
  </div>
</body>

</html>