package heranca;
public final class Bolsista extends Aluno { //essa classe `Bolsista` é Descendente da classe `Pessoa` e subclasse de `Aluno`. Ela também é uma classe final, ou seja, não pode ter filhas
    //Atributo exclusivo dessa classe `Bolsista`
    private float bolsa; //quantos % de desconto?
    
    //Método exclusivo  dessa classe `Bolsista`
    public void renovarBolsa() {
        
    }
    //Método sobrescrito da classe `Aluno`
    @Override //esse override indica que o método abaixo está sendo SOBREPOSTO, ou seja, já existe um método `pagarMensalidade` na classe `Aluno`
    public void pagarMensalidade() { //porém esse método, na classe `bolsista`, terá um comportamento diferente
        System.out.println(this.nome + " é bolsista! Pagamento facilitado.");
    }
    //Métodos Acessores
    public float getBolsa() {
        return bolsa;
    }

    public void setBolsa(float bolsa) {
        this.bolsa = bolsa;
    }
}
