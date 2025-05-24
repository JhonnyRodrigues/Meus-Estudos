<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo
{
    //Atributos
    private $titulo;
    private $avaliacoes;
    private $visualizacoes;
    private $curtidas;
    private $reproduzindo;

    //Métodos Implementados da Interface
    public function like()
    {
        $this->curtidas ++;
    }
    public function pause()
    {
        $this->reproduzindo = false;
    }
    public function play()
    {
        $this->reproduzindo = true;
    }
    
    //Método Construtor
    public function __construct($titulo)
    {
        $this->titulo = $titulo;
        $this->avaliacoes = 1;
        $this->visualizacoes = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    //Métodos Acessores
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getAvaliacoes()
    {
        return $this->avaliacoes;
    }
    public function getVisualizacoes()
    {
        return $this->visualizacoes;
    }
    public function getCurtidas()
    {
        return $this->curtidas;
    }
    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }
    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }
    public function setAvaliacoes($avaliacoes): void
    {
        $this->avaliacoes = $avaliacoes;
    }
    public function setVisualizacoes($visualizacoes): void
    {
        $this->visualizacoes = $visualizacoes;
    }
    public function setCurtidas($curtidas): void
    {
        $this->curtidas = $curtidas;
    }
    public function setReproduzindo($reproduzindo): void
    {
        $this->reproduzindo = $reproduzindo;
    }
}
