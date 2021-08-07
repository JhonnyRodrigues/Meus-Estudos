package heranca;
public class ProjetoPessoas {
        //programa Principal
    public static void main(String[] args) {
        //criando objetos
        
        //Pessoa p1 = new Pessoa();     a classe `Pessoa` não pode ser instanciada porque é uma classe abstrata
        Aluno p2 = new Aluno();
        Professor p3 = new Professor();
        Funcionario p4 = new Funcionario();
        Visitante v1 = new Visitante();
        Aluno a1 = new Aluno();
        Bolsista b1 = new Bolsista();
        Tecnico t1 = new Tecnico();
        
        //atribuindo valores aos objetos
        //p1.setNome("Pedro");
        p2.setNome("Maria");
        p3.setNome("Cláudio");
        p4.setNome("Fabiano");
        //p1.setSexo('M');
        p2.setSexo('F');
        p3.fazerAniv();
        p4.setIdade(18);
        p2.setCurso("Hardware");
        p3.setSalario(2500.75f);
        p4.setSetor("Almoxarifado");
        a1.setNome("Jhonny");
        a1.setMatricula(2756030);
        a1.setCurso("Informática");
        a1.setIdade(29);
        a1.setSexo('M');
        a1.pagarMensalidade();
        b1.setNome("Jubileu");
        b1.setMatricula(23251);
        b1.setSexo('M');
        b1.setBolsa(12.5f);
        b1.pagarMensalidade();
        v1.setNome("Visitante");
        t1.setNome("Técnico");
        t1.praticar();
        t1.cancelarMatr();
        
        //imprimindo na tela
        //System.out.println(p1.toString());
        System.out.println(p2.toString());
        System.out.println(p3.toString());
        System.out.println(p4.toString());
        System.out.println(a1.toString());
        System.out.println(v1.toString());
        System.out.println(b1.toString());
        System.out.println(t1.toString());
    }
}
