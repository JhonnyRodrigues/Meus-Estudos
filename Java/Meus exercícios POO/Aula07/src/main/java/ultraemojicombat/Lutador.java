package ultraemojicombat;
public class Lutador {
    //Atributos
    private String nome;
    private String nacionalidade;
    private int idade;
    private float altura;
    private float peso;
    private String categoria;
    private int empates, vitorias, derrotas;

    //Método Construtor
    public Lutador(String no, String na, int id, float al, float pe, int vi, int de, int em) {
        this.nome = no;
        this.nacionalidade = na;
        this.idade = id;
        this.altura = al;
        this.setPeso(pe); //é preciso executar o método acessor para poder atualizar a categoria
        this.empates = em;
        this.vitorias = vi;
        this.derrotas = de;
    }
       
    //Métodos Acessores
    public String getNome() {
        return this.nome;
    }
    
    private void setNome(String no) {
        this.nome = no;
    }
    
    private String getNacionalidade() {
        return this.nacionalidade;
    }
    
    private void setNacionalidade(String na) {
        this.nacionalidade = na;
    }
    
    private int getIdade() {
        return this.idade;
    }
    
    private void setIdade(int id) {
        this.idade = id;
    }

    private float getAltura() {
        return altura;
    }

    private void setAltura(float altura) {
        this.altura = altura;
    }

    private float getPeso() {
        return peso;
    }

    private void setPeso(float peso) {
        this.peso = peso;
        this.setCategoria(); //quando mudar o peso, chama e atualiza a categoria
    }
    
    protected String getCategoria() {
        return this.categoria;
    }
    
    private void setCategoria() {
        if (peso <52.2) {
            this.categoria = ("Inapto para lutar porque o peso está ABAIXO de qualquer categoria");
        } else if (peso <= 70.3) {
            this.categoria = ("Leve");
        } else if (peso <= 83.9) {
            this.categoria = ("Médio");
        } else if (peso <= 120.2) {
            this.categoria = ("Pesado");
        } else {
            this.categoria = ("Inapto para lutar porque o peso está ACIMA de qualquer categoria");
        }
    }

    private int getEmpates() {
        return empates;
    }

    private void setEmpates(int empates) {
        this.empates = empates;
    }

    private int getVitorias() {
        return vitorias;
    }

    private void setVitorias(int vitorias) {
        this.vitorias = vitorias;
    }

    private int getDerrotas() {
        return derrotas;
    }

    private void setDerrotas(int derrotas) {
        this.derrotas = derrotas;
    }
    
    //Métodos Abstatos
    public void ganharLuta() {
        this.setVitorias(this.getVitorias() + 1);
    }
    
    public void perderLuta() {
        this.setDerrotas(this.getDerrotas() + 1);
    }
    
    public void empatarLuta() {
        this.setEmpates(this.getEmpates() + 1);
    }
    
    public void apresentacao() {
        System.out.println("CHEGOU A HORA! Apresentamos o lutador " + this.getNome());
        System.out.println("Diretamente de " + this.getNacionalidade());
        System.out.println("Com " + this.getIdade() + " anos e " + this.getAltura() + "m de altura");
        System.out.println("Pesando " + this.getPeso() + " Kg");
        System.out.println("Ganhou " + this.getVitorias() + " lutas");
        System.out.println("Perdeu " + this.getDerrotas() + " lutas");
        System.out.println("Empatou " + this.getEmpates() + " lutas");
    }
    
    public void status() {
        System.out.println(this.getNome() + " é um peso " + this.getCategoria());
        System.out.println("Ganhou " + this.getVitorias() + " vezes");
        System.out.println("Perdeu " + this.getDerrotas() + " vezes");
        System.out.println("Empatou " + this.getEmpates() + " vezes");
    }
}
