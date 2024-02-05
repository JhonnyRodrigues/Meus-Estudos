<?php
//traduzindo isso:      {"riscos":[ { 'id_rico':'27','chave':'valor'} , {'chave':'valor','chave':'valor' } ] }

    class stdClassP //um objeto nada mais é do que uma instância de uma classe
    {
        public $riscos = array( //1 array está dentro do objeto
            new stdClassRisco(), //vários objetos estão dentro desse array
            new stdClassRisco(),
            new stdClassRisco()
        );
    }
    
    //atribuindo o valor '27' para a propriedade(variável) '$id_risco'
    class stdClassRisco
    {
        public $id_risco = '27';
    }
    
    $std = new stdClassP(); //'$std' é uma nova instância da classe 'stdClassP'

    $std->riscos[0]->id_risco // objeto->array[posição]->chave

    foreach ($std->riscos as $berimbau) { //para cada elemento (nomeado como 'berimbau'), do array 'riscos', faça...
        $berimbau->id_risco
    }