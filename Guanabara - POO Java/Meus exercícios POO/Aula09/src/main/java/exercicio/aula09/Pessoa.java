package exercicio.aula09;
public class Pessoa {
    //Declarando Atributos
    private String nome;
    private int idade;
    private char sexo;
    //Método Construtor
    public Pessoa(String nome, int idade, char sexo) {
        this.nome = nome;
        this.idade = idade;
        this.sexo = sexo;
    }
    //Método Público Abstrato
    public void fazerAniversario() {
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
}
