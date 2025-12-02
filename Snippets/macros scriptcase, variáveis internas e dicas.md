# MACROS SCRIPTCASE QUE PODEM SER ï¿½TEIS
- **sc_lookup**(dataset, $query): O comando SQL tambï¿½m pode ser composto de campos da aplicaï¿½ï¿½o (variï¿½veis locais) ou de variï¿½veis globais:

- **sc_select_field**({Campo}): ï¿½ possï¿½vel alterar dinamicamente os campos de uma consulta, atravï¿½s da alteraï¿½ï¿½o dinï¿½mica do select original.

- **sc_select_where**(add): ï¿½ possï¿½vel, em tempo de execuï¿½ï¿½o da aplicaï¿½ï¿½o de **consulta**, adicionar um campo/condiï¿½ï¿½o ï¿½ clï¿½usula WHERE da somente consulta.

- **sc_begin_trans()**: usar sem moderaï¿½ï¿½o pois o mï¿½dulo de logs do scriptcase se encarrega de commitar
- **sc_commit_trans()**: usar somente quando houver redirecionamento manual, ou seja, quando "furar" o mï¿½dulo de logs do scriptcase. Do contrï¿½rio, os logs serï¿½o duplicados.

- **sc_select_order**("Campo"): ï¿½ possï¿½vel, em tempo de execuï¿½ï¿½o da aplicaï¿½ï¿½o de consulta, alterar a clï¿½usula ORDER BY do select principal da consulta.

- **sc_sql_injection**({Meu_Campo}) ou ($Minha_Variï¿½vel): Todos os acessos a base de dados, gerados pelo Scriptcase, tï¿½m proteï¿½ï¿½o contra "sql injection". Mas nos comandos gerados pelo usuï¿½rio (macros: sc_lookup, sc_select ou sc_exec_sql), caso seja necessï¿½rio, deverï¿½ ser utilizada esta macro para proteï¿½ï¿½o.

- **sc_apl_conf**("minha_consulta", "exit", "outra_consulta"); permite alterar as propriedades de execuï¿½ï¿½o das aplicaï¿½ï¿½es. Exemplo: `sc_apl_conf("meu_formulario", "start", "new");`

- **sc_apl_default**("aplicacao", "tipo"); permite que o desenvolvedor defina o que ocorrerï¿½ quando a aplicaï¿½ï¿½o perder a sessï¿½o.

- **sc_changed**({Nome_Campo}): para verificar se houve alteraï¿½ï¿½o em determinado campo do formulï¿½rio. (implementaï¿½ï¿½o para eventos onBeforeUpdate onValidate)

- **sc_confirm**("Deseja realmente executar a aï¿½ï¿½o ??"); (sï¿½ funciona na Aplicaï¿½ï¿½o de Formulï¿½rio no evento onClick)

- **sc_error_message**('Mensagem de erro') + **sc_error_exit**(minha_aplicacao, "_blank"); //combinar ambas quando trabalhar com eventos **onAfterUpdate**(pois trata-se de uma AJAX Request)

- **sc_get_wizard_step()**: Exclusiva para evento onValidate no formulï¿½rio em etapas, essa macro identifica a etapa atual da aplicaï¿½ï¿½o, possibilitando a realizaï¿½ï¿½o de validaï¿½ï¿½es durante a navegaï¿½ï¿½o entre as etapas. Exemplo: `if (sc_get_wizard_step() == 1) {...}`

- **sc_log_add**("Aï¿½ï¿½o", "Mensagem"): adiciona um registro na tabela de logs
- **sc_log_split**({descricao}): possibilita o acesso ï¿½s informaï¿½ï¿½es gravadas no campo descriï¿½ï¿½o da tabela de log, possibilitando a manipulaï¿½ï¿½o dos dados anteriores e posteriores dos registros envolvidos em forma de array.

- **sc_url_library()**:retorna o caminho de um arquivo, dentro de uma biblioteca. Exemplo: `<*link rel="stylesheet" type="text/css" href="<*?php echo sc_url_library('prj', 'bootstrap-3.3.2-dist', 'css/style1.css'); ?>" />`. Os 2 valores do parï¿½metro escopo sï¿½o: `sys` ou `prj`

- **sc_include_library("prj", "phpqrcode", "qrlib.php", true, true);**: inclui um arquivo **PHP** de uma biblioteca criada no scriptcase. Os dois ï¿½ltimos parï¿½metros sï¿½o: include_once e require

- **sc_btn_insert()**, **sc_btn_update()**, **sc_btn_delete()**:Quando o botï¿½o ï¿½ clicado, esta macro ï¿½ disponibilizada, permitindo a tomada de decisï¿½es em tempo real de execuï¿½ï¿½o somente no evento onValidate. Exemplo: `if (sc_btn_insert) { sc_error_message("Registro incluido com sucesso"); }`

- **sc_reset_global()**:  apaga variï¿½veis globais armazenadas na sessï¿½o do PHP. Exemplo: `sc_reset_global([Login], [Senha]);`

- **sc_master_value**({campo_a_atualizar},{campo_atualizado}): ao trabalhar com aplicaï¿½ï¿½o mestre-detalhe, atualiza os valores da aplicaï¿½ï¿½o mestre

- **sc_label**("nome_do_campo"): alterar dinamicamente o label dos campos

- **sc_field_no_validate**({nome_do_campo1}, {nome_do_campo2}): ignora as validaï¿½ï¿½es dos campos informados no parï¿½metro. Pode ser utilizada apenas no evento onLoad.

- **sc_log_add**("aï¿½ï¿½o", "mensagem"): adiciona um registro na tabela de logs;

# VARIï¿½VEIS

- **_numOfRows**: retorna a quantidade de linhas da consulta utilizando a macro **sc_select()**.Exemplo: `if ({dataset}->_numOfRows < 1) { ... }`

- **sc_btn_insert** ou **sc_btn_update** ou **sc_btn_delete** ou **sc_btn_new**: retorna `true` quando o botï¿½o ï¿½ selecionado.
Cuidado ao utilizï¿½-las em validaï¿½ï¿½es, evite erros utilizando parï¿½nteses pois o cï¿½digo fonte apresenta operador lï¿½gico. Exemplo: `sc_btn_update` equivale a `$this->sc_evento == "alterar" || $this->sc_evento == "update"`

- **{sc_seq_register}**: disponibiliza o **nï¿½mero sequencial** do registro que estï¿½ sendo processado no evento onRecord

- **{count_ger}**: disponibiliza a **quantidade** geral de registros.

- **{sc_where_current}** ou **{sc_where_filter}**: Esta variï¿½vel deixa disponï¿½vel o conteï¿½do gerado pelo "filtro", de acordo com as seleï¿½ï¿½es efetuadas no formulï¿½rio de filtro

- **{sc_where_orig}**: armazena o conteï¿½do da clï¿½usula where do select original da aplicaï¿½ï¿½o.

- **{sc_where_filter}**: deixa disponï¿½vel o conteï¿½do gerado pelo "filtro", de acordo com as seleï¿½ï¿½es efetuadas no formulï¿½rio de filtro. Esta informaï¿½ï¿½o ï¿½ a que serï¿½ adicionada ï¿½ clï¿½usula where do select original da aplicaï¿½ï¿½o.

- **sc_warning = 'off'**: desativa o controle de mensagens de advertencia, geradas quando ï¿½ feita uma referï¿½ncia a uma variï¿½vel inexistente, um item de um array inexistente, etc.

- **sc_form_show = 'off'**; desabilita o conteï¿½do do formulï¿½rio. //TESTAR

#MACETES

- Transformar um campo (GRID) em botï¿½o: `{imprimir} = '<input type="button" value="IMPRIMIR ASO" class="scButton_default"/>';`

# DICAS
- Em aplicações de formulários, configure a seção 'editar campos', nas colunas 'valor BD' (Insert e updade), para a opção NULO!
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
- Ao injetar _Javascript_ num FORM, opte pelo menu 'Programaï¿½ï¿½o' -> 'Mï¿½todos Javascript' ou pelo menu 'Formulï¿½rio' -> 'Javascript'.
- Ao injetar _Javascript_ numa GRID, opte pelo evento **onFooter** (nï¿½o esqueï¿½a de ativï¿½-lo no submenu 'Layout' -> 'Cabeï¿½alho e Rodapï¿½'). Exemplo:
```javascript
?>
	<script>
		document.querySelectorAll('[id^=id_sc_field_mensagem_] > span >p >img').forEach((el) => {el.style.width='50%'})
	</script>
<?php
```
- Jamais crie variï¿½veis locais com o mesmo nome dos {CAMPOS}
- Limpe as variï¿½veis globais (variï¿½veis de sessï¿½o) somente nos eventos _after_
- Substitua funï¿½ï¿½es php como ```exit()``` por ```sc_error_message()``` + ```sc_error_exit()``` em eventos ajax, como por exemplo **onAfterUpdate**, **act_btn_actionBars**

- use a macro ```sc_exit(ref)``` quando precisar atualizar a aplicaï¿½ï¿½o sem sair do iframe, semelhante ao ```sc_redir()```
- use a macro ```sc_ajax_refresh()``` quando precisar atualizar toda a aplicaï¿½ï¿½o, dentro dela contï¿½m um ```window.location.reload```