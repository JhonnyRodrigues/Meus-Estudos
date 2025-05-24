package encapsulamento;
public class Livro implements Publicacao { //a classe importará os métodos da interface
    //Declarando Atributos
    private String autor, titulo;
    private int totPag, pagAtual;
    private boolean aberto;
    private Pessoa leitor; //a variável `leitor` será uma instância da classe `Pessoa`
    
    //Método Construtor
    public Livro(String autor, String titulo, int totPag, Pessoa leitor) {
        //atributos definidos por parâmetros
        this.autor = autor;
        this.titulo = titulo;
        this.totPag = totPag;
        this.leitor = leitor;
        //atributos pré-definidos
        this.pagAtual = 0;
        this.aberto = false;
    }
    //Métodos Públicos Abstratos
    public String detalhes() { //esse método foi criado automaticamente: Alt+insert -> toString()
        return "Livro{" + "autor=" + autor + ", titulo=" + titulo + ",\ntotPag=" + totPag + ", pagAtual=" + pagAtual + //Note que retorna uma String
                ", aberto=" + aberto + ",\nleitor=" + leitor.getNome() + ", idade=" + leitor.getIdade() + ", sexo=" + leitor.getSexo()+'}';
    }
    //Métodos Acessores
    public String getAutor() {
        return autor;
    }

    public void setAutor(String autor) {
        this.autor = autor;
    }

    public String getTitulo() {
        return titulo;
    }

    public void setTitulo(String titulo) {
        this.titulo = titulo;
    }

    public int getTotPag() {
        return totPag;
    }

    public void setTotPag(int totPag) {
        this.totPag = totPag;
    }

    public int getPagAtual() {
        return pagAtual;
    }

    public void setPagAtual(int pagAtual) {
        this.pagAtual = pagAtual;
    }

    public boolean isAberto() {
        return aberto;
    }

    public void setAberto(boolean aberto) {
        this.aberto = aberto;
    }

    public Pessoa getLeitor() {
        return leitor;
    }

    public void setLeitor(Pessoa leitor) {
        this.leitor = leitor;
    }
    
    //Métodos da interface
    @Override
    public void abrir() {
        this.aberto = true;
    }

    @Override
    public void fechar() {
        this.aberto = false;
    }

    @Override
    public void folhear(int p) {
        if (p > this.totPag) {
            this.pagAtual = 0; 
        } else {
            this.pagAtual = p;
        }
    }

    @Override
    public void avancarPag() {
        this.pagAtual++;
    }

    @Override
    public void voltarPag() {
        this.pagAtual--;
    }
}
