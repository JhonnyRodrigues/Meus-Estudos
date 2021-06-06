//CARA! PARA DE CONFUNDIR ATRIBUIÇÃO COM IGUALDADE!   == Ñ É = !!!   CACETE!
package pkg14.pkg2.vetormeses;

import java.text.SimpleDateFormat;      //importação da biblioteca
import java.util.Calendar;
import java.util.Date;                  //*edit: BIBLIOTECA DEFASADA! USE util.calendar
import java.util.GregorianCalendar;     //importa biblioteca de calendario ocidental


public class VetorMeses {

    
    public static void main(String[] args) {

        String mes[] = {"jan", "fev", "mar", "abr", "mai", "jun",   //vetor de declaração dos meses do ano
            "jul", "ago", "set", "out", "nov", "dez"};
    
        int tot[] = {31,28,31,30,31,30,31,31,30,31,30,31};          //vetor para armazenar a quantidade de dias de cada mês
        int c;  //contador
        
        /*Calendar cal = GregorianCalendar.getInstance(); //metodo para importar calendario atual do sistema
        int anoatual = cal.get(Calendar.YEAR);  //cria var para receber ano atual*/
        
        SimpleDateFormat sdf = new SimpleDateFormat("yyyy");    //outro método que importa o ano atual
        int anoatual = Integer.valueOf(sdf.format(new Date())); //armazena na var
        System.out.println("Estamos no ano de " + anoatual + ", então:");
               
        for (c = 0; c < mes.length; c++) {  //OUTRA MANEIRA GERAL de repetição para qualquer tamanho de vetor
            
            if (anoatual % 4 == 0 && anoatual %100 != 0) {   //regra que verifica se o ano é BISSEXTO        
            tot[1] = 29;   //aumenta +1 dia a fevereiro
        }
            System.out.println("O mês de " + mes[c] + " tem " + tot[c] + " dias");
        }

    }
    
}
