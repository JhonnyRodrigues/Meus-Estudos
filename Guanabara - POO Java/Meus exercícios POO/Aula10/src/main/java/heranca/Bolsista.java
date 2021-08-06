package heranca;
public class Bolsista extends Aluno { //essa classe `Bolsista` é Descendente da classe `Pessoa` e subclasse de `Aluno` 
    //Atributo exclusivo dessa classe `Bolsista`
    private int bolsa;
    //Método exclusivo  dessa classe `Bolsista`
    public void renovarBolsa() {
        
    }
    //Método sobrescrito da classe `Aluno`
    @Override
    public void pagarMensalidade() {
        
    }
}
