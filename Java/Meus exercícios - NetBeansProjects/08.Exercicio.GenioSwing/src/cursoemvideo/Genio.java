
package cursoemvideo;

import java.awt.Font;

public class Genio extends javax.swing.JFrame {

    
    public Genio() {            //metodo CONSTRUTOR , QUE EXECUTA ASSIM QUE A TELA APARECER
                                // o código vem entre o bloco de chaves, após o 'initComponents'
        initComponents();       //só o fato de escrever entre as tags HTML, ele já quebra a linha
                                //a tag <strong) e depois </strong> deixa em negrito
        lblDialogo.setText("<html>Vou pensar em um número entre <strong>1 e </strong>5. Tente adivinhar</html>");
        
    }              
    
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel1 = new javax.swing.JLabel();
        jLabel3 = new javax.swing.JLabel();
        spnPalpite = new javax.swing.JSpinner();
        btnPalpite = new javax.swing.JButton();
        lblDialogo = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        getContentPane().setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        jLabel1.setIcon(new javax.swing.ImageIcon(getClass().getResource("/Imagens/Genie5.png"))); // NOI18N
        getContentPane().add(jLabel1, new org.netbeans.lib.awtextra.AbsoluteConstraints(0, 0, 340, -1));

        jLabel3.setFont(new java.awt.Font("Tahoma", 1, 20)); // NOI18N
        jLabel3.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        jLabel3.setText("Valor");
        getContentPane().add(jLabel3, new org.netbeans.lib.awtextra.AbsoluteConstraints(383, 200, 60, 30));

        spnPalpite.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N
        spnPalpite.setModel(new javax.swing.SpinnerNumberModel(1, 1, 5, 1));
        spnPalpite.setCursor(new java.awt.Cursor(java.awt.Cursor.DEFAULT_CURSOR));
        getContentPane().add(spnPalpite, new org.netbeans.lib.awtextra.AbsoluteConstraints(480, 200, 50, -1));

        btnPalpite.setFont(new java.awt.Font("Tahoma", 3, 30)); // NOI18N
        btnPalpite.setForeground(new java.awt.Color(0, 153, 204));
        btnPalpite.setText("Palpite");
        btnPalpite.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnPalpiteActionPerformed(evt);
            }
        });
        getContentPane().add(btnPalpite, new org.netbeans.lib.awtextra.AbsoluteConstraints(390, 270, -1, -1));

        lblDialogo.setFont(new java.awt.Font("Tahoma", 3, 22)); // NOI18N
        lblDialogo.setForeground(new java.awt.Color(0, 102, 204));
        lblDialogo.setText("Frase");
        getContentPane().add(lblDialogo, new org.netbeans.lib.awtextra.AbsoluteConstraints(340, 20, 270, 130));

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void btnPalpiteActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnPalpiteActionPerformed

        //METODO PARA GERAR Nº ALEATÓRIO
        double aleatorio = 1 + Math.random() * (6 - 1);     //(1 + aleatorio * (6-1));   "menor + random *(maior-menor)
        int valor = (int) aleatorio;     // muda de double pra int por meio de typecast
        
        int palpite = Integer.parseInt(spnPalpite.getValue().toString());   //COLHE o nº escolhido pelo user
        
        String f1 = "<html>Acertô Mizeravi!!</html>";
        String f2 = "<html>Já diria o Faustão... EeeeeeeeeeRRooou! Eu pensei no Nº " + valor + "</html>";   //se liga na concatenação
            
        String resultado = (valor == palpite) ? f1 : f2;    //ternarios
        
        //ALTERAR A FONTE QUANDO ACERTAR O RESULTADO:
        lblDialogo.setFont(new Font("Arial Black", Font.PLAIN, 22));        
        lblDialogo.setText(resultado);        
        
    }//GEN-LAST:event_btnPalpiteActionPerformed

    
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(Genio.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Genio.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Genio.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Genio.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Genio().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btnPalpite;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel lblDialogo;
    private javax.swing.JSpinner spnPalpite;
    // End of variables declaration//GEN-END:variables
}
