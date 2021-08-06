package heranca;
public class Funcionario extends Pessoa {//herança
    //Atributos
    private String setor;
    private boolean trabalhando;
    
    //Métodos Abstratos
    public void mudarTrabalho() {
        this.trabalhando = ! this.trabalhando; //inverte a lógica
    }
    //Métodos Acessores
    public String getSetor() {
        return setor;
    }

    public void setSetor(String setor) {
        this.setor = setor;
    }

    public boolean isTrabalhando() {
        return trabalhando;
    }

    public void setTrabalhando(boolean trabalhando) {
        this.trabalhando = trabalhando;
    }
}
