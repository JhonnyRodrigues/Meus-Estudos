package heranca;
public abstract class Pessoa { //`abstract class` não pode ser instanciada, assim não será possivel criar objetos a partir dela
    //Atributos
    protected String nome; //permite que suas subclasses também tenham acesso ao atributo
    protected int idade;
    protected char sexo;
    
    //Método Público
    public final void fazerAniv(){ //Método Final não pode ser sobrescrito pelas suas subclasses
        this.idade++;
    }
    //Métodos Acessores
    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public int getIdade() {
        return idade;
    }

    public void setIdade(int idade) {
        this.idade = idade;
    }

    public char getSexo() {
        return sexo;
    }

    public void setSexo(char sexo) {
        this.sexo = sexo;
    }
    
    //O Método Abstrato 'toString()' apresenta os atributos da classe
    @Override
    public String toString() {
        return "Dados: {" + "nome = " + nome + ", idade = " + idade + ", sexo = " + sexo + '}';
    }
}
