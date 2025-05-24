package cursoemvideo;
public class Caneta {
//declarando as variáveis
    public String modelo;   
    private float ponta;
    private String cor;
    private int tamanho;
    private boolean tampada;

//Este é o método abaixo é o CONSTRUTOR, ele deve ter o mesmo nome de sua classe.    
    public Caneta(String m, float p, int t){ //Esse método contrutor também receberá 3 parâmetros: Modelo, Ponta e Tamanho.
        this.cor = "Azul";  //a caneta já será azul quando criada
        
        this.setModelo(m);  //tanto posso atribuir valor pela método acessor SETTER (+seguro)
        this.setPonta(p);   //quanto posso atribuir valor diretamente
        this.tamanho = t;   //como não criei um método acessor para `tamanho` então só posso atribuir valor diretamente
        this.tampar();      //o objeto caneta já nasce tampado
    }
    
    public String getModelo(){  //é sem parâmetro mas retorna valor
        return this.modelo;
    }
    
    public void setModelo(String m){    //é VOID pois não retorna nada
        this.modelo = m;
    }
    
    public float getPonta(){
        return this.ponta;
    }
    
    public void setPonta (float p){
        this.ponta = p;
    }
    
    public void status(){
        System.out.println("SOBRE A CANETA:");
        System.out.println("Modelo: " + this.modelo);
        System.out.println("Ponta: " + this.ponta);
        System.out.println("Cor: " + this.cor);
        System.out.println("Tampada? " + this.tampada);
    }
    
    public void tampar(){
        this.tampada = true;
    }
    
    public void destampada(){
        this.tampada = false;
    }
}
