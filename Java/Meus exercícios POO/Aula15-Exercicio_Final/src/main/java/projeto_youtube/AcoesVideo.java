package projeto_youtube;
public interface AcoesVideo { //aplicando o conceito de ENCAPSULAMENTO: essa interface será implementada na classe `Pessoa`
    public abstract void play(); //como já esta dentro de uma interface, é redundante declarar como ABSTRACT
    public void pause();
    public void like();
}
