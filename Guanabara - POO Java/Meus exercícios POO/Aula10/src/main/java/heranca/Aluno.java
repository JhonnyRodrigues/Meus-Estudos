package heranca;
public class Aluno extends Pessoa{ //A classe `Aluno` herda os atributos e métodos da classe `Pessoa`
    //Atributos
    private int matricula;
    private String curso;
    
    //Método Público
    public void cancelarMatr() {
        System.out.println("Matrícula cancelada de " + this.getNome());
    }
    
    public void pagarMensalidade() { //esse método será sobrescrito na classe `Bolsista`.
        System.out.println("Pagando mensalidade de aluno " + this.nome); //como a visibilidade é `protected`, não foi preciso usar o método .getNome()
    }
    
    //Métodos Acessores
    public int getMatricula() {
        return matricula;
    }

    public void setMatricula(int matricula) {
        this.matricula = matricula;
    }

    public String getCurso() {
        return curso;
    }

    public void setCurso(String curso) {
        this.curso = curso;
    }
}
