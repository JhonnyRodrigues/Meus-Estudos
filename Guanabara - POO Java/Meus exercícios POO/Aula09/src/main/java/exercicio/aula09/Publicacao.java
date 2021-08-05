package exercicio.aula09;
public interface Publicacao { //criando uma interface
    public abstract void abrir();
    public abstract void fechar();
    public abstract void folhear(int p); //folhear até qual página?
    public abstract void avancarPag();
    public abstract void voltarPag();
}
