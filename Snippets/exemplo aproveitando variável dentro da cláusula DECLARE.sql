DECLARE
    idEncaminhamento INTEGER;
BEGIN
    SELECT FK_ENCAMINHAMENTO 
    INTO idEncaminhamento 
    FROM MED_AGENDAMENTO
    WHERE ID_AGENDAMENTO = {FK_AGENDAMENTO};

dbms_output.put_line(idEncaminhamento);

    UPDATE MED_ENCAMINHAMENTO
    SET STATUS = 5
    WHERE ID_ENCAMINHAMENTO = idEncaminhamento;
END;