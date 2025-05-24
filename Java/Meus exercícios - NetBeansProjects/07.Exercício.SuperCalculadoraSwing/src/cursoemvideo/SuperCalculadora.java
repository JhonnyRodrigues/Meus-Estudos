package cursoemvideo;

public class SuperCalculadora extends javax.swing.JFrame {
   
    public SuperCalculadora() {     //esse é o CONSTRUTOR    (É UM MÉTODO COM O MESMO NOME DA CLASSE)
        initComponents();
        
        painel.setVisible(false);   // o painel vai ficar invisível assim que o Form(tela) aparecer   
    }
   
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel1 = new javax.swing.JLabel();
        jLabel2 = new javax.swing.JLabel();
        jLabel3 = new javax.swing.JLabel();
        spnValor = new javax.swing.JSpinner();
        painel = new javax.swing.JPanel();
        lblCubo = new javax.swing.JLabel();
        lblQuad = new javax.swing.JLabel();
        lblRaizCubo = new javax.swing.JLabel();
        lblModulo = new javax.swing.JLabel();
        jLabel4 = new javax.swing.JLabel();
        jLabel5 = new javax.swing.JLabel();
        jLabel7 = new javax.swing.JLabel();
        jLabel8 = new javax.swing.JLabel();
        lblResto = new javax.swing.JLabel();
        jLabel6 = new javax.swing.JLabel();
        btnCalc = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setResizable(false);
        getContentPane().setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        jLabel1.setFont(new java.awt.Font("Tahoma", 3, 36)); // NOI18N
        jLabel1.setForeground(new java.awt.Color(153, 153, 0));
        jLabel1.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        jLabel1.setText("Super Calculadora");
        getContentPane().add(jLabel1, new org.netbeans.lib.awtextra.AbsoluteConstraints(136, 11, 356, -1));

        jLabel2.setFont(new java.awt.Font("Verdana", 1, 18)); // NOI18N
        jLabel2.setForeground(new java.awt.Color(102, 0, 102));
        jLabel2.setText("Informe um valor:");
        getContentPane().add(jLabel2, new org.netbeans.lib.awtextra.AbsoluteConstraints(69, 109, -1, -1));

        jLabel3.setIcon(new javax.swing.ImageIcon(getClass().getResource("/Imagens/calc color.png"))); // NOI18N
        getContentPane().add(jLabel3, new org.netbeans.lib.awtextra.AbsoluteConstraints(390, 70, -1, -1));

        spnValor.setFont(new java.awt.Font("Verdana", 1, 18)); // NOI18N
        getContentPane().add(spnValor, new org.netbeans.lib.awtextra.AbsoluteConstraints(298, 106, 59, -1));

        lblCubo.setFont(new java.awt.Font("Verdana", 1, 18)); // NOI18N
        lblCubo.setForeground(new java.awt.Color(0, 102, 102));
        lblCubo.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblCubo.setMaximumSize(new java.awt.Dimension(50, 20));

        lblQuad.setFont(new java.awt.Font("Verdana", 1, 18)); // NOI18N
        lblQuad.setForeground(new java.awt.Color(0, 102, 102));
        lblQuad.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblQuad.setMaximumSize(new java.awt.Dimension(50, 20));

        lblRaizCubo.setFont(new java.awt.Font("Verdana", 1, 18)); // NOI18N
        lblRaizCubo.setForeground(new java.awt.Color(0, 102, 102));
        lblRaizCubo.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblRaizCubo.setMaximumSize(new java.awt.Dimension(50, 20));

        lblModulo.setFont(new java.awt.Font("Verdana", 1, 18)); // NOI18N
        lblModulo.setForeground(new java.awt.Color(0, 102, 102));
        lblModulo.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblModulo.setMaximumSize(new java.awt.Dimension(50, 20));

        jLabel4.setFont(new java.awt.Font("Verdana", 1, 18)); // NOI18N
        jLabel4.setText("Resto da divisão por 2:");

        jLabel5.setFont(new java.awt.Font("Verdana", 1, 18)); // NOI18N
        jLabel5.setText("Elevado ao cubo:");

        jLabel7.setFont(new java.awt.Font("Verdana", 1, 18)); // NOI18N
        jLabel7.setText("Raiz quadrada:");

        jLabel8.setFont(new java.awt.Font("Verdana", 1, 18)); // NOI18N
        jLabel8.setText("Valor absoluto:");

        lblResto.setFont(new java.awt.Font("Verdana", 1, 18)); // NOI18N
        lblResto.setForeground(new java.awt.Color(0, 102, 102));
        lblResto.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblResto.setMaximumSize(new java.awt.Dimension(50, 20));

        jLabel6.setFont(new java.awt.Font("Verdana", 1, 18)); // NOI18N
        jLabel6.setText("Raiz cúbica:");

        javax.swing.GroupLayout painelLayout = new javax.swing.GroupLayout(painel);
        painel.setLayout(painelLayout);
        painelLayout.setHorizontalGroup(
            painelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, painelLayout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jLabel6)
                .addGap(135, 135, 135)
                .addGroup(painelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(lblResto, javax.swing.GroupLayout.PREFERRED_SIZE, 60, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(lblModulo, javax.swing.GroupLayout.PREFERRED_SIZE, 60, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(lblCubo, javax.swing.GroupLayout.PREFERRED_SIZE, 60, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(lblQuad, javax.swing.GroupLayout.PREFERRED_SIZE, 60, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(lblRaizCubo, javax.swing.GroupLayout.PREFERRED_SIZE, 60, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
            .addGroup(painelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                .addGroup(painelLayout.createSequentialGroup()
                    .addContainerGap()
                    .addGroup(painelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                        .addComponent(jLabel8)
                        .addComponent(jLabel7)
                        .addComponent(jLabel5)
                        .addComponent(jLabel4))
                    .addContainerGap(95, Short.MAX_VALUE)))
        );
        painelLayout.setVerticalGroup(
            painelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, painelLayout.createSequentialGroup()
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(jLabel6)
                .addGap(46, 46, 46))
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, painelLayout.createSequentialGroup()
                .addContainerGap()
                .addComponent(lblResto, javax.swing.GroupLayout.PREFERRED_SIZE, 23, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(lblCubo, javax.swing.GroupLayout.PREFERRED_SIZE, 23, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(18, 18, 18)
                .addComponent(lblQuad, javax.swing.GroupLayout.PREFERRED_SIZE, 23, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(lblRaizCubo, javax.swing.GroupLayout.DEFAULT_SIZE, 23, Short.MAX_VALUE)
                .addGap(18, 18, 18)
                .addComponent(lblModulo, javax.swing.GroupLayout.PREFERRED_SIZE, 23, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap())
            .addGroup(painelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                .addGroup(painelLayout.createSequentialGroup()
                    .addContainerGap()
                    .addComponent(jLabel4)
                    .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                    .addComponent(jLabel5)
                    .addGap(18, 18, 18)
                    .addComponent(jLabel7)
                    .addGap(52, 52, 52)
                    .addComponent(jLabel8, javax.swing.GroupLayout.PREFERRED_SIZE, 23, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)))
        );

        getContentPane().add(painel, new org.netbeans.lib.awtextra.AbsoluteConstraints(20, 147, -1, -1));

        btnCalc.setIcon(new javax.swing.ImageIcon(getClass().getResource("/Imagens/btncalc.png"))); // NOI18N
        btnCalc.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnCalcActionPerformed(evt);
            }
        });
        getContentPane().add(btnCalc, new org.netbeans.lib.awtextra.AbsoluteConstraints(450, 270, 61, 64));

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void btnCalcActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnCalcActionPerformed
        
        painel.setVisible(true);        // quando clicar no botão, o painel se tornará visível
        int valor = Integer.parseInt(spnValor.getValue().toString());   //pega o valor(devidamente convertido) do spinner
        //int valor = (int) spnValor.getValue();    //outro modo de converter é através do TypeCast
        
        // CALCULA RESTO DA DIVISÃO POR 2
        int resto = valor % 2;                                  
        lblResto.setText(Integer.toString(resto));  //converte a variavel(de inteiro para String) e mostra no label
       
        //CALCULA NUMERO AO CUBO
        int aocubo = (int) Math.pow(valor,3);   //perceba que o método(pow) da classe(Math) pede 2 parâmetros(valor,3)
        lblCubo.setText(Integer.toString(aocubo));
        
        //CALCULA A RAIZ QUADRADA DO NUMERO
        double quadrada = (double) Math.sqrt(valor);
        //lblQuad.setText(Double.toString(quadrada));     invés de converter double to string...
        lblQuad.setText(String.format("%.2f",quadrada ));   //usando o MÉTODO String.format é possível formatar
        //para alterar quantidade de casas decimais
        
        //CALCULA A RAIZ CUBICA DO NUMERO
        double cubica = Math.cbrt(valor);
        //lblRaizCubo.setText(Double.toString(cubica));
        lblRaizCubo.setText(String.format("%.2f", cubica));
        
        //MÓDULO DO NÚMERO
        int modulo = Math.abs(valor);
        lblModulo.setText(Integer.toString(modulo));
        
    }//GEN-LAST:event_btnCalcActionPerformed

    /**
     * @param args the command line arguments
     */
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
            java.util.logging.Logger.getLogger(SuperCalculadora.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(SuperCalculadora.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(SuperCalculadora.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(SuperCalculadora.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new SuperCalculadora().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btnCalc;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JLabel jLabel6;
    private javax.swing.JLabel jLabel7;
    private javax.swing.JLabel jLabel8;
    private javax.swing.JLabel lblCubo;
    private javax.swing.JLabel lblModulo;
    private javax.swing.JLabel lblQuad;
    private javax.swing.JLabel lblRaizCubo;
    private javax.swing.JLabel lblResto;
    private javax.swing.JPanel painel;
    private javax.swing.JSpinner spnValor;
    // End of variables declaration//GEN-END:variables
}
