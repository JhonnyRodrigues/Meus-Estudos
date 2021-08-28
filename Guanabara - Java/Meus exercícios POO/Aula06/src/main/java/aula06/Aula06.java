package aula06;
public class Aula06 {
    public static void main(String[] args) {
        ControleRemoto c = new ControleRemoto();
        c.ligar();
        c.play();
        c.maisVolume();        
        c.abrirMenu();
        c.fecharMenu();
      //c.setVolume(50); não é possível esse tipo de modificação porque esse método está privado apenas à sua classe
    }
}
