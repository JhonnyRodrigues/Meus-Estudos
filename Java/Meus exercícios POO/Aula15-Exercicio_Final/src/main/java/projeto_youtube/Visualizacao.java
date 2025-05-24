package projeto_youtube;
public class Visualizacao {
    //Relação de Agregação
    private Gafanhoto espectador; //liga instância de um objeto como um atributo
    private Video filme;

    //Método Construtor
    public Visualizacao(Gafanhoto espectador, Video filme) {
        this.espectador = espectador;
        this.filme = filme;
        //modificando as propriedas das classes `Gafanhoto` e `Video`
        this.espectador.setTotAssistido(this.espectador.getTotAssistido() +1); 
        this.filme.setViews(this.filme.getViews() +1);
    }
    
    //Métodos para Polimorfismo por Sobrecarga
    public void avaliar() {
        this.filme.setAvaliação(5); //se avaliar sem parâmetro, automaticamente já será nota 5
    }
    
    public void avaliar(int nota) {
        this.filme.setAvaliação(nota);
    }
    
    public void avaliar(float porcentagem) { //a nota é relacionada com o total assistido do filme
        int tot;
        if (porcentagem <= 20) {
            tot = 3;
        } else if (porcentagem <= 50) {
            tot = 5;
        } else if (porcentagem <=90) {
            tot = 8;
        } else {
            tot = 10;
        }
        this.filme.setAvaliação(tot);
    }

    //Métodos Acessores
    public Gafanhoto getEspectador() {
        return espectador;
    }

    public void setEspectador(Gafanhoto espectador) {
        this.espectador = espectador;
    }

    public Video getFilme() {
        return filme;
    }

    public void setFilme(Video filme) {
        this.filme = filme;
    }

    //Método gerado automaticamente pelo NetBeans
    @Override
    public String toString() {
        return "Visualizacao{" + "espectador=" + espectador + ", filme=" + filme + '}';
    }
}
