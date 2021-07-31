package cursoemvideo.aula03;
public class Aula03 {    
    public static void main(String[] args) {
        Caneta c1 = new Caneta();
        c1.modelo = "Bic Cristal";
        c1.cor = "Verde";
        //c1.ponta = 0.5f;  não é permitido modificar o atributo porque ele está como PRIVATE
        c1.carga = 80;
        c1.status();
        c1.tampar();    //
        //c1.rabiscar();    sem acesso, método privado
        
    }
}
