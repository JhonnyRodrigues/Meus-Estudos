
package cursoemvideo;

public class FXMLDocumentController implements Initializable {
    
    @FXML
    private Label lblMensagem;
    private Button btnClick;
    
    @FXML
    private void clicouBotao(ActionEvent event) {
        
        lblMensagem.setText("Fran, Eu te Amo!   S2");        
    }
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    
}
