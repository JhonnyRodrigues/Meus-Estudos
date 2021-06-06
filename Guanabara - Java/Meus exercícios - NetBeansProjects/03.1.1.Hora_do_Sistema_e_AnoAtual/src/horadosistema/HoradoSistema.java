
package horadosistema;  //nome  do pacote

import java.util.Date;  //importa biblioteca Date,*edit: BIBLIOTECA DEFASADA! USE util.calendar
import java.util.Calendar;
import java.util.GregorianCalendar;

public class HoradoSistema {

    public static void main(String[] args) {    //método principal
        
      /*Date relogio = new Date();  //cria objeto `relogio` dentro da classe Date    *edit:BIBLIOTECA DEFASADA!
        int ano = Calendar.getInstance().get(Calendar.YEAR);//joga o ano atual dentro da variável `ano`*/
      
      //também pode ser feiro assim:
        Calendar cal = GregorianCalendar.getInstance(); //metodo para importar calendario atual do sistema
        int anoatual = cal.get(Calendar.YEAR);  //cria var para receber ano atual
        System.out.println(anoatual);    //mostra na tela
    }
    
}
