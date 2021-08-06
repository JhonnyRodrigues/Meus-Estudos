package encapsulamento;
public class ProjetoLivro {
    public static void main(String[] args) {
        Pessoa p[] = new Pessoa[2];
        Livro l[] = new Livro[3];
        
        p[0] = new Pessoa("Pedro",22,'M');
        p[1] = new Pessoa("Maria",25,'F');
        
        l[0] = new Livro("José das Couves","Aprendendo Java",300,p[0]);
        l[1] = new Livro("Pedro Paulo","POO para iniciantes",500,p[1]);
        l[2] = new Livro("Maria Cândido","Java avançado",800,p[0]);

        p[0].fazerAniversario(); //Pedro agora terá 23 anos
        
        l[0].abrir();
        l[0].folhear(200);
        l[0].avancarPag(); //vai para a pag 201
                
        System.out.println(l[0].detalhes());
        System.out.println("");
        System.out.println(l[1].detalhes());
    }
}
