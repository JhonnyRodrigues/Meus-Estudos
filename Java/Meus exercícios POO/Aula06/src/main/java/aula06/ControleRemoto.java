package aula06;
public class ControleRemoto implements Controlador{
    //Atributos
    private int volume;
    private boolean ligado;
    private boolean tocando;
    
    //Método Construtor
    public ControleRemoto() {
        this.volume = 50;
        this.ligado = false;
        this.tocando = false;
    }
    
    //Métodos Acessores
    private int getVolume() { //tornando privados os métodos acessores, não é possível usá-los fora de sua classe
        return volume;
    }

    private void setVolume(int volume) {
        this.volume = volume;
    }

    private boolean isLigado() { //métodos acessores que retornam boolean são chamados de `is`
        return ligado;
    }

    private void setLigado(boolean ligado) {
        this.ligado = ligado;
    }

    private boolean isTocando() {
        return tocando;
    }

    private void setTocando(boolean tocando) {
        this.tocando = tocando;
    }
    
    //Métodos Abstratos
    @Override //anotação que significa sobrescrever. Usamos para reescrever um método que foi herdado
    public void ligar() {
        this.setLigado(true);
    }

    @Override
    public void desligar() {
        this.setLigado(false);
    }

    @Override
    public void abrirMenu() {
        if (this.isLigado()) {
            System.out.println("- - - - M E N U - - - -");
            System.out.println("Está ligado? " + this.isLigado());
            System.out.println("Está tocando? " + this.isTocando());
            System.out.print("Volume: " + this.getVolume());
            for (int i = 0; i <= this.getVolume(); i += 10) {
                System.out.print(" |");
            }
        } else {
            System.out.println("Impossivel abrir o menu pois o aparelho está desligado");
        }
    }

    @Override
    public void fecharMenu() {
        if (this.ligado) {
            System.out.println("\nFechando Menu...");
        } else {
            System.out.println("Impossivel fechar o menu pois o aparelho está desligado");
        }        
    }

    @Override
    public void maisVolume() {
        if (this.isLigado()) { //"se estiver ligado, então...    (o true já é subentendido)
            this.setVolume(this.getVolume() + 5);
        } else {
            System.out.println("Impossivel aumentar volume");
        }
    }

    @Override
    public void menosVolume() {
        if (isLigado()) {
            this.setVolume(this.getVolume() - 5);
        } else {
            System.out.println("Impossível dimibuir volume.");
        }
    }

    @Override
    public void ligarMudo() {
        if (this.isLigado() && this.getVolume() > 0) {
            this.setVolume(0);
        }
    }

    @Override
    public void desligarMudo() {
        if (this.isLigado() && this.getVolume() == 0) {
            this.setVolume(50);
        }
    }

    @Override
    public void play() {
        if (this.isLigado() && !(this.isTocando())) { //atenção para a exclamação que teste valor `FALSE`
            this.setTocando(true);
                System.out.println("Não consegui reproduzir");
        }
    }

    @Override
    public void pause() {
        if (this.isLigado() && this.isTocando()) {
            this.setTocando(false);
                System.out.println("Não consegui pausar");
        }
    }
    
}
