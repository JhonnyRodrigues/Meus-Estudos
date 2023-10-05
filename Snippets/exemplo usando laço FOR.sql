BEGIN 
	FOR dados (SELECT * FROM RH_FUNCIONARIOS) 
	LOOP 
		UPDATE RH_FUNCIONARIOS SET NOME_FUNCIONARIO = 'teste' WHERE COD_FUNCIONARIO = dados.COD_FUNCIONARIO; 
	END LOOP; 
END;

--nesse exemplo, todos os funcionários teriam o nome 'teste'