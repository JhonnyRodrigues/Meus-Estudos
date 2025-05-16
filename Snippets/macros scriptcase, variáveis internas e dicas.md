# MACROS SCRIPTCASE QUE PODEM SER ÚTEIS
- **sc_lookup**(dataset, $query): O comando SQL também pode ser composto de campos da aplicação (variáveis locais) ou de variáveis globais:

- **sc_select_field**({Campo}): É possível alterar dinamicamente os campos de uma consulta, através da alteração dinâmica do select original.

- **sc_select_where**(add): É possível, em tempo de execução da aplicação de **consulta**, adicionar um campo/condição à cláusula WHERE da somente consulta.

- **sc_begin_trans()**: usar sem moderação pois o módulo de logs do scriptcase se encarrega de commitar
- **sc_commit_trans()**: usar somente quando houver redirecionamento manual, ou seja, quando "furar" o módulo de logs do scriptcase. Do contrário, os logs serão duplicados.

- **sc_select_order**("Campo"): É possível, em tempo de execução da aplicação de consulta, alterar a cláusula ORDER BY do select principal da consulta.

- **sc_sql_injection**({Meu_Campo}) ou ($Minha_Variável): Todos os acessos a base de dados, gerados pelo Scriptcase, têm proteção contra "sql injection". Mas nos comandos gerados pelo usuário (macros: sc_lookup, sc_select ou sc_exec_sql), caso seja necessário, deverá ser utilizada esta macro para proteção.

- **sc_apl_conf**("minha_consulta", "exit", "outra_consulta"); permite alterar as propriedades de execução das aplicações. Exemplo: `sc_apl_conf("meu_formulario", "start", "new");`

- **sc_apl_default**("aplicacao", "tipo"); permite que o desenvolvedor defina o que ocorrerá quando a aplicação perder a sessão.

- **sc_changed**({Nome_Campo}): para verificar se houve alteração em determinado campo do formulário. (implementação para eventos onBeforeUpdate onValidate)

- **sc_confirm**("Deseja realmente executar a ação ??"); (só funciona na Aplicação de Formulário no evento onClick)

- **sc_error_message**('Mensagem de erro') + **sc_error_exit**(minha_aplicacao, "_blank"); //combinar ambas quando trabalhar com eventos **onAfterUpdate**(pois trata-se de uma AJAX Request)

- **sc_get_wizard_step()**: Exclusiva para evento onValidate no formulário em etapas, essa macro identifica a etapa atual da aplicação, possibilitando a realização de validações durante a navegação entre as etapas. Exemplo: `if (sc_get_wizard_step() == 1) {...}`

- **sc_log_add**("Ação", "Mensagem"): adiciona um registro na tabela de logs
- **sc_log_split**({descricao}): possibilita o acesso às informações gravadas no campo descrição da tabela de log, possibilitando a manipulação dos dados anteriores e posteriores dos registros envolvidos em forma de array.

- **sc_url_library()**:retorna o caminho de um arquivo, dentro de uma biblioteca. Exemplo: `<*link rel="stylesheet" type="text/css" href="<*?php echo sc_url_library('prj', 'bootstrap-3.3.2-dist', 'css/style1.css'); ?>" />`. Os 2 valores do parâmetro escopo são: `sys` ou `prj`

- **sc_include_library("prj", "phpqrcode", "qrlib.php", true, true);**: inclui um arquivo **PHP** de uma biblioteca criada no scriptcase. Os dois últimos parâmetros são: include_once e require

- **sc_btn_insert()**, **sc_btn_update()**, **sc_btn_delete()**:Quando o botão é clicado, esta macro é disponibilizada, permitindo a tomada de decisões em tempo real de execução somente no evento onValidate. Exemplo: `if (sc_btn_insert) { sc_error_message("Registro incluido com sucesso"); }`

- **sc_reset_global()**:  apaga variáveis globais armazenadas na sessão do PHP. Exemplo: `sc_reset_global([Login], [Senha]);`

- **sc_master_value**({campo_a_atualizar},{campo_atualizado}): ao trabalhar com aplicação mestre-detalhe, atualiza os valores da aplicação mestre

- **sc_label**("nome_do_campo"): alterar dinamicamente o label dos campos

- **sc_field_no_validate**({nome_do_campo1}, {nome_do_campo2}): ignora as validações dos campos informados no parâmetro. Pode ser utilizada apenas no evento onLoad.

- **sc_log_add**("ação", "mensagem"): adiciona um registro na tabela de logs;

# VARIÁVEIS

- **_numOfRows**: retorna a quantidade de linhas da consulta utilizando a macro **sc_select()**.Exemplo: `if ({dataset}->_numOfRows < 1) { ... }`

- **sc_btn_insert** ou **sc_btn_update** ou **sc_btn_delete** ou **sc_btn_new**: retorna `true` quando o botão é selecionado.
Cuidado ao utilizá-las em validações, evite erros utilizando parênteses pois o código fonte apresenta operador lógico. Exemplo: `sc_btn_update` equivale a `$this->sc_evento == "alterar" || $this->sc_evento == "update"`

- **{sc_seq_register}**: disponibiliza o **número sequencial** do registro que está sendo processado no evento onRecord

- **{count_ger}**: disponibiliza a **quantidade** geral de registros.

- **{sc_where_current}** ou **{sc_where_filter}**: Esta variável deixa disponível o conteúdo gerado pelo "filtro", de acordo com as seleções efetuadas no formulário de filtro

- **{sc_where_orig}**: armazena o conteúdo da cláusula where do select original da aplicação.

- **{sc_where_filter}**: deixa disponível o conteúdo gerado pelo "filtro", de acordo com as seleções efetuadas no formulário de filtro. Esta informação é a que será adicionada à cláusula where do select original da aplicação.

- **sc_warning = 'off'**: desativa o controle de mensagens de advertencia, geradas quando é feita uma referência a uma variável inexistente, um item de um array inexistente, etc.

- **sc_form_show = 'off'**; desabilita o conteúdo do formulário. //TESTAR

#MACETES

- Transformar um campo (GRID) em botão: `{imprimir} = '<input type="button" value="IMPRIMIR ASO" class="scButton_default"/>';`

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
- Ao injetar _Javascript_ num FORM, opte pelo menu 'Programação' -> 'Métodos Javascript' ou pelo menu 'Formulário' -> 'Javascript'.
- Ao injetar _Javascript_ numa GRID, opte pelo evento **onFooter** (não esqueça de ativá-lo no submenu 'Layout' -> 'Cabeçalho e Rodapé'). Exemplo:
```javascript
?>
	<script>
		document.querySelectorAll('[id^=id_sc_field_mensagem_] > span >p >img').forEach((el) => {el.style.width='50%'})
	</script>
<?php
```
- Jamais crie variáveis locais com o mesmo nome dos {CAMPOS}
- Limpe as variáveis globais (variáveis de sessão) somente nos eventos _after_
- Substitua funções php como ```exit()``` por ```sc_error_message()``` + ```sc_error_exit()``` em eventos ajax, como por exemplo **onAfterUpdate**, **act_btn_actionBars**

- use a macro ```sc_exit(ref)``` quando precisar atualizar a aplicação sem sair do iframe, semelhante ao ```sc_redir()```
- use a macro ```sc_ajax_refresh()``` quando precisar atualizar toda a aplicação, dentro dela contém um ```window.location.reload```