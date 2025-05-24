<?php
require_once "Pessoa.php";
require_once 'Publicacao.php';
class Livro implements Publicacao
{
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;    //esse leitor será uma pessoa, portanto importe a classe Pessoa.php
    //Métodos Especiais
    function detalhes()
    {
        echo "<hr>Livro: " . $this->getTitulo() . "<br>Escrito por: " . $this->getAutor() .
        "<br>Páginas: " . $this->getTotPaginas() . "<br>Página atual: " . $this->getPagAtual() . "<br>Sendo lido por: " . $this->leitor->getNome() . "<hr>"; //perceba a referência da referência (duplas setas ->) em [$this->leitor->getNome()] 
    }
    //Métodos Implementados da interface
    public function abrir()
    {
        $this->aberto = true;
    }
    public function fechar()
    {
        $this->aberto = false;
    }
    public function folhear($pagina)
    {
        if ($pagina > $this->totPaginas) {
            $this->pagAtual = 1; //se o usuário mandar folhear um nº página maior que o total do livro, retornará para o início (um)
        } else {
            $this->pagAtual = $pagina;
        }
    }
    public function avancarPag()
    {
        if ($this->pagAtual === $this->totPaginas) {
            echo "O livro já está na última página, não é possível avançar uma página";
        } else {
            $this->pagAtual++;
        }
    }
    public function voltarPag()
    {
        if ($this->pagAtual == 1) {
            echo "O livro ainda está na primeira página, não é possível voltar uma página";
        } else {
            $this->pagAtual--;
        }
    }
    //Método Construtor
    function __construct($titulo, $autor, $totPag, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPag;
        $this->leitor = $leitor;
        $this->aberto = false;
        $this->pagAtual = 0;
    }
    //Métodos Acessores
    function getTitulo()
    {
        return $this->titulo;
    }
    function getAutor()
    {
        return $this->autor;
    }
    function getTotPaginas()
    {
        return $this->totPaginas;
    }
    function getPagAtual()
    {
        return $this->pagAtual;
    }
    function getAberto()
    {
        return $this->aberto;
    }
    function getLeitor()
    {
        return $this->leitor;
    }
    function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    function setAutor($autor)
    {
        $this->autor = $autor;
    }
    function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }
    function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }
    function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }
    function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }
}
