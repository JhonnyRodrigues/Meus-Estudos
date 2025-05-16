# MACROS SCRIPTCASE QUE PODEM SER �TEIS
- **sc_lookup**(dataset, $query): O comando SQL tamb�m pode ser composto de campos da aplica��o (vari�veis locais) ou de vari�veis globais:

- **sc_select_field**({Campo}): � poss�vel alterar dinamicamente os campos de uma consulta, atrav�s da altera��o din�mica do select original.

- **sc_select_where**(add): � poss�vel, em tempo de execu��o da aplica��o de **consulta**, adicionar um campo/condi��o � cl�usula WHERE da somente consulta.

- **sc_begin_trans()**: usar sem modera��o pois o m�dulo de logs do scriptcase se encarrega de commitar
- **sc_commit_trans()**: usar somente quando houver redirecionamento manual, ou seja, quando "furar" o m�dulo de logs do scriptcase. Do contr�rio, os logs ser�o duplicados.

- **sc_select_order**("Campo"): � poss�vel, em tempo de execu��o da aplica��o de consulta, alterar a cl�usula ORDER BY do select principal da consulta.

- **sc_sql_injection**({Meu_Campo}) ou ($Minha_Vari�vel): Todos os acessos a base de dados, gerados pelo Scriptcase, t�m prote��o contra "sql injection". Mas nos comandos gerados pelo usu�rio (macros: sc_lookup, sc_select ou sc_exec_sql), caso seja necess�rio, dever� ser utilizada esta macro para prote��o.

- **sc_apl_conf**("minha_consulta", "exit", "outra_consulta"); permite alterar as propriedades de execu��o das aplica��es. Exemplo: `sc_apl_conf("meu_formulario", "start", "new");`

- **sc_apl_default**("aplicacao", "tipo"); permite que o desenvolvedor defina o que ocorrer� quando a aplica��o perder a sess�o.

- **sc_changed**({Nome_Campo}): para verificar se houve altera��o em determinado campo do formul�rio. (implementa��o para eventos onBeforeUpdate onValidate)

- **sc_confirm**("Deseja realmente executar a a��o ??"); (s� funciona na Aplica��o de Formul�rio no evento onClick)

- **sc_error_message**('Mensagem de erro') + **sc_error_exit**(minha_aplicacao, "_blank"); //combinar ambas quando trabalhar com eventos **onAfterUpdate**(pois trata-se de uma AJAX Request)

- **sc_get_wizard_step()**: Exclusiva para evento onValidate no formul�rio em etapas, essa macro identifica a etapa atual da aplica��o, possibilitando a realiza��o de valida��es durante a navega��o entre as etapas. Exemplo: `if (sc_get_wizard_step() == 1) {...}`

- **sc_log_add**("A��o", "Mensagem"): adiciona um registro na tabela de logs
- **sc_log_split**({descricao}): possibilita o acesso �s informa��es gravadas no campo descri��o da tabela de log, possibilitando a manipula��o dos dados anteriores e posteriores dos registros envolvidos em forma de array.

- **sc_url_library()**:retorna o caminho de um arquivo, dentro de uma biblioteca. Exemplo: `<*link rel="stylesheet" type="text/css" href="<*?php echo sc_url_library('prj', 'bootstrap-3.3.2-dist', 'css/style1.css'); ?>" />`. Os 2 valores do par�metro escopo s�o: `sys` ou `prj`

- **sc_include_library("prj", "phpqrcode", "qrlib.php", true, true);**: inclui um arquivo **PHP** de uma biblioteca criada no scriptcase. Os dois �ltimos par�metros s�o: include_once e require

- **sc_btn_insert()**, **sc_btn_update()**, **sc_btn_delete()**:Quando o bot�o � clicado, esta macro � disponibilizada, permitindo a tomada de decis�es em tempo real de execu��o somente no evento onValidate. Exemplo: `if (sc_btn_insert) { sc_error_message("Registro incluido com sucesso"); }`

- **sc_reset_global()**:  apaga vari�veis globais armazenadas na sess�o do PHP. Exemplo: `sc_reset_global([Login], [Senha]);`

- **sc_master_value**({campo_a_atualizar},{campo_atualizado}): ao trabalhar com aplica��o mestre-detalhe, atualiza os valores da aplica��o mestre

- **sc_label**("nome_do_campo"): alterar dinamicamente o label dos campos

- **sc_field_no_validate**({nome_do_campo1}, {nome_do_campo2}): ignora as valida��es dos campos informados no par�metro. Pode ser utilizada apenas no evento onLoad.

- **sc_log_add**("a��o", "mensagem"): adiciona um registro na tabela de logs;

# VARI�VEIS

- **_numOfRows**: retorna a quantidade de linhas da consulta utilizando a macro **sc_select()**.Exemplo: `if ({dataset}->_numOfRows < 1) { ... }`

- **sc_btn_insert** ou **sc_btn_update** ou **sc_btn_delete** ou **sc_btn_new**: retorna `true` quando o bot�o � selecionado.
Cuidado ao utiliz�-las em valida��es, evite erros utilizando par�nteses pois o c�digo fonte apresenta operador l�gico. Exemplo: `sc_btn_update` equivale a `$this->sc_evento == "alterar" || $this->sc_evento == "update"`

- **{sc_seq_register}**: disponibiliza o **n�mero sequencial** do registro que est� sendo processado no evento onRecord

- **{count_ger}**: disponibiliza a **quantidade** geral de registros.

- **{sc_where_current}** ou **{sc_where_filter}**: Esta vari�vel deixa dispon�vel o conte�do gerado pelo "filtro", de acordo com as sele��es efetuadas no formul�rio de filtro

- **{sc_where_orig}**: armazena o conte�do da cl�usula where do select original da aplica��o.

- **{sc_where_filter}**: deixa dispon�vel o conte�do gerado pelo "filtro", de acordo com as sele��es efetuadas no formul�rio de filtro. Esta informa��o � a que ser� adicionada � cl�usula where do select original da aplica��o.

- **sc_warning = 'off'**: desativa o controle de mensagens de advertencia, geradas quando � feita uma refer�ncia a uma vari�vel inexistente, um item de um array inexistente, etc.

- **sc_form_show = 'off'**; desabilita o conte�do do formul�rio. //TESTAR

#MACETES

- Transformar um campo (GRID) em bot�o: `{imprimir} = '<input type="button" value="IMPRIMIR ASO" class="scButton_default"/>';`

# DICAS
- Ao injetar _CSS_ num FORM, opte pelo evento **onLoad**.
- Ao injetar _CSS_ numa GRID, opte pelo evento **onScriptInit**. Exemplo:
```css
?>
	<style>
		img {
			width: 50%;
		}
	</style>
<?php
```
- Ao injetar _Javascript_ num FORM, opte pelo menu 'Programa��o' -> 'M�todos Javascript' ou pelo menu 'Formul�rio' -> 'Javascript'.
- Ao injetar _Javascript_ numa GRID, opte pelo evento **onFooter** (n�o esque�a de ativ�-lo no submenu 'Layout' -> 'Cabe�alho e Rodap�'). Exemplo:
```javascript
?>
	<script>
		document.querySelectorAll('[id^=id_sc_field_mensagem_] > span >p >img').forEach((el) => {el.style.width='50%'})
	</script>
<?php
```
- Jamais crie vari�veis locais com o mesmo nome dos {CAMPOS}
- Limpe as vari�veis globais (vari�veis de sess�o) somente nos eventos _after_
- Substitua fun��es php como ```exit()``` por ```sc_error_message()``` + ```sc_error_exit()``` em eventos ajax, como por exemplo **onAfterUpdate**, **act_btn_actionBars**

- use a macro ```sc_exit(ref)``` quando precisar atualizar a aplica��o sem sair do iframe, semelhante ao ```sc_redir()```
- use a macro ```sc_ajax_refresh()``` quando precisar atualizar toda a aplica��o, dentro dela cont�m um ```window.location.reload```