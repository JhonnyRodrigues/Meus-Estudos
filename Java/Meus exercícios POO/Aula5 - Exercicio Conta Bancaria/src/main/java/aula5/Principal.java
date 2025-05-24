package aula5;
public class Principal {
    public static void main(String[] args) {
        ContaBanco c1 = new ContaBanco(2445,"Fran");        
        ContaBanco c2 = new ContaBanco(78781,"Jubileu");        
        ContaBanco c3 = new ContaBanco(240710,"Creusa");
        
        c1.abrirConta("cp");
        c2.abrirConta("cp");
        c3.abrirConta("cc");
        
        c2.depositar(300);
        c3.depositar(500);
        
        c3.sacar(100);
        c3.sacar(50000); //Creuza não é rica!
        
        c2.informacoes();
        c2.pagarMensal();
        c2.fecharConta();
        
        c1.informacoes();
        c2.informacoes();
        c3.informacoes();
    }
}