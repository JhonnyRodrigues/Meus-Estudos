<?php
interface Publicacao
{
    public function abrir();
    public function fechar();
    public function folhear($pagina);   //é necessário enviar um parâmetro
    public function avancarPag();
    public function voltarPag();
}
