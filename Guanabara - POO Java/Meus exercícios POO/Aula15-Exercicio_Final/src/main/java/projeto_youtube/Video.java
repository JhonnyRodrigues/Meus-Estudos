package projeto_youtube;
public class Video implements AcoesVideo { //a classe `Video` vai declarar os métodos abstratos da Interface `AcoesVideo`
    //Atributos Privados
    private String titulo;
    private int avaliacao, views, curtidas;
    private boolean reproduzindo;

    //Construtor é o método que é executado assim que o objeto for criado/instanciado
    public Video(String titulo) { //o construtor recebe o mesmo nome de sua classe
        //Único aatributo que será parâmetro na criação do objeto
        this.titulo = titulo;
        //Atributos que, por já serem pré-configurados, não serão parâmetros na criação do objeto
        this.avaliacao = 0;
        this.views = 0;
        this.curtidas = 0;
        this.reproduzindo = false;        
    }
    
    //Métodos Acessores (conceito do Polimorfismo)
    public String getTitulo() {
        return titulo;
    }

    public void setTitulo(String titulo) {
        this.titulo = titulo;
    }

    public int getAvaliação() {
        return avaliacao;
    }

    public void setAvaliação(int avaliação) {
        int nova;
        nova = (this.avaliacao + avaliação) / this.views; //a avaliação do video será a média de avaliações
        this.avaliacao = nova;
    }

    public int getViews() {
        return views;
    }

    public void setViews(int views) {
        this.views = views;
    }

    public int getCurtidas() {
        return curtidas;
    }

    public void setCurtidas(int curtidas) {
        this.curtidas = curtidas;
    }

    public boolean isReproduzindo() {
        return reproduzindo;
    }

    public void setReproduzindo(boolean reproduzindo) {
        this.reproduzindo = reproduzindo;
    }
    
    //Implementações da classe `AcoesVideo`
    @Override  //é a anotação para indicar herança por sobreposição
    public void play() {
        this.reproduzindo = true;
    }

    @Override
    public void pause() {
        this.reproduzindo = false;
    }

    @Override
    public void like() {
        this.curtidas ++;
    }

    @Override //cria um Polimorfismo de Sobreposição para o método-automático `toString()`
    public String toString() {
        return "Video{" + "titulo=" + titulo + ", avaliacao=" + avaliacao + ", views=" + views + ", curtidas=" + curtidas + ", reproduzindo=" + reproduzindo + '}';
    }
    
}
