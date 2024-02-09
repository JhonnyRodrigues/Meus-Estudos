<?php

$query = "
	SELECT
		CAMPOS
	FROM
		TABELA
	WHERE
		CAMPO = VALOR
";

sc_lookup_field(dataset, $query);
if ({dataset} === false) {
	errorMessage("Não foi possível consultar a rebimboca da parafuseta. Erro: {dataset_erro}", 4);
} else {
	{camposScriptcase} = {dataset[0]['CAMPOS']};
	sc_btn_display('update', 'off');
	sc_ajax_javascript('close_modal');
}

sc_select(dataset, $query);
if ({dataset} === false) {
	exit("Não foi possível consultar a rebimboca da parafuseta. Erro: {dataset_erro}");
} else {
	while (!{dataset}->EOF) {
		$var = {dataset}->fields[''];
		{dataset}->MoveNext();
	}
	{dataset}->Close();
}

/*
NOTA: Essas macros fazem uso da biblioteca ADOdb (Database Abstraction Layer for PHP)
Abaixo segue o var_dump() do objeto {dataset} retornado pela macro sc_select():
 */

 object(ADORecordSet_array)#13 (36) {
	["databaseType"]=>
	string(5) "array"
	["_array"]=>
	array(3) {
	  [0]=>
	  array(6) {
		[0]=>
		string(11) "2312P00A455"
		["COD_CHAMADO"]=>
		string(11) "2312P00A455"
		[1]=>
		string(3) "856"
		["FK_SOLICITANTE"]=>
		string(3) "856"
		[2]=>
		string(36) "rpistolini@semaepiracicaba.sp.gov.br"
		["EMAIL"]=>
		string(36) "rpistolini@semaepiracicaba.sp.gov.br"
	  }
	  [1]=>
	  array(6) {
		[0]=>
		string(11) "2310H03B544"
		["COD_CHAMADO"]=>
		string(11) "2310H03B544"
		[1]=>
		string(3) "856"
		["FK_SOLICITANTE"]=>
		string(3) "856"
		[2]=>
		string(36) "rpistolini@semaepiracicaba.sp.gov.br"
		["EMAIL"]=>
		string(36) "rpistolini@semaepiracicaba.sp.gov.br"
	  }
	  [2]=>
	  array(6) {
		[0]=>
		string(11) "2310S03E761"
		["COD_CHAMADO"]=>
		string(11) "2310S03E761"
		[1]=>
		string(3) "645"
		["FK_SOLICITANTE"]=>
		string(3) "645"
		[2]=>
		string(33) "tssilva@semaepiracicaba.sp.gov.br"
		["EMAIL"]=>
		string(33) "tssilva@semaepiracicaba.sp.gov.br"
	  }
	}
	["_types"]=>
	NULL
	["_colnames"]=>
	NULL
	["_skiprow1"]=>
	bool(false)
	["_fieldobjects"]=>
	array(3) {
	  [0]=>
	  object(ADOFieldObject)#9 (3) {
		["name"]=>
		string(11) "COD_CHAMADO"
		["max_length"]=>
		int(20)
		["type"]=>
		string(8) "VARCHAR2"
	  }
	  [1]=>
	  object(ADOFieldObject)#11 (3) {
		["name"]=>
		string(14) "FK_SOLICITANTE"
		["max_length"]=>
		int(22)
		["type"]=>
		string(3) "INT"
	  }
	  [2]=>
	  object(ADOFieldObject)#12 (3) {
		["name"]=>
		string(5) "EMAIL"
		["max_length"]=>
		int(100)
		["type"]=>
		string(8) "VARCHAR2"
	  }
	}
	["canSeek"]=>
	bool(true)
	["affectedrows"]=>
	bool(false)
	["insertid"]=>
	bool(false)
	["sql"]=>
	string(546) "
	  SELECT
		  S.COD_CHAMADO,
		  S.FK_SOLICITANTE,
		  S.EMAIL
	  FROM
		  HELP_SOLICITACOES S
	  JOIN
		  HELP_HISTORICOS H ON H.FK_SOLICITACAO = S.ID_SOLICITACAO
	  WHERE
		  H.ID_HISTORICO = (
			  SELECT
				  H2.ID_HISTORICO
			  FROM
				  (
					  SELECT
						  H3.ID_HISTORICO,
						  H3.FK_SOLICITACAO
					  FROM
						  HELP_HISTORICOS H3
					  ORDER BY
						  H3.ID_HISTORICO DESC
				  ) H2
			  WHERE
				  H.FK_SOLICITACAO = H2.FK_SOLICITACAO
			  AND
				  ROWNUM = 1
		  )
	  AND
		  H.FK_STATUS = 11
	  AND
		  H.DATA_LEMBRETE_SOLICITANTE < SYSDATE - 1
  "
	["compat"]=>
	bool(false)
	["dataProvider"]=>
	string(4) "oci8"
	["fields"]=>
	bool(false)
	["blobSize"]=>
	int(100)
	["EOF"]=>
	bool(true)
	["emptyTimeStamp"]=>
	string(6) " "
	["emptyDate"]=>
	string(6) " "
	["debug"]=>
	bool(false)
	["timeCreated"]=>
	int(0)
	["bind"]=>
	bool(false)
	["fetchMode"]=>
	int(0)
	["connection"]=>
	object(ADODB_oci805)#14 (99) {
	  ["databaseType"]=>
	  string(6) "oci805"
	  ["connectSID"]=>
	  bool(true)
	  ["dataProvider"]=>
	  string(4) "oci8"
	  ["replaceQuote"]=>
	  string(2) "''"
	  ["concat_operator"]=>
	  string(2) "||"
	  ["sysDate"]=>
	  string(14) "TRUNC(SYSDATE)"
	  ["sysTimeStamp"]=>
	  string(7) "SYSDATE"
	  ["metaDatabasesSQL"]=>
	  string(97) "SELECT USERNAME FROM ALL_USERS WHERE USERNAME NOT IN ('SYS','SYSTEM','DBSNMP','OUTLN') ORDER BY 1"
	  ["_stmt"]=>
	  bool(false)
	  ["_commit"]=>
	  int(32)
	  ["_initdate"]=>
	  bool(true)
	  ["metaTablesSQL"]=>
	  string(409) "SELECT TABLE_NAME, TABLE_TYPE FROM ALL_CATALOG WHERE TABLE_TYPE IN ('TABLE','VIEW') AND TABLE_NAME NOT LIKE '%$' AND TABLE_NAME NOT LIKE 'BIN$%' AND TABLE_NAME NOT LIKE 'APPLY$%' AND TABLE_NAME NOT LIKE 'FGR$%' AND TABLE_NAME NOT LIKE 'STREAMS$%' AND TABLE_NAME NOT LIKE 'DIR$%' AND TABLE_NAME NOT LIKE 'REGISTRY$%' AND TABLE_NAME NOT LIKE 'OL$%' AND TABLE_NAME NOT LIKE 'V_$%' AND TABLE_NAME NOT LIKE 'GV_$%'"
	  ["metaColumnsSQL"]=>
	  string(171) "SELECT COLUMN_NAME, DATA_TYPE, DATA_LENGTH, DATA_SCALE, DATA_PRECISION, NULLABLE, DATA_DEFAULT FROM ALL_TAB_COLUMNS WHERE OWNER='%s' AND TABLE_NAME='%s' ORDER BY COLUMN_ID"
	  ["metaColumnsSQLNoSchema"]=>
	  string(156) "SELECT COLUMN_NAME, DATA_TYPE, DATA_LENGTH, DATA_SCALE, DATA_PRECISION, NULLABLE, DATA_DEFAULT FROM ALL_TAB_COLUMNS WHERE TABLE_NAME='%s' ORDER BY COLUMN_ID"
	  ["_bindInputArray"]=>
	  bool(true)
	  ["hasGenID"]=>
	  bool(true)
	  ["_genIDSQL"]=>
	  string(29) "SELECT (%s.nextval) FROM DUAL"
	  ["_genSeqSQL"]=>
	  string(32) "CREATE SEQUENCE %s START WITH %s"
	  ["_dropSeqSQL"]=>
	  string(16) "DROP SEQUENCE %s"
	  ["hasAffectedRows"]=>
	  bool(true)
	  ["random"]=>
	  string(46) "abs(mod(DBMS_RANDOM.RANDOM,10000001)/10000000)"
	  ["noNullStrings"]=>
	  bool(false)
	  ["_bind"]=>
	  bool(false)
	  ["_nestedSQL"]=>
	  bool(true)
	  ["_hasOCIFetchStatement"]=>
	  bool(true)
	  ["_getarray"]=>
	  bool(false)
	  ["leftOuter"]=>
	  string(0) ""
	  ["session_sharing_force_blob"]=>
	  bool(false)
	  ["firstrows"]=>
	  bool(true)
	  ["selectOffsetAlg1"]=>
	  int(100)
	  ["NLS_DATE_FORMAT"]=>
	  string(21) "RRRR-MM-DD HH24:MI:SS"
	  ["dateformat"]=>
	  string(10) "YYYY-MM-DD"
	  ["useDBDateFormatForTextInput"]=>
	  bool(false)
	  ["datetime"]=>
	  bool(false)
	  ["_refLOBs"]=>
	  array(0) {
	  }
	  ["database"]=>
	  string(20) "//10.210.1.20/sgitst"
	  ["host"]=>
	  string(0) ""
	  ["user"]=>
	  string(3) "sgi"
	  ["password"]=>
	  string(5) "teste"
	  ["debug"]=>
	  bool(false)
	  ["maxblobsize"]=>
	  int(262144)
	  ["substr"]=>
	  string(6) "substr"
	  ["length"]=>
	  string(6) "length"
	  ["upperCase"]=>
	  string(5) "upper"
	  ["fmtDate"]=>
	  string(7) "'Y-m-d'"
	  ["fmtTimeStamp"]=>
	  string(16) "'Y-m-d, h:i:s A'"
	  ["true"]=>
	  string(1) "1"
	  ["false"]=>
	  string(1) "0"
	  ["nameQuote"]=>
	  string(1) """
	  ["charSet"]=>
	  string(12) "WE8ISO8859P1"
	  ["uniqueOrderBy"]=>
	  bool(false)
	  ["emptyDate"]=>
	  string(6) " "
	  ["emptyTimeStamp"]=>
	  string(6) " "
	  ["lastInsID"]=>
	  bool(false)
	  ["hasInsertID"]=>
	  bool(false)
	  ["hasTop"]=>
	  bool(false)
	  ["hasLimit"]=>
	  bool(false)
	  ["readOnly"]=>
	  bool(false)
	  ["hasMoveFirst"]=>
	  bool(false)
	  ["hasTransactions"]=>
	  bool(true)
	  ["genID"]=>
	  int(0)
	  ["raiseErrorFn"]=>
	  bool(false)
	  ["isoDates"]=>
	  bool(false)
	  ["cacheSecs"]=>
	  int(3600)
	  ["memCache"]=>
	  bool(false)
	  ["memCacheHost"]=>
	  NULL
	  ["memCachePort"]=>
	  int(11211)
	  ["memCacheCompress"]=>
	  bool(false)
	  ["arrayClass"]=>
	  string(18) "ADORecordSet_array"
	  ["numCacheHits"]=>
	  int(0)
	  ["numCacheMisses"]=>
	  int(0)
	  ["pageExecuteCountRows"]=>
	  bool(true)
	  ["uniqueSort"]=>
	  bool(false)
	  ["rightOuter"]=>
	  bool(false)
	  ["ansiOuter"]=>
	  bool(false)
	  ["autoRollback"]=>
	  bool(false)
	  ["poorAffectedRows"]=>
	  bool(false)
	  ["fnExecute"]=>
	  bool(false)
	  ["fnCacheExecute"]=>
	  bool(false)
	  ["blobEncodeType"]=>
	  bool(false)
	  ["rsPrefix"]=>
	  string(13) "ADORecordSet_"
	  ["autoCommit"]=>
	  bool(true)
	  ["transOff"]=>
	  int(0)
	  ["transCnt"]=>
	  int(0)
	  ["fetchMode"]=>
	  bool(false)
	  ["null2null"]=>
	  string(4) "null"
	  ["_oldRaiseFn"]=>
	  bool(false)
	  ["_transOK"]=>
	  NULL
	  ["_connectionID"]=>
	  resource(41) of type (oci8 connection)
	  ["_errorMsg"]=>
	  bool(false)
	  ["_errorCode"]=>
	  bool(false)
	  ["_queryID"]=>
	  resource(60) of type (Unknown)
	  ["_isPersistentConnection"]=>
	  bool(false)
	  ["_evalAll"]=>
	  bool(false)
	  ["_affected"]=>
	  bool(false)
	  ["_logsql"]=>
	  bool(false)
	  ["_transmode"]=>
	  string(0) ""
	  ["bol_sc_debug"]=>
	  bool(false)
	  ["bol_sc_debug_level"]=>
	  int(0)
	}
	["_numOfRows"]=>
	int(3)
	["_numOfFields"]=>
	int(3)
	["_queryID"]=>
	resource(60) of type (Unknown)
	["_currentRow"]=>
	int(3)
	["_closed"]=>
	bool(false)
	["_inited"]=>
	bool(true)
	["_obj"]=>
	NULL
	["_names"]=>
	NULL
	["_currentPage"]=>
	int(-1)
	["_atFirstPage"]=>
	bool(false)
	["_atLastPage"]=>
	bool(false)
	["_lastPageNo"]=>
	int(-1)
	["_maxRecordCount"]=>
	int(0)
	["datetime"]=>
	bool(false)
  }

/*
Exemplo de acesso a um valor do objeto:
{dataset}->_array[2]['COD_CHAMADO']
*/

?>