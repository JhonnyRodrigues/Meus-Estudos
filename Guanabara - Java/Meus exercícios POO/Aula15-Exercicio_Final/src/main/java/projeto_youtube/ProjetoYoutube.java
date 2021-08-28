package projeto_youtube;
public class ProjetoYoutube {
    //Classe Principal
    public static void main(String args[]) {
        Video [] v = new Video[3]; //instancia um objeto do tipo vetor com 3 posições
        v[0] = new Video("Aula 1 de POO");
        v[1] = new Video("Aula 7 de PHP");
        v[2] = new Video("Aula 9 de HTML5");
        
        Gafanhoto g[] = new Gafanhoto[2];
        g[0] = new Gafanhoto("Jubileu",22,'M',"Juba");
        g[1] = new Gafanhoto("Creuza", 12,'F',"creuzita");
        
        Visualizacao vis[] = new Visualizacao[5]; //declara um vetor
        vis[0] = new Visualizacao(g[0], v[2]); //Jubileu assiste HTML
        vis[0].avaliar();
        System.out.println(vis[0].toString());
        
        vis[1] = new Visualizacao(g[0], v[1]); //Jubileu assiste PHP
        vis[1].getFilme().play();
        vis[1].getFilme().like();
        vis[1].avaliar(35.0f);
        System.out.println(vis[1].toString());
        
        vis[2] = new Visualizacao(g[1], v[1]); //Creuza assiste PHP
        vis[2].avaliar(10);
        System.out.println(vis[2].toString());
        
        
        
        
//        System.out.println(v[0].toString());
//        System.out.println(g[0].toString()); //Aplicação do conceito de Polimorfismo de Sobreposição ao chamar os métodos ´toString` da superclasse e da subclasse.
//        System.out.println(vis[1].toString());
    }
}
