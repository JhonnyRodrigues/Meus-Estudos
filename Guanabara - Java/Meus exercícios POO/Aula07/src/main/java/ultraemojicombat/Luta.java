package ultraemojicombat;

import java.util.Random; //importa a classe `Random` que está dentro do pacote `java.util`

public class Luta {
    //Atributos
    private Lutador desafiado;  //tipos abstratos de dados
    private Lutador desafiante; //A classe `Lutador` virou um tipo
    private int rounds;
    private boolean aprovada;
    
    //Métodos Acessores
    public Lutador getDesafiado(){    
        return desafiado;
    }
    
    public void setDesafiado(Lutador desafiado) {
        this.desafiado = desafiado;
    }

    public Lutador getDesafiante() {
        return desafiante;
    }

    public void setDesafiante(Lutador desafiante) {
        this.desafiante = desafiante;
    }

    public int getRounds() {
        return rounds;
    }

    public void setRounds(int rounds) {
        this.rounds = rounds;
    }

    public boolean isAprovada() {
        return aprovada;
    }

    public void setAprovada(boolean aprovada) {    
        this.aprovada = aprovada;
    }

    //Métodos Públicos Abstratos
    public void marcarLuta(Lutador l1, Lutador l2) {
        if (l1.getCategoria().equals(l2.getCategoria()) && (l1 != l2)) { //como `Categoria` é do tipo String, o NetBeans recomenda usar o método equals() para comparar valores
            this.aprovada = true;
            this.desafiado = l1;
            this.desafiante = l2;
        } else {
            this.aprovada = false;
            this.desafiado = null;
            this.desafiante = null;
        }
    }
    
    public void lutar() {
        if (this.aprovada) {
            System.out.println("### DESAFIADO ###");
            this.desafiado.apresentacao();
            System.out.println("### DESAFIANTE ###");
            this.desafiante.apresentacao();
            System.out.println("");
            System.out.println("### RESULTADO DA LUTA ###");
            Random aleatorio = new Random();
            int vencedor = aleatorio.nextInt(3); //gera 3 resultados: 0, 1 ou 2
            switch(vencedor) {
                case 0: //Empate
                    System.out.println("Empatou!");
                    this.desafiado.empatarLuta();
                    this.desafiante.empatarLuta();
                    break;
                case 1: //Desafiado vence
                    System.out.println("Vitória do " + this.desafiado.getNome()); //`desafiado` é só uma variável então, para receber valor, precisa chamar o método `getNome()` de sua classe `Lutador`
                    this.desafiado.ganharLuta();
                    this.desafiante.perderLuta();
                    break;
                case 2: //Desafiante vence
                    System.out.println("Vitória do " + this.desafiante.getNome());
                    this.desafiado.perderLuta();
                    this.desafiante.ganharLuta();
                    break;
            }
            System.out.println("###########################");
            System.out.println("");
        } else {
            System.out.println("A luta não pode acontecer");
        }
    }
}
