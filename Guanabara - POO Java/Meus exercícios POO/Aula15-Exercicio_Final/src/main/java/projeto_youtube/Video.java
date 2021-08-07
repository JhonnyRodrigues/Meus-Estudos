package projeto_youtube;
public class Video implements AcoesVideo { //a classe `Video` vai declarar os métodos abstratos da Interface `AcoesVideo`
    //Atributos
    private String titulo;
    private int avaliacao, views, curtidas;
    private boolean reproduzindo;

    //Construtor é o método que é executado assim que criado/instanciado objeto
    public Video(String titulo) {
        this.titulo = titulo;
        this.avaliacao = 1;
        this.views = 0;
        this.curtidas = 0;
        this.reproduzindo = false;        
    }
    
    //Métodos Acessores
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
        this.avaliacao = avaliação;
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
    @Override  //herança por sobreposição
    public void play() {
        
    }

    @Override
    public void pause() {
        
    }

    @Override
    public void like() {
        
    }

    @Override //cria um Polimorfismo de Sobrescrição para o método `toString()`
    public String toString() {
        return "Video{" + "titulo=" + titulo + ", avaliacao=" + avaliacao + ", views=" + views + ", curtidas=" + curtidas + ", reproduzindo=" + reproduzindo + '}';
    }
    
}
