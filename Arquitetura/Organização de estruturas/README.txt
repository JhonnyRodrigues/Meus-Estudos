Exemplos didáticos de organização de projetos PHP.
As estruturas MVC e Clean/Hexagonal representam abordagens arquiteturais, enquanto Laravel, Symfony e Slim representam organizações utilizadas ou possibilitadas por frameworks específicos.
As árvores foram simplificadas para facilitar a comparação e não abrangem todos os diretórios possíveis.

Comparação final
| Estrutura       | Natureza            | Organização principal                   |
| --------------- | ------------------- | --------------------------------------- |
| MVC             | Padrão arquitetural | Model, View e Controller                |
| Clean/Hexagonal | Arquitetura         | Domain, Application, Ports e Adapters   |
| Laravel         | Framework           | `app`, `resources`, `routes`, `storage` |
| Symfony         | Framework           | `src`, `templates`, `config`, `var`     |
| Slim            | Microframework      | Estrutura definida pela equipe          |

Clean Architecture e Arquitetura Hexagonal são abordagens arquiteturais — relacionadas, mas não idênticas. Não são sinônimos, mas possuem princípios próximos:
- domínio isolado;
- dependências apontando para dentro;
- regras de negócio independentes de banco e framework;
- interfaces representando portas;
- implementações externas representando adaptadores.