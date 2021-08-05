package aula06;
public interface Controlador {
    public abstract void ligar();//Declarar um método como abstract quer dizer que o código não será definido no local, mas em outro local/arquivo.
    public abstract void desligar();
    public abstract void abrirMenu();
    public abstract void fecharMenu();
    public abstract void maisVolume();
    public abstract void menosVolume();
    public abstract void ligarMudo();
    public abstract void desligarMudo();
    public abstract void play();
    public abstract void pause();
}
