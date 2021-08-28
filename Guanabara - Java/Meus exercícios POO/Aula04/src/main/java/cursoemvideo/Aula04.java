package cursoemvideo;
public class Aula04 {
    public static void main(String[] args) {    //função principal
        Caneta c1 = new Caneta("berimbau", 2.5f, 1);
        c1.modelo = "Bic Cristal";
        //c1.ponta = 0.5f; não permite modificar pois o atributo está privado
        c1.setPonta(0.5f); //como o atributo é privado, usei o método acessor `SET` para valorar o atributo
        c1.status();
        
        System.out.println("------------------------PROXIMO OBJETO-------------");
        
        Caneta c2 = new Caneta("Faber-Castel", 0.3f, 2); //perceba a passagem de parâmetros aos atributos
        c2.status();
        
        System.out.println("------------------------PROXIMO OBJETO-------------");
                
        Caneta c3 = new Caneta("Piloto", 0.8f, 7);
        c3.status();
    }
}
