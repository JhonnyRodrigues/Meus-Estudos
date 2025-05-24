
package cursoemvideo;

import java.util.Calendar;

class Sufragio extends javax.swing.JFrame {
    
    public Sufragio() {
        initComponents();
        
        Calendar hoje = Calendar.getInstance(); //cria um objeto`hoje` na classe Calendar e chama o método(getInstance)
        int anosistema = hoje.get(Calendar.YEAR);   //armazena na variável `anosistema` o valor do método(get(Calendar.YEAR))
        lblAno.setText("Estamos no ano de " + Integer.toString(anosistema));  //com concatenação usei apenas um label
    }    
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel1 = new javax.swing.JLabel();
        txtNasc = new javax.swing.JTextField();
        btnCalc = new javax.swing.JButton();
        lblResult = new javax.swing.JLabel();
        lblIdade = new javax.swing.JLabel();
        lblAno = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        jLabel1.setFont(new java.awt.Font("Tahoma", 1, 12)); // NOI18N
        jLabel1.setText("Digite seu Ano de Nascimento:");

        txtNasc.setFont(new java.awt.Font("Tahoma", 1, 12)); // NOI18N
        txtNasc.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                txtNascActionPerformed(evt);
            }
        });

        btnCalc.setBackground(new java.awt.Color(255, 153, 102));
        btnCalc.setFont(new java.awt.Font("Tahoma", 1, 12)); // NOI18N
        btnCalc.setForeground(new java.awt.Color(51, 0, 51));
        btnCalc.setText("Posso Votar?");
        btnCalc.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnCalcActionPerformed(evt);
            }
        });

        lblResult.setFont(new java.awt.Font("Tahoma", 1, 12)); // NOI18N
        lblResult.setForeground(new java.awt.Color(102, 0, 0));
        lblResult.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblResult.setText("Resultado");

        lblIdade.setFont(new java.awt.Font("Tahoma", 1, 12)); // NOI18N
        lblIdade.setForeground(new java.awt.Color(102, 102, 0));
        lblIdade.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblIdade.setText("idade");

        lblAno.setFont(new java.awt.Font("Tahoma", 1, 14)); // NOI18N
        lblAno.setForeground(new java.awt.Color(102, 102, 0));
        lblAno.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblAno.setText("Em qual ano estamos?");

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(lblAno, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                            .addComponent(lblResult, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                        .addContainerGap())
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                        .addGap(0, 0, Short.MAX_VALUE)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                                    .addComponent(btnCalc)
                                    .addComponent(jLabel1))
                                .addGap(8, 8, 8)
                                .addComponent(txtNasc, javax.swing.GroupLayout.PREFERRED_SIZE, 47, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addGap(21, 21, 21))
                            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                                .addComponent(lblIdade, javax.swing.GroupLayout.PREFERRED_SIZE, 253, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addContainerGap())))))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(9, 9, 9)
                .addComponent(lblAno)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel1)
                    .addComponent(txtNasc, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 14, Short.MAX_VALUE)
                .addComponent(btnCalc)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(lblIdade, javax.swing.GroupLayout.PREFERRED_SIZE, 21, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(lblResult, javax.swing.GroupLayout.PREFERRED_SIZE, 18, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap())
        );

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void txtNascActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_txtNascActionPerformed
        
    }//GEN-LAST:event_txtNascActionPerformed

    private void btnCalcActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnCalcActionPerformed
        
        Calendar hoje = Calendar.getInstance();     //repeti o método Calendar porque a variavel anosistema agora está dentro
        int anosistema = hoje.get(Calendar.YEAR);   // de uma PRIVATE VOID (método privado de outras variáveis)
        
        int nasc = Integer.parseInt(txtNasc.getText());
        int idade = anosistema - nasc;
        lblIdade.setText("Você tem " + Integer.toString(idade) + " anos");
        
        /*ESTRUTURA CONDICIONAL COMPOSTA ENCADEADA de muitas linhas
        if (idade < 16) {
            lblResult.setText("Não vota");
        } else {
                if ((idade >= 16 && idade < 18) || (idade > 70)) {      //perceba que toda a condição deve estar entre parenteses
                lblResult.setText("Voto facultativo");
                } else {
                    lblResult.setText("Voto obrigatório");// AQUI NÃO FOI PRECISO DECLARAR A CONDIÇÃO POIS FOI O QUE SOBROU
                        }
        }
        */
        //Estrutura condicional composta encadeada SIMPLIFICADA
        if (idade < 16) {
            lblResult.setText("Não vota");
        } else if ((idade >= 16 && idade < 18) || (idade > 70)) {  //Eliminei um par de chaves e juntei IF-ELSE
            lblResult.setText("Voto facultativo");
        } else {    //caberia mais um IF mas seria redundante
            lblResult.setText("Voto obrigatório");      
                        }        
    }//GEN-LAST:event_btnCalcActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String []args) {
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
            java.util.logging.Logger.getLogger(Sufragio.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Sufragio.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Sufragio.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Sufragio.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Sufragio().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btnCalc;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel lblAno;
    private javax.swing.JLabel lblIdade;
    private javax.swing.JLabel lblResult;
    private javax.swing.JTextField txtNasc;
    // End of variables declaration//GEN-END:variables
}
