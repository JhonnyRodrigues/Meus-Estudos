package cursoemvideo;

public class FormacaoTriangulos extends javax.swing.JFrame {

    public FormacaoTriangulos() {
        initComponents();
        panRespostas.setVisible(false);     //Esconde o painel ao iniciar
    }    
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel1 = new javax.swing.JLabel();
        jLabel2 = new javax.swing.JLabel();
        jLabel3 = new javax.swing.JLabel();
        lblC = new javax.swing.JLabel();
        lblA = new javax.swing.JLabel();
        lblB = new javax.swing.JLabel();
        sldA = new javax.swing.JSlider();
        sldB = new javax.swing.JSlider();
        sldC = new javax.swing.JSlider();
        jLabel7 = new javax.swing.JLabel();
        btnCalc = new javax.swing.JButton();
        panRespostas = new javax.swing.JPanel();
        lblTipo = new javax.swing.JLabel();
        lblForma = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        jLabel1.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N
        jLabel1.setText("Segmento A");

        jLabel2.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N
        jLabel2.setText("Segmento B");

        jLabel3.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N
        jLabel3.setText("Segmento C");

        lblC.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N
        lblC.setForeground(new java.awt.Color(102, 102, 102));
        lblC.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblC.setText("#");

        lblA.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N
        lblA.setForeground(new java.awt.Color(102, 102, 102));
        lblA.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblA.setText("#");

        lblB.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N
        lblB.setForeground(new java.awt.Color(102, 102, 102));
        lblB.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblB.setText("#");

        sldA.setForeground(new java.awt.Color(51, 51, 0));
        sldA.setMaximum(20);
        sldA.setValue(0);
        sldA.addChangeListener(new javax.swing.event.ChangeListener() {
            public void stateChanged(javax.swing.event.ChangeEvent evt) {
                sldAStateChanged(evt);
            }
        });

        sldB.setForeground(new java.awt.Color(51, 51, 0));
        sldB.setMaximum(20);
        sldB.setValue(0);
        sldB.addChangeListener(new javax.swing.event.ChangeListener() {
            public void stateChanged(javax.swing.event.ChangeEvent evt) {
                sldBStateChanged(evt);
            }
        });

        sldC.setForeground(new java.awt.Color(51, 51, 0));
        sldC.setMaximum(20);
        sldC.setValue(0);
        sldC.addChangeListener(new javax.swing.event.ChangeListener() {
            public void stateChanged(javax.swing.event.ChangeEvent evt) {
                sldCStateChanged(evt);
            }
        });

        jLabel7.setFont(new java.awt.Font("Tahoma", 3, 36)); // NOI18N
        jLabel7.setForeground(new java.awt.Color(153, 0, 153));
        jLabel7.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        jLabel7.setText("Tipos de Triângulos");

        btnCalc.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N
        btnCalc.setText("Verificar");
        btnCalc.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnCalcActionPerformed(evt);
            }
        });

        lblTipo.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N
        lblTipo.setForeground(new java.awt.Color(153, 0, 0));
        lblTipo.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblTipo.setText("Tipo de triângulo");

        lblForma.setFont(new java.awt.Font("Tahoma", 1, 18)); // NOI18N
        lblForma.setForeground(new java.awt.Color(0, 102, 153));
        lblForma.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblForma.setText("Forma ou não?");

        javax.swing.GroupLayout panRespostasLayout = new javax.swing.GroupLayout(panRespostas);
        panRespostas.setLayout(panRespostasLayout);
        panRespostasLayout.setHorizontalGroup(
            panRespostasLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(panRespostasLayout.createSequentialGroup()
                .addContainerGap()
                .addGroup(panRespostasLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(lblTipo, javax.swing.GroupLayout.DEFAULT_SIZE, 400, Short.MAX_VALUE)
                    .addComponent(lblForma, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                .addContainerGap())
        );
        panRespostasLayout.setVerticalGroup(
            panRespostasLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(panRespostasLayout.createSequentialGroup()
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(lblForma, javax.swing.GroupLayout.PREFERRED_SIZE, 31, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(18, 18, 18)
                .addComponent(lblTipo, javax.swing.GroupLayout.PREFERRED_SIZE, 30, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap())
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(79, 79, 79)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(jLabel2)
                            .addComponent(jLabel1))
                        .addGap(18, 18, 18)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(sldA, javax.swing.GroupLayout.PREFERRED_SIZE, 94, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(sldB, javax.swing.GroupLayout.PREFERRED_SIZE, 94, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addGap(18, 18, 18)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                            .addComponent(lblA, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                            .addComponent(lblB, javax.swing.GroupLayout.PREFERRED_SIZE, 30, javax.swing.GroupLayout.PREFERRED_SIZE)))
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(jLabel3)
                        .addGap(18, 18, 18)
                        .addComponent(sldC, javax.swing.GroupLayout.PREFERRED_SIZE, 94, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(18, 18, 18)
                        .addComponent(lblC, javax.swing.GroupLayout.PREFERRED_SIZE, 30, javax.swing.GroupLayout.PREFERRED_SIZE)))
                .addGap(0, 0, Short.MAX_VALUE))
            .addGroup(layout.createSequentialGroup()
                .addGap(158, 158, 158)
                .addComponent(btnCalc)
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(panRespostas, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                        .addGap(0, 0, Short.MAX_VALUE)
                        .addComponent(jLabel7, javax.swing.GroupLayout.PREFERRED_SIZE, 394, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(11, 11, 11)))
                .addContainerGap())
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addComponent(jLabel7)
                .addGap(28, 28, 28)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                            .addGroup(layout.createSequentialGroup()
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                                    .addComponent(lblA)
                                    .addComponent(jLabel1)
                                    .addComponent(sldA, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addComponent(jLabel2)
                                    .addComponent(lblB, javax.swing.GroupLayout.Alignment.TRAILING)))
                            .addComponent(sldB, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(jLabel3)
                            .addComponent(lblC, javax.swing.GroupLayout.Alignment.TRAILING)))
                    .addComponent(sldC, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(27, 27, 27)
                .addComponent(btnCalc)
                .addGap(18, 18, 18)
                .addComponent(panRespostas, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(22, Short.MAX_VALUE))
        );

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void btnCalcActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnCalcActionPerformed

        panRespostas.setVisible(true);     //ao clicar no botão, mostra o painel
        int a = sldA.getValue();    //no objeto slide não é necessário a conversão para inteiro 
        int b = sldB.getValue();    
        int c = sldC.getValue();

        if (a+b>c && b+c>a && c+a>b) {  //as condições devem estar fechadas em um par de parenteses
            lblForma.setText("Formam um triângulo");
            
            // Agora vem mais uma estrutura condicional ANINHADA/indentada, subordinada à primeira
            if (a==b && b==c) { 
                lblTipo.setText("Equilátero");
            }else if (a==b || b==c || c==a){
                lblTipo.setText("Isósceles");
            }else if(a!=b && b!=c && c!=a){
            // E foi necessário terminar com um else-if para não confundir com o else da 1º condicional logo abaixo
                lblTipo.setText("Escaleno");
            }
            
        }else {
            lblForma.setText("É impossível a formação de um triângulo");
            lblTipo.setText(" ");   //não mostrará nada na label de tipo de triângulo
                }
        
    }//GEN-LAST:event_btnCalcActionPerformed

    private void sldAStateChanged(javax.swing.event.ChangeEvent evt) {//GEN-FIRST:event_sldAStateChanged

        lblA.setText(Integer.toString(sldA.getValue()));//nessa linha estão 3 métodos. note no fim que são 3 ')'
//um pra mudar texto do label, outro pra converter para String e outro para pegar valor do slide

    }//GEN-LAST:event_sldAStateChanged

    private void sldBStateChanged(javax.swing.event.ChangeEvent evt) {//GEN-FIRST:event_sldBStateChanged

        lblB.setText(Integer.toString(sldB.getValue()));

    }//GEN-LAST:event_sldBStateChanged

    private void sldCStateChanged(javax.swing.event.ChangeEvent evt) {//GEN-FIRST:event_sldCStateChanged

        lblC.setText(Integer.toString(sldC.getValue()));

    }//GEN-LAST:event_sldCStateChanged

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
            java.util.logging.Logger.getLogger(FormacaoTriangulos.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(FormacaoTriangulos.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(FormacaoTriangulos.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(FormacaoTriangulos.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new FormacaoTriangulos().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btnCalc;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel7;
    private javax.swing.JLabel lblA;
    private javax.swing.JLabel lblB;
    private javax.swing.JLabel lblC;
    private javax.swing.JLabel lblForma;
    private javax.swing.JLabel lblTipo;
    private javax.swing.JPanel panRespostas;
    private javax.swing.JSlider sldA;
    private javax.swing.JSlider sldB;
    private javax.swing.JSlider sldC;
    // End of variables declaration//GEN-END:variables
}
