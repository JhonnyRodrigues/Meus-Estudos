package heranca;
//essa classe `Bolsista` é Descendente da classe `Pessoa` e subclasse de `Aluno`. Ela também é uma classe final, ou seja, não pode ter filhas
public final class Tecnico extends Aluno {
    //Atributo
    private int registroProfissional;
    
    //Método Público
    public void praticar() {
        System.out.println(this.getNome() + " está praticando...");
    }
    
    //Métodos Acessores
    public int getRegistro() {
        return this.registroProfissional;
    }
    
    public void setRegistro(int reg) {
        this.registroProfissional = reg;
    }
}
