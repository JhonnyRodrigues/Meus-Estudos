package projeto_youtube;
public class Gafanhoto extends Pessoa{ //conceito de Herança: `Gafanhoto` herda `Pessoa`
    //Atributos Privados (encapsulados)
    private String login;
    private int totAssistido;
    
    //Construtor
    public Gafanhoto(String nome, int idade, char sexo, String loginn) {
        super(nome, idade, sexo); //chama o construtor da superclasse `Pessoa`
        //Atributo passado por parâmetro
        this.login = loginn;
        
        //Atributo pré-configurado
        this.totAssistido = 0;
    }
    
    //Método Público
    public void viuMaisUm() {
        
    }
    
    //Método toString sobrepondo sua superclasse // perceba a chamada do método `toString()` da superclasse `Pessoa`.
    @Override
    public String toString() {
        return "Gafanhoto{" + super.toString() + "login=" + login + ", totAssistido=" + totAssistido + '}';
    }
    
    //Métodos Acessores
    public String getLogin() {
        return login;
    }

    public void setLogin(String login) {
        this.login = login;
    }

    public int getTotAssistido() {
        return totAssistido;
    }

    public void setTotAssistido(int totAssistido) {
        this.totAssistido = totAssistido;
    }
}
