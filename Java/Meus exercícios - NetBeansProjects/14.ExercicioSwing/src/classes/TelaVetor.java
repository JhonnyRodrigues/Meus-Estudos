
package classes;

import java.util.Arrays;    //importa da biblioteca .util a classe Arrays, para trabalhar com vetores
import javax.swing.DefaultListModel;

public class TelaVetor extends javax.swing.JFrame {

    int vetor [] = new int [6];    //cria um vetor de 6 posições
    DefaultListModel lista = new DefaultListModel();    //cria um objeto `lista`
    // linkei indo na aba Projeto, selecionar o objeto listVetor, clica em model(aba propriedades), alterar para código-personalizado e,
    //por fim, coloque o nome do objeto DefaultListModel que, no caso em questão, se chama `lista`
    int selecionado = 0;    //cria um atributo que vai ser o item da lista selecionado no momento
    int c;  //contador
        
    public TelaVetor() {
        initComponents();
        for (c = 0; c < vetor.length;c++){//jogando esse for each aqui, o vetor aparecerá já no inicio, assim que executar o programa
            lista.addElement(vetor[c]);
        }
    }
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        spnNum = new javax.swing.JSpinner();
        btnAdic = new javax.swing.JButton();
        btnRemov = new javax.swing.JButton();
        btnOrd = new javax.swing.JButton();
        jLabel1 = new javax.swing.JLabel();
        lblSelecionado = new javax.swing.JLabel();
        jScrollPane1 = new javax.swing.JScrollPane();
        listVetor = new javax.swing.JList<>();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        btnAdic.setText("Adicionar");
        btnAdic.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnAdicActionPerformed(evt);
            }
        });

        btnRemov.setText("Remover");
        btnRemov.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnRemovActionPerformed(evt);
            }
        });

        btnOrd.setText("Ordenar");
        btnOrd.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnOrdActionPerformed(evt);
            }
        });

        jLabel1.setText("Vetor");

        lblSelecionado.setText("0");

        listVetor.setModel(lista);
        listVetor.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                listVetorMouseClicked(evt);
            }
        });
        jScrollPane1.setViewportView(listVetor);

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING, false)
                    .addGroup(layout.createSequentialGroup()
                        .addGap(105, 105, 105)
                        .addComponent(btnAdic))
                    .addGroup(layout.createSequentialGroup()
                        .addContainerGap()
                        .addComponent(spnNum, javax.swing.GroupLayout.PREFERRED_SIZE, 53, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                            .addComponent(btnOrd, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                            .addComponent(btnRemov))))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 55, Short.MAX_VALUE)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jScrollPane1, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.PREFERRED_SIZE, 79, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                        .addComponent(jLabel1)
                        .addGap(18, 18, 18)
                        .addComponent(lblSelecionado, javax.swing.GroupLayout.PREFERRED_SIZE, 35, javax.swing.GroupLayout.PREFERRED_SIZE)))
                .addContainerGap())
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel1)
                    .addComponent(lblSelecionado))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 154, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
            .addGroup(layout.createSequentialGroup()
                .addGap(20, 20, 20)
                .addComponent(btnAdic)
                .addGap(42, 42, 42)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(btnRemov)
                    .addComponent(spnNum, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(btnOrd)
                .addContainerGap())
        );

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void btnAdicActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnAdicActionPerformed
        //BOTAO ADICIONAR
        vetor [selecionado] = Integer.parseInt(spnNum.getValue().toString());   //faz o vetor receber o valor escolhido no spinner
        lista.removeAllElements(); //remove todos os elementos da lista para poder preenchê-la denovo
        for (c = 0; c < vetor.length;c++){//faz com que o vetor apareça na lista
            lista.addElement(vetor[c]);
        }

    }//GEN-LAST:event_btnAdicActionPerformed

    private void listVetorMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_listVetorMouseClicked
        //EVENTO PARA QUANDO O MOUSE É CLICADO em UM ELEMENTO DA LISTA
        selecionado = listVetor.getSelectedIndex();//pega o ÍNDICE do vetor quando clica na lista(e não o valor) e entao guarda na variavel SELECIONADO.
        lblSelecionado.setText("[" + selecionado + "]");//configura o label para apresentar o indice selecionado
        //é feito uma CONCATENAÇÃO de string + número PARA NÃO PRECISAR CONVERTER
        
    }//GEN-LAST:event_listVetorMouseClicked

    private void btnRemovActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnRemovActionPerformed
        //BOTÃO REMOVER VETOR (torna-o zerado)
        vetor[selecionado] = 0;
        lista.removeAllElements();  //limpa a lista, senão fica lotada de info anterior
        for (c = 0; c < vetor.length;c++){//faz com que o vetor apareça na lista
            lista.addElement(vetor[c]);
        }
    }//GEN-LAST:event_btnRemovActionPerformed

    private void btnOrdActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnOrdActionPerformed
        //BOTÃO PARA ORDENAR O VETOR
        Arrays.sort(vetor); //Arrays é uma classe específica para tratamento de vetores, nesse caso, o método .sort vai ordenar o vetor
        lista.removeAllElements();  
        for (c = 0; c < vetor.length;c++){//faz com que o vetor apareça na lista
            lista.addElement(vetor[c]);
        }


    }//GEN-LAST:event_btnOrdActionPerformed

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
            java.util.logging.Logger.getLogger(TelaVetor.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(TelaVetor.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(TelaVetor.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(TelaVetor.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new TelaVetor().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btnAdic;
    private javax.swing.JButton btnOrd;
    private javax.swing.JButton btnRemov;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JLabel lblSelecionado;
    private javax.swing.JList<String> listVetor;
    private javax.swing.JSpinner spnNum;
    // End of variables declaration//GEN-END:variables
}
