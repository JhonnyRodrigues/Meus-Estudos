<?php
function queryBinded($codFuncionario = 709, $dataConsulta = '2020-06-01') {
    $queryCargoPeriodo = "
    DECLARE 
        cargo NUMBER; -- Definição explícita do tipo numérico
    BEGIN
        SELECT CARGO_PERIODO
          INTO cargo
        FROM (
              -- Query A: busca no histórico de cargos com a regra de DATA_TERMINO NULL
              SELECT
                  1 AS PRIORIDADE,
                  FC.FK_CARGO AS CARGO_PERIODO
              FROM RH_CARGO C
              JOIN RH_FUNCIONARIOS_CARGOS_EXERC FC 
                ON FC.FK_CARGO = C.ID_CARGO
              WHERE FC.FK_FUNCIONARIO = :codFuncionario
                AND (:v_data BETWEEN FC.DATA_INICIO AND FC.DATA_TERMINO
                     OR (FC.DATA_TERMINO IS NULL AND :v_data >= FC.DATA_INICIO))
              UNION ALL
              -- Query B: se não houver histórico válido, utiliza o cargo atual
              SELECT
                  2 AS PRIORIDADE,
                  FK_ID_CARGO_EXERCICIO AS CARGO_PERIODO
              FROM RH_FUNCIONARIOS
              WHERE COD_FUNCIONARIO = :codFuncionario
        )
        ORDER BY PRIORIDADE
        FETCH FIRST 1 ROW ONLY;

        :cargo := cargo; --  transferir o valor obtido na variável local para a variável de bind (parâmetro de saída) 
    END;
    ";

    // Definição dos valores de entrada
    $v_data = $dataConsulta;
    $idCargo = str_repeat(" ", 50); // buffer da variável é aumentado antes de passar para o bind, a fim de evitar o erro de truncamento.
	/*	O truncamento acontece quando um valor, armazenado ou processado, é cortado porque o espaço reservado para ele é menor que o necessário.
	Se o tamanho da variável for menor do que o valor retornado, o dado pode ser truncado ou gerar um erro como: ORA-06502: PL/SQL: numeric or value error: character string buffer too small*/

    // Definição dos parâmetros
    $params = array(
        'v_data'         => $v_data,
        'codFuncionario' => $codFuncionario,
        'cargo'        => &$idCargo // Passagem por referência
    );

    // Execução da query
    $dataset = $this->Db->Execute($queryCargoPeriodo, $params);

    // Tratamento do retorno para garantir que seja um número
    if ($dataset === false || trim($idCargo) === "") {
        // Se houver erro ou não encontrar cargo, rollback da transação
        if ($this->Ini->sc_tem_trans_banco) {
            $this->Db->RollbackTrans();
            $this->Ini->sc_tem_trans_banco = false;
        }
        return array(
            'success' => false,
            'message' => 'Erro ao realizar a consulta ou cargo não encontrado.'
        );
    } else {
        return (int)trim($idCargo); // Retorna como número inteiro, removendo espaços extras
    }
}

var_dump(queryBinded());
