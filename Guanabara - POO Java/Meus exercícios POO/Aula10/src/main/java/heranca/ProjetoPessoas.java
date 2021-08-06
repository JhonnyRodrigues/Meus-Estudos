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
        
        //imprimindo na tela
        //System.out.println(p1.toString());
        System.out.println(p2.toString());
        System.out.println(p3.toString());
        System.out.println(p4.toString());
        System.out.println(a1.toString());
        System.out.println(v1.toString());
    }
}
