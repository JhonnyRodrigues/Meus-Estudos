<?php
class newsletter {
    public function cadastrarEmail($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)): //se a condição for falsa o email não é válido
	        throw new exception("Este e-mail é inválido", 3); //lança uma exceção (`exception` é a classe base para lançar exceções no PHP)
        else:
	        echo "Email cadastrado com sucesso!";
        endif;
    }
}
$newsletter = new newsletter(); //cria uma instância da classe
try {//tenta executar esse código ...
$newsletter -> cadastrarEmail("contato@"); //chama o método passando um parâmetro com email inválido
} catch (exception $e) { /*e caso ele não consiga (catch) é utilizada a classe (exception) que captura todas as exceções que podem ser geradas neste método.
A variável $e é um objeto que contém as informações (propriedades) da exceção lançada.
    São 4 propriedades: message, code, line e file*/
    echo "Mensagem: " . $e -> getMessage(); //exibe a mensagem do throw
    echo "Código: " . $e -> getCode(); //exibe o código
    echo "Linha: " . $e -> getLine(); //exibe a linha
    echo "Arquivo: " . $e -> getFile(); //exibe o caminho do arquivo
}
?>                                                                              