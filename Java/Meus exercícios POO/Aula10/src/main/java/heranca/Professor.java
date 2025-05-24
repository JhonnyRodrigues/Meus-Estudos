package heranca;
public class Professor extends Pessoa { //herança
    //Atributos
    private String especialidade;
    private float salario;
    
    //Método Público
    public void receberAumento() {
        
    }
    //Métodos Acessores
    public String getEspecialidade() {
        return especialidade;
    }

    public void setEspecialidade(String especialidade) {
        this.especialidade = especialidade;
    }

    public float getSalario() {
        return salario;
    }

    public void setSalario(float salario) {
        this.salario = salario;
    }
}
