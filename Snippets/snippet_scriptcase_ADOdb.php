+:
		INSERT INTO HELP_SOLICITACOES (
			ID_SOLICITACAO,
			COD_CHAMADO,
			ASSUNTO,
			FK_SOLICITANTE,
			FK_REPARTICAO,
			FK_RAMAL,
			EMAIL,
			FK_CATEGORIA_SERVICO,
			FK_PRIORIDADE,
			DATA_ABERTURA,
			ENDERECO_IP
		) VALUES (
			'1824',
			'2503U00U1824',
			'Cadastrar usuário',
			'709',
			'138',
			'9633',
			'toliveira@semaepiracicaba.sp.gov.br',
			'82',
			'2',
			SYSDATE,
			'10.210.4.39'
		)
	; 
		INSERT INTO HELP_HISTORICOS (
			ID_HISTORICO,
			DATA_INSERCAO, 
			FK_SOLICITACAO, 
			FK_SOLICITANTE, 
			FK_ENCAMINHADA_POR, 
			FK_STATUS,
			MENSAGEM
		) VALUES (
			SEQ_HELP_HISTORICOS.NEXTVAL,
			SYSDATE,
			'1824',
			'709',
			'709',
			'1',
			'Solicito o cadastro de usuário para um novo funcionário'
		)	
	; BEGIN 
				INSERT INTO HELP_RELACAO_TERMOS_ACEITOS (
					ID_RELACAO_TERMO_ACEITO,
					FK_USUARIO,
					FK_TERMO
				) VALUES (
					SEQ_HELP_RELACAO_TERMOS_USERS.NEXTVAL,
					'338',
					'3140'
				);
			
				INSERT INTO HELP_RELACAO_TERMOS_ACEITOS (
					ID_RELACAO_TERMO_ACEITO,
					FK_USUARIO,
					FK_TERMO
				) VALUES (
					SEQ_HELP_RELACAO_TERMOS_USERS.NEXTVAL,
					'338',
					'82'
				);
			END;; 
		INSERT INTO HELP_USUARIOS (
			FK_SOLICITACAO ,
			FK_FUNCIONARIO ,
			NOME_FUNCIONARIO ,
			MATRICULA ,
			FK_CARGO ,
			FK_REPARTICAO ,
			CPF ,
			RG ,
			HORA_INICIO_JORNADA ,
			HORA_FIM_JORNADA ,
			DATA_INSERCAO ,
			OBSERVACAO
		) VALUES (
			:idSolicitacao,
			'338',
			'ABILIO PERINA JUNIOR',
			'020004',
			'117',
			:reparticaoUsuario,
			'13946363857',
			'17.992.009',
			TO_DATE(:entrada, 'HH24:MI'),
			TO_DATE(:saida, 'HH24:MI'),
			SYSDATE,
			'Solicitação gerada automaticamente através do formulário de cadastro de funcionários.
O novo usuário também deverá ter acesso à aplicação de registro de presença, disponível no módulo Público. Portanto, adicionar privilégio atráves do Cadastro de Usuários -> grupo Ponto Online'
		) RETURNING ID_USUARIO INTO :idUsuario
	; BEGIN
				INSERT INTO HELP_RELACAO_SISTEMAS_USUARIOS VALUES (
					'666',
					'                                                  ',
					'1'
				);
			
				INSERT INTO HELP_RELACAO_SISTEMAS_USUARIOS VALUES (
					'667',
					'                                                  ',
					'2'
				);
			
				INSERT INTO HELP_RELACAO_SISTEMAS_USUARIOS VALUES (
					'668',
					'                                                  ',
					'19'
				);
			
				INSERT INTO HELP_RELACAO_SISTEMAS_USUARIOS VALUES (
					'669',
					'                                                  ',
					'46'
				);
			END;; BEGIN
				INSERT INTO HELP_RELACAO_JORNADAS_USUARIOS VALUES (
					'607',
					'                                                  ',
					'2'
				);
			
				INSERT INTO HELP_RELACAO_JORNADAS_USUARIOS VALUES (
					'608',
					'                                                  ',
					'3'
				);
			
				INSERT INTO HELP_RELACAO_JORNADAS_USUARIOS VALUES (
					'609',
					'                                                  ',
					'4'
				);
			
				INSERT INTO HELP_RELACAO_JORNADAS_USUARIOS VALUES (
					'610',
					'                                                  ',
					'5'
				);
			
				INSERT INTO HELP_RELACAO_JORNADAS_USUARIOS VALUES (
					'611',
					'                                                  ',
					'6'
				);
			END;Array