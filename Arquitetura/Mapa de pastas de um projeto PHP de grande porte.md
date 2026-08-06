# Mapa de pastas de um projeto PHP de grande porte

A estrutura abaixo representa um projeto PHP modular que combina:

* organização por módulos ou contextos de negócio;
* conceitos de Domain-Driven Design;
* separação de responsabilidades da Clean Architecture;
* portas e adaptadores da Arquitetura Hexagonal;
* entradas HTTP, CLI, filas e tarefas agendadas;
* persistência em banco de dados;
* integrações com sistemas externos;
* testes automatizados;
* documentação, observabilidade e automação de infraestrutura.

Ela é propositalmente ampla. **Nem todo projeto precisará de todas essas pastas.**

```text
meu-projeto/
│
├── .github/
│   ├── workflows/                         # Pipelines de integração e entrega contínua
│   │   ├── tests.yml                      # Executa testes a cada push ou pull request
│   │   ├── quality.yml                    # Executa análise estática e verificação de estilo
│   │   └── deploy.yml                     # Automatiza publicação nos ambientes
│   │
│   ├── ISSUE_TEMPLATE/                    # Modelos para abertura de issues
│   ├── CODEOWNERS                         # Define responsáveis por áreas do código
│   └── pull_request_template.md           # Modelo para descrição de pull requests
│
├── bin/
│   ├── console                            # Ponto de entrada para comandos de terminal
│   ├── worker                             # Inicia consumidor de filas
│   └── scheduler                          # Inicia tarefas agendadas
│
├── bootstrap/
│   ├── app.php                            # Inicialização principal da aplicação
│   ├── container.php                      # Construção do container de dependências
│   ├── providers.php                      # Registro de módulos e serviços
│   └── environment.php                    # Carregamento e validação do ambiente
│
├── config/
│   ├── app.php                            # Configurações gerais da aplicação
│   ├── database.php                       # Configurações de banco de dados
│   ├── routes.php                         # Registro central de rotas
│   ├── services.php                       # Configuração de serviços e integrações
│   ├── security.php                       # Autenticação, autorização e segurança
│   ├── cache.php                          # Configuração de cache
│   ├── queue.php                          # Configuração de filas
│   ├── logging.php                        # Configuração de logs
│   ├── observability.php                  # Métricas, traces e monitoramento
│   │
│   └── environments/
│       ├── development.php                # Ajustes para desenvolvimento
│       ├── testing.php                    # Ajustes para testes
│       └── production.php                 # Ajustes para produção
│
├── docker/
│   ├── php/
│   │   ├── Dockerfile                     # Imagem PHP utilizada pelo projeto
│   │   └── php.ini                        # Configurações do PHP
│   │
│   ├── nginx/
│   │   └── default.conf                   # Configuração do servidor web
│   │
│   ├── oracle/
│   │   └── init/                          # Scripts de preparação do banco
│   │
│   └── supervisor/
│       └── workers.conf                   # Gerenciamento de processos e filas
│
├── docs/
│   ├── architecture/
│   │   ├── overview.md                    # Visão geral da arquitetura
│   │   ├── dependencies.md                # Regras de dependência entre camadas
│   │   └── modules.md                     # Descrição dos módulos do sistema
│   │
│   ├── adr/
│   │   ├── ADR-001-arquitetura.md         # Registro de decisão arquitetural
│   │   └── ADR-002-banco-oracle.md        # Justificativa de uma decisão técnica
│   │
│   ├── domain/
│   │   ├── ubiquitous-language.md         # Linguagem ubíqua do negócio
│   │   ├── business-rules.md              # Regras de negócio documentadas
│   │   ├── aggregates.md                  # Agregados e suas fronteiras
│   │   └── context-map.md                 # Relacionamento entre contextos
│   │
│   ├── api/
│   │   ├── openapi.yaml                   # Contrato OpenAPI da API
│   │   └── examples/                      # Exemplos de requisições e respostas
│   │
│   ├── diagrams/
│   │   ├── components.puml                # Diagrama de componentes
│   │   ├── sequence.puml                  # Diagramas de sequência
│   │   └── database.puml                  # Diagrama de banco de dados
│   │
│   └── operations/
│       ├── deployment.md                  # Procedimento de implantação
│       ├── rollback.md                    # Procedimento de reversão
│       └── troubleshooting.md             # Soluções para problemas recorrentes
│
├── migrations/
│   ├── 2026_01_10_create_planos.sql       # Criação ou alteração de estruturas do banco
│   ├── 2026_01_11_create_demandas.sql
│   └── 2026_01_12_create_indices.sql
│
├── public/
│   ├── index.php                          # Front Controller da aplicação HTTP
│   ├── .htaccess                          # Rewrite de URLs no Apache
│   ├── favicon.ico
│   │
│   └── assets/
│       ├── css/                           # Arquivos CSS públicos
│       ├── js/                            # Arquivos JavaScript públicos
│       ├── images/                        # Imagens públicas
│       └── fonts/                         # Fontes utilizadas pela interface
│
├── resources/
│   ├── views/                             # Templates HTML renderizados no servidor
│   │   ├── layouts/
│   │   ├── components/
│   │   └── planejamento/
│   │
│   ├── translations/                      # Traduções e internacionalização
│   │   ├── pt_BR/
│   │   └── en/
│   │
│   ├── emails/                            # Templates de e-mail
│   ├── reports/                           # Templates de relatórios
│   └── schemas/                           # JSON Schema, XSD ou outros contratos
│
├── scripts/
│   ├── deploy.sh                          # Automatização de implantação
│   ├── backup.sh                          # Geração de backup
│   ├── restore.sh                         # Restauração de ambiente
│   ├── import-data.php                    # Importação eventual de dados
│   └── generate-docs.php                  # Geração de documentação
│
├── src/
│   │
│   ├── PlanejamentoCompras/               # Bounded Context ou módulo de negócio
│   │   │
│   │   ├── Domain/                        # Modelo e regras centrais do negócio
│   │   │   │
│   │   │   ├── Model/
│   │   │   │   │
│   │   │   │   ├── Plano/
│   │   │   │   │   ├── Plano.php         # Aggregate Root
│   │   │   │   │   ├── Demanda.php       # Entity pertencente ao agregado
│   │   │   │   │   ├── PlanoId.php       # Value Object de identidade
│   │   │   │   │   ├── NumeroItem.php    # Value Object com validações próprias
│   │   │   │   │   ├── SituacaoPlano.php # Enum de domínio
│   │   │   │   │   └── Demandas.php      # Coleção tipada de entidades
│   │   │   │   │
│   │   │   │   ├── Calendario/
│   │   │   │   │   ├── Calendario.php    # Outro agregado do contexto
│   │   │   │   │   ├── Periodo.php       # Value Object
│   │   │   │   │   └── Exercicio.php     # Value Object
│   │   │   │   │
│   │   │   │   └── Unidade/
│   │   │   │       ├── Unidade.php        # Entity ou Aggregate Root
│   │   │   │       └── CodigoUnidade.php  # Value Object
│   │   │   │
│   │   │   ├── Repository/
│   │   │   │   ├── PlanoRepository.php   # Interface para recuperar e salvar agregados
│   │   │   │   └── UnidadeRepository.php # Contrato de repositório do domínio
│   │   │   │
│   │   │   ├── Service/
│   │   │   │   └── CalculadoraPlano.php  # Regra de domínio sem dono natural
│   │   │   │
│   │   │   ├── Policy/
│   │   │   │   └── PoliticaRevisao.php   # Política ou estratégia de negócio
│   │   │   │
│   │   │   ├── Specification/
│   │   │   │   ├── PlanoHomologado.php   # Predicado de negócio reutilizável
│   │   │   │   └── DemandaPublicavel.php # Verifica se um objeto satisfaz uma condição
│   │   │   │
│   │   │   ├── Factory/
│   │   │   │   └── PlanoFactory.php      # Criação complexa de objetos de domínio
│   │   │   │
│   │   │   ├── Event/
│   │   │   │   ├── PlanoCriado.php       # Fato ocorrido dentro do domínio
│   │   │   │   ├── PlanoHomologado.php   # Evento de domínio
│   │   │   │   └── DemandaCancelada.php
│   │   │   │
│   │   │   └── Exception/
│   │   │       ├── PlanoNaoHomologado.php # Violação de regra de domínio
│   │   │       ├── DemandaInvalida.php
│   │   │       └── ExercicioInvalido.php
│   │   │
│   │   ├── Application/                   # Casos de uso e coordenação da aplicação
│   │   │   │
│   │   │   ├── UseCase/
│   │   │   │   │
│   │   │   │   ├── CriarPlano/
│   │   │   │   │   ├── CriarPlano.php
│   │   │   │   │   │   # Input Port: contrato público do caso de uso
│   │   │   │   │   │
│   │   │   │   │   ├── CriarPlanoHandler.php
│   │   │   │   │   │   # Interactor: executa e coordena o caso de uso
│   │   │   │   │   │
│   │   │   │   │   ├── CriarPlanoCommand.php
│   │   │   │   │   │   # Input DTO: dados necessários para executar a operação
│   │   │   │   │   │
│   │   │   │   │   ├── CriarPlanoResult.php
│   │   │   │   │   │   # Output DTO: resultado independente de HTTP ou HTML
│   │   │   │   │   │
│   │   │   │   │   └── CriarPlanoPresenter.php
│   │   │   │   │       # Output Port: contrato para apresentação do resultado
│   │   │   │   │
│   │   │   │   ├── HomologarPlano/
│   │   │   │   │   ├── HomologarPlano.php
│   │   │   │   │   ├── HomologarPlanoHandler.php
│   │   │   │   │   ├── HomologarPlanoCommand.php
│   │   │   │   │   └── HomologarPlanoResult.php
│   │   │   │   │
│   │   │   │   └── CancelarDemanda/
│   │   │   │       ├── CancelarDemanda.php
│   │   │   │       ├── CancelarDemandaHandler.php
│   │   │   │       ├── CancelarDemandaCommand.php
│   │   │   │       └── CancelarDemandaResult.php
│   │   │   │
│   │   │   ├── Query/                     # Consultas de leitura, especialmente em CQRS
│   │   │   │   ├── ConsultarPlano/
│   │   │   │   │   ├── ConsultarPlanoQuery.php
│   │   │   │   │   ├── ConsultarPlanoHandler.php
│   │   │   │   │   └── PlanoView.php
│   │   │   │   │
│   │   │   │   └── ListarDemandas/
│   │   │   │       ├── ListarDemandasQuery.php
│   │   │   │       ├── ListarDemandasHandler.php
│   │   │   │       └── DemandaListItem.php
│   │   │   │
│   │   │   ├── Port/
│   │   │   │   │
│   │   │   │   ├── In/
│   │   │   │   │   ├── CriarPlano.php
│   │   │   │   │   └── HomologarPlano.php
│   │   │   │   │       # Portas pelas quais o mundo externo aciona a aplicação
│   │   │   │   │
│   │   │   │   └── Out/
│   │   │   │       ├── TransactionManager.php
│   │   │   │       ├── CurrentUser.php
│   │   │   │       ├── Clock.php
│   │   │   │       ├── IdGenerator.php
│   │   │   │       ├── EventPublisher.php
│   │   │   │       └── NotificationGateway.php
│   │   │   │           # Serviços externos necessários aos casos de uso
│   │   │   │
│   │   │   ├── DTO/
│   │   │   │   ├── PlanoData.php          # Estruturas de transporte entre fronteiras
│   │   │   │   └── DemandaData.php
│   │   │   │
│   │   │   ├── Mapper/
│   │   │   │   └── PlanoDataMapper.php    # Conversão entre modelos de aplicação
│   │   │   │
│   │   │   ├── Authorization/
│   │   │   │   ├── PlanoPermission.php    # Autorização ligada ao caso de uso
│   │   │   │   └── AccessDecision.php
│   │   │   │
│   │   │   ├── EventHandler/
│   │   │   │   └── RegistrarHistoricoAoHomologarPlano.php
│   │   │   │       # Reação da aplicação a eventos
│   │   │   │
│   │   │   ├── ProcessManager/
│   │   │   │   └── FluxoHomologacao.php   # Coordena processo longo entre etapas
│   │   │   │
│   │   │   └── Exception/
│   │   │       ├── PlanoNaoEncontrado.php # Erro do caso de uso
│   │   │       ├── UsuarioNaoAutorizado.php
│   │   │       └── OperacaoConcorrente.php
│   │   │
│   │   ├── Infrastructure/                # Implementações técnicas e adaptadores externos
│   │   │   │
│   │   │   ├── Persistence/
│   │   │   │   │
│   │   │   │   ├── Oracle/
│   │   │   │   │   ├── Connection/
│   │   │   │   │   │   ├── OracleConnection.php
│   │   │   │   │   │   └── OracleTransactionManager.php
│   │   │   │   │   │
│   │   │   │   │   ├── Repository/
│   │   │   │   │   │   ├── OraclePlanoRepository.php
│   │   │   │   │   │   └── OracleUnidadeRepository.php
│   │   │   │   │   │       # Implementações das interfaces do domínio
│   │   │   │   │   │
│   │   │   │   │   ├── Query/
│   │   │   │   │   │   ├── OraclePlanoQuery.php
│   │   │   │   │   │   └── OracleDemandaQuery.php
│   │   │   │   │   │       # Consultas otimizadas para leitura
│   │   │   │   │   │
│   │   │   │   │   ├── Mapper/
│   │   │   │   │   │   └── OraclePlanoMapper.php
│   │   │   │   │   │       # Converte registros do banco em objetos
│   │   │   │   │   │
│   │   │   │   │   ├── Hydrator/
│   │   │   │   │   │   └── PlanoHydrator.php
│   │   │   │   │   │       # Reconstrói objetos a partir de dados persistidos
│   │   │   │   │   │
│   │   │   │   │   └── Type/
│   │   │   │   │       ├── OracleDateType.php
│   │   │   │   │       └── OracleBooleanType.php
│   │   │   │   │
│   │   │   │   └── InMemory/
│   │   │   │       └── InMemoryPlanoRepository.php
│   │   │   │           # Implementação simples, útil em testes ou protótipos
│   │   │   │
│   │   │   ├── Integration/
│   │   │   │   │
│   │   │   │   ├── Pncp/
│   │   │   │   │   ├── PncpClient.php
│   │   │   │   │   ├── PncpAuthenticator.php
│   │   │   │   │   ├── PncpPayloadBuilder.php
│   │   │   │   │   ├── PncpResponseMapper.php
│   │   │   │   │   ├── PncpException.php
│   │   │   │   │   │
│   │   │   │   │   └── AntiCorruptionLayer/
│   │   │   │   │       └── PncpTranslator.php
│   │   │   │   │           # Impede o modelo externo de contaminar o domínio
│   │   │   │   │
│   │   │   │   ├── Email/
│   │   │   │   │   ├── SmtpNotificationGateway.php
│   │   │   │   │   └── EmailMessageFactory.php
│   │   │   │   │
│   │   │   │   └── IdentityProvider/
│   │   │   │       ├── IamClient.php
│   │   │   │       └── IamCurrentUser.php
│   │   │   │
│   │   │   ├── Messaging/
│   │   │   │   ├── Publisher/
│   │   │   │   │   └── RabbitMqEventPublisher.php
│   │   │   │   │
│   │   │   │   ├── Consumer/
│   │   │   │   │   └── PlanoHomologadoConsumer.php
│   │   │   │   │
│   │   │   │   └── Serializer/
│   │   │   │       └── EventSerializer.php
│   │   │   │
│   │   │   ├── Cache/
│   │   │   │   ├── RedisCache.php
│   │   │   │   └── CachedUnidadeRepository.php
│   │   │   │
│   │   │   ├── Filesystem/
│   │   │   │   ├── LocalFileStorage.php
│   │   │   │   └── S3FileStorage.php
│   │   │   │
│   │   │   ├── Security/
│   │   │   │   ├── PasswordHasher.php
│   │   │   │   ├── JwtTokenService.php
│   │   │   │   └── AuthenticatedUserProvider.php
│   │   │   │
│   │   │   ├── Clock/
│   │   │   │   └── SystemClock.php        # Implementação que utiliza o relógio real
│   │   │   │
│   │   │   ├── Identifier/
│   │   │   │   └── UuidGenerator.php      # Implementação de geração de identificadores
│   │   │   │
│   │   │   ├── Logging/
│   │   │   │   └── MonologLogger.php      # Adaptador para biblioteca de logs
│   │   │   │
│   │   │   ├── Observability/
│   │   │   │   ├── MetricsCollector.php
│   │   │   │   ├── TraceContext.php
│   │   │   │   └── CorrelationIdProvider.php
│   │   │   │
│   │   │   ├── Serialization/
│   │   │   │   ├── JsonSerializer.php
│   │   │   │   └── XmlSerializer.php
│   │   │   │
│   │   │   └── DependencyInjection/
│   │   │       ├── PlanejamentoProvider.php
│   │   │       └── PlanejamentoBindings.php
│   │   │           # Liga interfaces às implementações concretas
│   │   │
│   │   └── Presentation/                  # Adaptadores de entrada da aplicação
│   │       │
│   │       ├── Http/
│   │       │   ├── Controller/
│   │       │   │   ├── CriarPlanoController.php
│   │       │   │   ├── HomologarPlanoController.php
│   │       │   │   └── ConsultarPlanoController.php
│   │       │   │       # Recebem requisições e acionam casos de uso
│   │       │   │
│   │       │   ├── Request/
│   │       │   │   ├── CriarPlanoRequest.php
│   │       │   │   └── HomologarPlanoRequest.php
│   │       │   │       # Representação e validação da entrada HTTP
│   │       │   │
│   │       │   ├── Response/
│   │       │   │   ├── JsonResponse.php
│   │       │   │   └── ErrorResponse.php
│   │       │   │
│   │       │   ├── Presenter/
│   │       │   │   ├── JsonCriarPlanoPresenter.php
│   │       │   │   └── HtmlConsultarPlanoPresenter.php
│   │       │   │       # Converte o resultado do caso de uso para o formato da interface
│   │       │   │
│   │       │   ├── ViewModel/
│   │       │   │   ├── PlanoViewModel.php
│   │       │   │   └── DemandaViewModel.php
│   │       │   │       # Modelo específico para exibição
│   │       │   │
│   │       │   ├── Middleware/
│   │       │   │   ├── AuthenticationMiddleware.php
│   │       │   │   ├── AuthorizationMiddleware.php
│   │       │   │   ├── CorrelationIdMiddleware.php
│   │       │   │   └── ErrorHandlerMiddleware.php
│   │       │   │
│   │       │   ├── Validation/
│   │       │   │   └── CriarPlanoValidator.php
│   │       │   │
│   │       │   └── Route/
│   │       │       └── PlanejamentoRoutes.php
│   │       │
│   │       ├── Cli/
│   │       │   ├── Command/
│   │       │   │   ├── ImportarPlanosCommand.php
│   │       │   │   └── ReprocessarDemandasCommand.php
│   │       │   │
│   │       │   └── Output/
│   │       │       └── ConsoleOutput.php
│   │       │
│   │       ├── Messaging/
│   │       │   └── Consumer/
│   │       │       └── ProcessarPlanoConsumer.php
│   │       │           # Entrada acionada por mensagem ou fila
│   │       │
│   │       └── Job/
│   │           └── EncerrarPlanosVencidosJob.php
│   │               # Entrada acionada por agendamento
│   │
│   ├── PublicacaoPncp/                     # Outro contexto ou módulo de negócio
│   │   ├── Domain/
│   │   ├── Application/
│   │   ├── Infrastructure/
│   │   └── Presentation/
│   │       # Pode repetir a mesma divisão interna do módulo anterior
│   │
│   ├── IdentidadeAcesso/                  # Contexto de usuários e permissões
│   │   ├── Domain/
│   │   ├── Application/
│   │   ├── Infrastructure/
│   │   └── Presentation/
│   │
│   ├── Auditoria/                         # Contexto de auditoria e histórico
│   │   ├── Domain/
│   │   ├── Application/
│   │   ├── Infrastructure/
│   │   └── Presentation/
│   │
│   └── SharedKernel/                      # Elementos realmente compartilhados
│       │
│       ├── Domain/
│       │   ├── ValueObject/
│       │   │   ├── Cnpj.php
│       │   │   ├── Email.php
│       │   │   └── Dinheiro.php
│       │   │
│       │   ├── Event/
│       │   │   └── DomainEvent.php
│       │   │
│       │   └── Exception/
│       │       └── DomainException.php
│       │
│       ├── Application/
│       │   ├── Clock.php
│       │   ├── IdGenerator.php
│       │   └── TransactionManager.php
│       │
│       └── Infrastructure/
│           ├── SystemClock.php
│           ├── UuidGenerator.php
│           └── MonologLogger.php
│
├── storage/
│   ├── cache/                              # Cache gerado durante a execução
│   ├── logs/                               # Arquivos de log
│   ├── sessions/                           # Sessões armazenadas em arquivo
│   ├── uploads/                            # Arquivos enviados por usuários
│   ├── exports/                            # Arquivos gerados para exportação
│   └── temporary/                          # Arquivos temporários
│
├── tests/
│   │
│   ├── Unit/
│   │   ├── PlanejamentoCompras/
│   │   │   ├── Domain/
│   │   │   │   ├── PlanoTest.php          # Testa regras do agregado
│   │   │   │   ├── NumeroItemTest.php     # Testa um Value Object
│   │   │   │   └── PoliticaRevisaoTest.php
│   │   │   │
│   │   │   └── Application/
│   │   │       ├── CriarPlanoHandlerTest.php
│   │   │       └── HomologarPlanoHandlerTest.php
│   │   │
│   │   └── SharedKernel/
│   │       └── CnpjTest.php
│   │
│   ├── Integration/
│   │   ├── Persistence/
│   │   │   ├── OraclePlanoRepositoryTest.php
│   │   │   └── OracleTransactionManagerTest.php
│   │   │
│   │   ├── Integration/
│   │   │   └── PncpClientTest.php
│   │   │
│   │   └── Messaging/
│   │       └── EventPublisherTest.php
│   │
│   ├── Functional/
│   │   └── Http/
│   │       ├── CriarPlanoEndpointTest.php
│   │       └── HomologarPlanoEndpointTest.php
│   │           # Testa a aplicação por uma entrada real, como HTTP
│   │
│   ├── Acceptance/
│   │   ├── HomologarPlanoFeature.php
│   │   └── PublicarPlanoFeature.php
│   │       # Testa cenários de negócio completos
│   │
│   ├── Contract/
│   │   ├── PncpContractTest.php
│   │   └── PlanoRepositoryContract.php
│   │       # Verifica se diferentes implementações obedecem ao mesmo contrato
│   │
│   ├── Architecture/
│   │   └── DependencyRulesTest.php
│   │       # Impede dependências proibidas entre camadas
│   │
│   └── Support/
│       ├── Builder/
│       │   ├── PlanoBuilder.php            # Facilita a montagem de objetos em testes
│       │   └── DemandaBuilder.php
│       │
│       ├── Mother/
│       │   └── PlanoMother.php             # Fornece objetos de teste representativos
│       │
│       ├── Fake/
│       │   ├── FakeClock.php               # Implementação controlável para testes
│       │   └── FakeIdGenerator.php
│       │
│       ├── Stub/
│       │   └── PncpClientStub.php
│       │
│       ├── Fixture/
│       │   ├── planos.sql                  # Dados preparados para testes
│       │   └── demandas.json
│       │
│       └── Spy/
│           └── NotificationGatewaySpy.php
│
├── tools/
│   ├── phpstan/                            # Configurações específicas do PHPStan
│   ├── php-cs-fixer/                       # Regras de formatação
│   ├── rector/                             # Regras de atualização automática de código
│   └── infection/                          # Configurações de mutation testing
│
├── var/
│   ├── cache/                              # Alternativa ao diretório storage/cache
│   └── log/                                # Alternativa ao diretório storage/logs
│
├── vendor/                                 # Dependências instaladas pelo Composer
│
├── .editorconfig                           # Padronização entre editores
├── .env                                    # Configurações locais; não versionar segredos
├── .env.example                            # Exemplo das variáveis necessárias
├── .gitignore                              # Arquivos ignorados pelo Git
├── .gitattributes                          # Tratamento de arquivos pelo Git
│
├── composer.json                           # Dependências, scripts e autoload PSR-4
├── composer.lock                           # Versões exatas das dependências
├── phpunit.xml                             # Configuração do PHPUnit
├── phpstan.neon                            # Configuração de análise estática
├── rector.php                              # Configuração do Rector
├── php-cs-fixer.php                        # Configuração de estilo de código
├── infection.json                          # Configuração de mutation testing
│
├── docker-compose.yml                      # Serviços executados em contêineres
├── Makefile                                # Atalhos para tarefas do projeto
├── README.md                               # Introdução e instruções principais
├── CHANGELOG.md                            # Histórico de alterações
├── CONTRIBUTING.md                         # Regras para contribuir com o projeto
├── SECURITY.md                             # Política de segurança
└── LICENSE                                 # Licença do software
```

# Como interpretar as principais áreas

## 1. `Domain`

O `Domain` representa o modelo central do negócio.

Se um arquivo descreve:

* o que é um Plano;
* quando uma Demanda pode ser cancelada;
* quais estados um processo pode assumir;
* quais invariantes precisam permanecer verdadeiras;
* quais fatos relevantes aconteceram no negócio;

ele provavelmente pertence ao domínio.

O domínio deve evitar dependências de:

* HTTP;
* JSON;
* frameworks;
* Oracle;
* PDO;
* filas;
* bibliotecas de interface;
* detalhes de autenticação;
* sistema operacional.

Exemplo:

```php
final class Plano
{
    public function homologar(): void
    {
        if ($this->demandas->isEmpty()) {
            throw new PlanoSemDemandas();
        }

        $this->situacao = SituacaoPlano::HOMOLOGADO;
    }
}
```

A entidade sabe **quando pode ser homologada**, mas não sabe:

* qual botão foi clicado;
* qual endpoint foi chamado;
* qual tabela será atualizada;
* qual usuário HTTP está conectado;
* qual mensagem JSON será devolvida.

## 2. `Application`

A camada de aplicação contém os casos de uso.

Ela coordena uma operação completa:

1. recebe os dados de entrada;
2. obtém objetos pelos repositórios;
3. verifica autorização;
4. chama comportamentos do domínio;
5. controla a transação;
6. solicita integrações externas;
7. publica eventos;
8. devolve um resultado.

Exemplo:

```php
final class HomologarPlanoHandler implements HomologarPlano
{
    public function __construct(
        private PlanoRepository $planos,
        private TransactionManager $transaction,
        private CurrentUser $currentUser,
    ) {
    }

    public function execute(HomologarPlanoCommand $command): void
    {
        $plano = $this->planos->obterPorId(
            new PlanoId($command->planoId)
        );

        if ($plano === null) {
            throw new PlanoNaoEncontrado();
        }

        $usuario = $this->currentUser->get();

        $plano->homologarPor($usuario);

        $this->transaction->execute(
            fn () => $this->planos->salvar($plano)
        );
    }
}
```

O caso de uso conhece interfaces, mas não precisa saber se a persistência usa:

* Oracle;
* PostgreSQL;
* arquivo;
* API;
* memória;
* ORM;
* SQL manual.

## 3. `Infrastructure`

A Infrastructure contém detalhes técnicos.

É nela que normalmente aparecem:

* SQL;
* Oracle;
* PDO;
* Doctrine;
* Redis;
* RabbitMQ;
* APIs externas;
* arquivos;
* SMTP;
* JWT;
* Monolog;
* bibliotecas e frameworks.

Exemplo:

```php
final class OraclePlanoRepository implements PlanoRepository
{
    public function __construct(
        private PDO $connection,
        private OraclePlanoMapper $mapper,
    ) {
    }

    public function obterPorId(PlanoId $id): ?Plano
    {
        $statement = $this->connection->prepare(
            'SELECT * FROM PAC_PLANOS WHERE ID = :id'
        );

        $statement->execute([
            'id' => $id->valor(),
        ]);

        $registro = $statement->fetch(PDO::FETCH_ASSOC);

        return $registro
            ? $this->mapper->paraDominio($registro)
            : null;
    }
}
```

A classe concreta depende da interface interna:

```text
OraclePlanoRepository
        │
        └── implementa ──→ PlanoRepository
```

Não é o domínio que depende do Oracle. É o adaptador Oracle que depende do contrato definido internamente.

## 4. `Presentation`

A Presentation recebe estímulos externos e os adapta para a aplicação.

Uma entrada pode vir de:

* requisição HTTP;
* comando de terminal;
* fila;
* tarefa agendada;
* interface gráfica;
* webhook;
* outro sistema.

O Controller não deveria conter regras de negócio extensas.

Sua responsabilidade costuma ser:

1. ler a entrada;
2. validar o formato básico;
3. criar o objeto de entrada do caso de uso;
4. chamar a aplicação;
5. transformar o resultado em resposta.

```php
final class HomologarPlanoController
{
    public function __construct(
        private HomologarPlano $useCase,
    ) {
    }

    public function __invoke(
        HomologarPlanoRequest $request
    ): JsonResponse {
        $command = new HomologarPlanoCommand(
            planoId: $request->planoId(),
        );

        $this->useCase->execute($command);

        return new JsonResponse(
            ['message' => 'Plano homologado.'],
            200
        );
    }
}
```

## 5. `bootstrap`

O `bootstrap` é o local onde a aplicação concreta é montada.

É nele que se decide, por exemplo:

```php
$container->bind(
    PlanoRepository::class,
    OraclePlanoRepository::class
);

$container->bind(
    Clock::class,
    SystemClock::class
);
```

Esse local é chamado frequentemente de **Composition Root**.

Ele pode conhecer:

* Domain;
* Application;
* Infrastructure;
* Presentation;
* bibliotecas;
* framework;
* configurações.

Isso acontece porque sua responsabilidade é conectar todas as partes.

# Direção das dependências

Uma representação simplificada das dependências de código é:

```text
Presentation ──────────────→ Application ──────────────→ Domain
                                  ↑                         ↑
                                  │                         │
Infrastructure ───────────────────┴─────────────────────────┘

Bootstrap ──→ Presentation
          ──→ Application
          ──→ Domain
          ──→ Infrastructure
```

Uma forma mais visual:

```text
┌───────────────────────────────────────────────────────────┐
│                     MUNDO EXTERNO                         │
│ HTTP, Oracle, PNCP, Redis, filas, arquivos, SMTP          │
└────────────────────────────┬──────────────────────────────┘
                             │
                 adaptadores de entrada e saída
                             │
┌────────────────────────────▼──────────────────────────────┐
│                 PRESENTATION / INFRASTRUCTURE             │
└────────────────────────────┬──────────────────────────────┘
                             │ depende de
┌────────────────────────────▼──────────────────────────────┐
│                        APPLICATION                        │
│                    Casos de uso e portas                  │
└────────────────────────────┬──────────────────────────────┘
                             │ depende de
┌────────────────────────────▼──────────────────────────────┐
│                           DOMAIN                          │
│          Entidades, VOs, agregados e regras centrais      │
└───────────────────────────────────────────────────────────┘
```

A execução em tempo de execução pode fazer o caminho inverso por meio de interfaces:

```text
Controller
    ↓
Use Case
    ↓
PlanoRepository — interface
    ↓
OraclePlanoRepository — implementação
    ↓
Oracle
```

Contudo, a dependência de código continua apontando para dentro:

```text
OraclePlanoRepository ──→ PlanoRepository
```

# Significado dos elementos mais comuns

## Aggregate Root

É a entidade que controla uma fronteira de consistência.

```text
Plano
├── Demanda 1
├── Demanda 2
└── Demanda 3
```

Objetos externos normalmente alteram as demandas por meio de `Plano`, e não diretamente.

## Entity

Objeto que possui identidade e continuidade no tempo.

```text
Demanda ID 1042
```

Se seus atributos mudarem, ela ainda será a mesma Demanda.

## Value Object

Objeto identificado por seus valores, normalmente imutável.

```text
Cnpj
Dinheiro
Periodo
PlanoId
NumeroItem
```

Dois objetos com os mesmos valores são conceitualmente equivalentes.

## Domain Service

Representa uma regra de domínio que não pertence naturalmente a uma entidade ou Value Object.

Não deve ser utilizado como depósito genérico de regras.

## Application Service ou Use Case

Coordena uma ação oferecida pela aplicação.

Exemplos:

```text
Criar plano
Homologar plano
Cancelar demanda
Publicar plano
Consultar histórico
```

## Repository

Abstrai a recuperação e persistência de agregados.

```php
interface PlanoRepository
{
    public function obterPorId(PlanoId $id): ?Plano;

    public function salvar(Plano $plano): void;
}
```

O contrato e a implementação normalmente ficam separados:

```text
Domain/Repository/PlanoRepository.php
Infrastructure/Persistence/Oracle/OraclePlanoRepository.php
```

## Input Port

Contrato pelo qual uma entrada externa pode acionar um caso de uso.

```text
HTTP Controller ──→ HomologarPlano
CLI Command ──────→ HomologarPlano
Queue Consumer ───→ HomologarPlano
```

As três entradas podem utilizar o mesmo caso de uso.

## Output Port

Contrato utilizado pela aplicação para:

* persistência;
* notificações;
* transações;
* relógio;
* geração de identificadores;
* publicação de eventos;
* integração externa;
* apresentação do resultado.

## Adapter

Implementação que conecta uma tecnologia à porta.

```text
Porta                         Adaptador
────────────────────────────────────────────────────────
PlanoRepository              OraclePlanoRepository
Clock                         SystemClock
NotificationGateway          SmtpNotificationGateway
EventPublisher               RabbitMqEventPublisher
CurrentUser                  IamCurrentUser
```

## DTO

Objeto utilizado para transportar dados entre fronteiras.

Um DTO normalmente:

* não contém comportamento de domínio;
* não representa necessariamente uma tabela;
* não deve substituir entidades;
* não precisa conhecer HTTP ou banco de dados.

## Command

Representa uma intenção de modificar o estado.

```text
CriarPlanoCommand
CancelarDemandaCommand
HomologarPlanoCommand
```

## Query

Representa uma solicitação de leitura.

```text
ConsultarPlanoQuery
ListarDemandasQuery
ConsultarHistoricoQuery
```

A separação entre Command e Query é comum em projetos que utilizam CQRS, mas não é obrigatória.

## Handler ou Interactor

Classe que executa um Command, Query ou caso de uso.

```text
HomologarPlanoCommand
           ↓
HomologarPlanoHandler
```

## Mapper

Converte dados entre representações.

```text
registro Oracle ──→ entidade de domínio
DTO ──────────────→ objeto de domínio
resposta externa ─→ modelo interno
```

## Hydrator

Reconstrói um objeto a partir de dados persistidos.

É comum quando a criação normal do domínio possui regras que não devem ser repetidas durante a reconstrução do objeto.

## Presenter

Converte a saída da aplicação para um formato de apresentação.

```text
Resultado do caso de uso
          ↓
Presenter
          ↓
JSON, HTML, XML ou saída de terminal
```

## ViewModel

Modelo criado especificamente para exibição.

Pode conter:

* textos formatados;
* datas prontas para exibição;
* valores monetários formatados;
* links;
* indicadores visuais;
* agrupamentos próprios da tela.

Ele não deve ser confundido com a entidade de domínio.

## Domain Event

Representa um fato relevante que já ocorreu:

```text
PlanoCriado
PlanoHomologado
DemandaCancelada
PublicacaoConfirmada
```

Por representar algo que aconteceu, geralmente é nomeado no passado.

## Event Handler

Reage a um evento.

```text
PlanoHomologado
       ↓
RegistrarHistoricoAoHomologarPlano
```

## Process Manager ou Saga

Coordena um processo que:

* possui várias etapas;
* atravessa múltiplos módulos;
* pode durar bastante tempo;
* depende de eventos ou respostas externas;
* precisa registrar seu progresso.

## Specification

Representa uma condição de negócio explícita.

```text
PlanoEstáHomologado
DemandaPodeSerPublicada
PublicaçãoExigeRetificação
```

## Policy ou Strategy

Representa uma regra variável ou uma forma intercambiável de executar uma decisão.

```text
PoliticaPublicacaoNormal
PoliticaRetificacao
PoliticaPublicacaoExtraordinaria
```

## Factory

Centraliza uma criação complexa.

Ela é útil quando criar um objeto exige:

* vários objetos relacionados;
* regras;
* valores padrão de negócio;
* geração de identidade;
* validação conjunta.

## Anti-Corruption Layer

Traduz o modelo de um sistema externo para o modelo interno.

```text
Modelo do PNCP
      ↓
PncpTranslator
      ↓
Modelo interno da aplicação
```

Isso evita espalhar:

* nomes externos;
* códigos externos;
* formatos específicos;
* inconsistências;
* regras de terceiros;

pelo domínio interno.

# Fluxo de uma requisição HTTP

```text
HTTP Request
     ↓
public/index.php
     ↓
Router
     ↓
Middlewares
     ↓
Controller
     ↓
Request / Validator
     ↓
Command ou Input DTO
     ↓
Input Port
     ↓
Use Case / Handler
     ↓
Entities, Value Objects e Domain Services
     ↓
Output Ports
     ↓
Repositories, Gateways e outros adaptadores
     ↓
Presenter
     ↓
HTTP Response
```

Exemplo com persistência:

```text
POST /planos/10/homologacao
             ↓
HomologarPlanoController
             ↓
HomologarPlanoCommand
             ↓
HomologarPlanoHandler
             ↓
PlanoRepository
             ↓
OraclePlanoRepository
             ↓
Oracle Database
```

# Fluxo de uma mensagem de fila

```text
Mensagem recebida
       ↓
Consumer
       ↓
Desserialização
       ↓
Command
       ↓
Use Case
       ↓
Domínio
       ↓
Repository ou Gateway
       ↓
Confirmação ou rejeição da mensagem
```

# Fluxo de um comando CLI

```text
Terminal
   ↓
bin/console
   ↓
Command
   ↓
Use Case
   ↓
Domínio
   ↓
Infraestrutura
   ↓
Saída no terminal
```

# Fluxo de um processo agendado

```text
Scheduler
    ↓
Job
    ↓
Use Case
    ↓
Consulta de dados
    ↓
Aplicação de regras
    ↓
Atualização ou integração
    ↓
Registro de logs e métricas
```

# Cuidados ao utilizar essa estrutura

## Não crie todas as pastas antecipadamente

Uma pasta deve surgir quando existir uma responsabilidade concreta.

Evite começar um projeto pequeno criando dezenas de diretórios vazios.

## A árvore não é uma regra universal

Um projeto pode utilizar:

* `UI` em vez de `Presentation`;
* `Adapters` em vez de `Infrastructure`;
* `Interactor` em vez de `Handler`;
* `Gateway` em vez de `Port`;
* `Core` em vez de `Domain`;
* `Modules` ou `Contexts` dentro de `src`;
* organização por funcionalidade em vez de organização por tipo.

Os nomes importam menos que:

* as responsabilidades;
* as fronteiras;
* a direção das dependências;
* a consistência do projeto.

## Frameworks podem impor outra estrutura

Laravel, Symfony, Slim, Laminas e outros frameworks possuem convenções próprias.

É possível adaptar os princípios sem lutar contra o framework.

## Nem toda interface pertence ao domínio

Uma interface de repositório de agregados pode pertencer ao domínio.

Já interfaces como:

```text
Clock
TransactionManager
EmailGateway
FileStorage
PncpClient
CurrentUser
```

normalmente pertencem à camada de aplicação ou a um núcleo compartilhado, pois apoiam casos de uso e não modelam diretamente uma coleção de objetos de domínio.

## `SharedKernel` deve ser pequeno

Não coloque algo em `SharedKernel` apenas porque duas classes parecem semelhantes.

Compartilhamento excessivo pode criar forte acoplamento entre módulos.

## Evite pastas genéricas

Pastas como estas exigem cuidado:

```text
Utils/
Helpers/
Common/
Misc/
Services/
Managers/
```

Elas frequentemente se transformam em depósitos de classes sem responsabilidade clara.

Prefira nomes que revelem a função real:

```text
Clock/
Identifier/
Serialization/
Money/
DateTime/
Authorization/
```

## Organização por módulo costuma escalar melhor

Em um sistema muito grande, isto:

```text
src/
├── Domain/
│   ├── Entity/
│   └── ValueObject/
├── Application/
└── Infrastructure/
```

pode reunir centenas de arquivos sem deixar claro a qual área do negócio pertencem.

Uma organização modular costuma comunicar melhor:

```text
src/
├── PlanejamentoCompras/
├── PublicacaoPncp/
├── IdentidadeAcesso/
└── Auditoria/
```

Cada módulo pode possuir suas próprias camadas internas.

# Síntese

Ao abrir uma pasta desconhecida, um iniciante pode usar este mapa mental:

```text
Domain
    O que o negócio é e quais regras devem ser verdadeiras?

Application
    Quais ações o sistema oferece e como elas são coordenadas?

Presentation
    Como os usuários, APIs, filas ou comandos acionam o sistema?

Infrastructure
    Como o sistema conversa com banco, APIs, arquivos e tecnologias?

Bootstrap
    Onde as implementações concretas são conectadas às interfaces?

Config
    Onde o comportamento do ambiente é configurado?

Tests
    Onde cada nível do sistema é verificado?

Docs
    Onde as decisões, conceitos e regras são explicados?

Resources
    Onde ficam templates, traduções e artefatos não executáveis?

Public
    O que pode ser acessado diretamente pelo servidor web?

Storage ou Var
    Quais arquivos são produzidos durante a execução?

Scripts e Bin
    Quais operações são executadas fora do fluxo HTTP?
```

A finalidade desta árvore não é determinar que todo projeto deve possuir essas pastas. Seu propósito é oferecer vocabulário e orientação suficientes para que uma pessoa reconheça a natureza dos arquivos, identifique as principais fronteiras e consiga navegar por uma base de código de grande porte sem enxergar apenas uma coleção desconexa de diretórios.
