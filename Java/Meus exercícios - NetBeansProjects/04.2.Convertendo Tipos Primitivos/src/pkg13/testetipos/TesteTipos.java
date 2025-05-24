
package pkg13.testetipos;

public class TesteTipos {
    
    public static void main(String[] args) {
        
        int idaded = 30;
        String valore = Integer.toString(idaded);//     convertendo tipo Inteiro para String
        System.out.println(valore);                //  utilizando o método de classe invólucra*/
        
        //segue outro exemplo com float://
        String valor = "30.5";
        float idade = Float.parseFloat(valore);  //observe o parse
        System.out.printf("%.3f",idade); //formata quantidade de casas decimais dofloat
    }
    
}
