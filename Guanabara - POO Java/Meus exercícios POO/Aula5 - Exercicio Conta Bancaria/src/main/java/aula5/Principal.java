package aula5;
public class Principal {
    public static void main(String[] args) {
        ContaBanco c1 = new ContaBanco(2445,"Fran",1000f);
        c1.abrirConta("cp");
        c1.dados();
        
        ContaBanco c2 = new ContaBanco(78781,"Jubileu",300f);
        c2.abrirConta("cp");
        c2.dados();
        
        ContaBanco c3 = new ContaBanco(240710,"Creusa",500f);
        c3.abrirConta("cc");
        c3.dados();
    }
}
