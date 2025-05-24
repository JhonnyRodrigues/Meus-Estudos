package projeto_youtube;
public abstract class Pessoa { //uma classe abstrata não implementa seus métodos, ou seja, não os explicita/codifica nela mesma. Isso porque sua função é apenas gerar outras classes e, como consequencia disso, não pode instanciar objetos.
    //Atributos Protegidos (encapsulados)
    protected String nome;
    protected int idade;
    protected char sexo;
    protected float experiencia;

    //Método Construtor
    public Pessoa(String nome, int idade, char sexo) {
        //Atributos alterados por parâmetros
        this.nome = nome;
        this.idade = idade;
        this.sexo = sexo;
        
        //Atributo já definido
        this.experiencia = 0f;
    }
    
    //Método Protegido
    protected void ganharXP(){
        
    }
    
    //Método sobrescrito gerado automáticamente para apresentação dos dados
    @Override
    public String toString() {
        return "Pessoa{" + "nome=" + nome + ", idade=" + idade + ", sexo=" + sexo + ", experiencia=" + experiencia + '}';
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

    public float getExperiencia() {
        return experiencia;
    }

    public void setExperiencia(int experiencia) {
        this.experiencia = experiencia;
    }

    public char getSexo() {
        return sexo;
    }

    public void setSexo(char sexo) {
        this.sexo = sexo;
    }
}
