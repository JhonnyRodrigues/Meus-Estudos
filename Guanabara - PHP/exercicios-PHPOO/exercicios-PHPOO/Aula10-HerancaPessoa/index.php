<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo sobre Heranças</title>
</head>

<body>
    <pre>
        <?php
        require_once "Pessoa.php";
        require_once "Funcionario.php";
        require_once "Professor.php";
        require_once "Aluno.php";
        require_once "Bolsista.php";
        require_once "Tecnico.php";
        require_once "Visitante.php";

        //$p1 = new Pessoa("Graziela",25,"F"); //não é possível instanciar uma classe abstrata
        $f1 = new Funcionario();
        $p1 = new Professor();
        $a1 = new Aluno();
        $b1 = new Bolsista();
        $t1 = new Tecnico();
        $v1 = new Visitante(); //uma herança POBRE não tem nenhum método implementado

        $f1->setNome("Bruna");
        $f1->setIdade(36);
        $f1->setSexo("F");
        $f1->setTrabalhando(true);
        $f1->mudarTrabalho("Recebimento");
        $f1->demitirFuncinario(); //executando esse método, o valor do atributo $trabalhando torna-se falso, retornando o resultado vazio na função print_r()

        $p1->setNome("Fabio");
        $p1->setIdade(52);
        $p1->setSexo("M");
        $p1->setSalario(2990.9);
        $p1->setEspecialidade("Educação Física");
        $p1->receberAumento(299.9); //2990.9+299.9=3290.8
        
        $a1->setNome("Marcos");
        $a1->setIdade(45);
        $a1->setSexo("M");
        $a1->setMatricula("2756032");
        $a1->setCurso("Excel Avançado");
        $a1->setMensalidade(849.9);
        $a1->pagarMensalidade();
        $a1->cancelarMatricula();
        
        $b1->setNome("Enzo");
        $b1->setIdade(16);
        $b1->setSexo("M");
        $b1->setMatricula(2756038);
        $b1->setCurso("Informática Básica");
        $b1->setMensalidade(340);
        $b1->renovarBolsa(20);
        $b1->pagarMensalidade();
        
        $t1->setNome("Juvenal");
        $t1->setIdade(45);
        $t1->setSexo("M");
        $t1->setMatricula(2756040);
        $t1->setCurso("Devops");
        $t1->setMensalidade(640);
        $t1->setRegistroProfissional(87495);
        $t1->praticar();

        $v1->setNome("Marcia"); //métodos herdados da classe Pessoa
        $v1->setIdade(48);
        $v1->setSexo("F");
        $v1->fazerAniversario(); //a idade de Marcia será 49

        print_r($f1);
        print_r($p1);
        print_r($a1);
        print_r($b1);
        print_r($t1);
        print_r($v1);
        ?>
    </pre>
</body>

</html>