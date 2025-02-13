
# Commit em Multiplas linhas

## Use Use a text editor
Use `git commit` without the `-m` or `git commit -v`, which will take you to a text editor. So then you can add multiple lines of text using your favorite text editor.

## Multiple `-m` options
If you don?t want to see wordy diffs, you can use multiple `-m` options. Just like this:

```shell
git commit -m "Commit Title" -m "Commit Description"
```

## Open quotes, press Enter
Another easier way is to type `git commit -m "` and hit `Enter` to enter the multiline, and use closing quotes when closing. This looks like this:

```shell
git commit -m "
Commit Title
Commit Description"
```


# Configurar GIT
```shell
git config --global --edit
git config --global user.name "Your Name"
git config --global user.email you@example.com
git commit --amend --reset-author
```

https://stackoverflow.com/questions/37182847/how-do-i-disable-git-credential-manager-for-windows
```shell
git config --edit --system
# remove
helper = manager
git config --system --unset credential.helper
git config --global core.askpass ''
git config --edit --global
[core]
    askpass =
```
https://stackoverflow.com/questions/34396390/git-windows-disable-password-prompt-ui-but-get-password-prompt-from-shell
```shell
git config --global core.askPass true
```

# Limpar arquivos do repositorio

Limpar todos os que n?o s?o necess?rios e/ou arquivos ignorados
```shell
git clean -fdx
```

# Conventional Commits

Seguindo o modelo:
```
!type(?scope): !subject
<?body>
<?footer>
```

```js
conventionsRules = {
    type: {
        description: "Select the type of change that you're committing:",
        enum: {
            feat: {
                description: 'A new feature',
                title: 'Features'
            },
            fix: {
                description: 'A bug fix',
                title: 'Bug Fixes',
            },
            docs: {
                description: 'Documentation only changes',
                title: 'Documentation',
            },
            style: {
                description: 'Changes that do not affect the meaning of the code (white-space, formatting, missing semi-colons, etc)',
                title: 'Styles',
            },
            refactor: {
                description: 'A code change that neither fixes a bug nor adds a feature',
                title: 'Code Refactoring',
            },
            perf: {
                description: 'A code change that improves performance',
                title: 'Performance Improvements',
            },
            test: {
                description: 'Adding missing tests or correcting existing tests',
                title: 'Tests',
            },
            build: {
                description: 'Changes that affect the build system or external dependencies (example scopes: gulp, broccoli, npm)',
                title: 'Builds',
            },
            ci: {
                description: 'Changes to our CI configuration files and scripts (example scopes: Travis, Circle, BrowserStack, SauceLabs)',
                title: 'Continuous Integrations',
            },
            chore: {
                description: "Other changes that don't modify src or test files",
                title: 'Chores',
            },
            revert: {
                description: 'Reverts a previous commit',
                title: 'Reverts',
            }
        }
    },
    scope: {
        description: 'What is the scope of this change (e.g. component or file name)',
    },
    subject: {
        description: 'Write a short, imperative tense description of the change',
    },
    body: {
        description: 'Provide a longer description of the change',
    },
    isBreaking: {
        description: 'Are there any breaking changes?',
    },
    breakingBody: {
        description: 'A BREAKING CHANGE commit requires a body. Please enter a longer description of the commit itself',
    },
    breaking: {
        description: 'Describe the breaking changes',
    },
    isIssueAffected: {
        description: 'Does this change affect any open issues?',
    },
    issuesBody: {
        description: 'If issues are closed, the commit requires a body. Please enter a longer description of the commit itself',
    },
    issues: {
        description: 'Add issue references (e.g. "fix #123", "re #123".)',
    }
}
```

## Tipos Commit

- **test**: indica qualquer tipo de cria??o ou altera??o de c?digos de teste. Exemplo: Cria??o de testes unit?rios.
- **feat**: indica o desenvolvimento de uma nova feature ao projeto. Exemplo: Acr?scimo de um servi?o, funcionalidade, endpoint, etc.
- **refactor**: usado quando houver uma refatora??o de c?digo que n?o tenha qualquer tipo de impacto na l?gica/regras de neg?cio do sistema. Exemplo: Mudan?as de c?digo ap?s um code review
- **style**: empregado quando h? mudan?as de formata??o e estilo do c?digo que n?o alteram o sistema de nenhuma forma.
- **Exemplo**: Mudar o style-guide, mudar de conven??o lint, arrumar indenta??es, remover espa?os em brancos, remover coment?rios, etc..
- **fix**: utilizado quando h? corre??o de erros que est?o gerando bugs no sistema.
- **Exemplo**: Aplicar tratativa para uma fun??o que n?o est? tendo o comportamento esperado e retornando erro.
- **chore**: indica mudan?as no projeto que n?o afetem o sistema ou arquivos de testes. S?o mudan?as de desenvolvimento.
- **Exemplo**: Mudar regras do eslint, adicionar prettier, adicionar mais extens?es de arquivos ao .gitignore
- **docs**: usado quando h? mudan?as na documenta??o do projeto.
- **Exemplo**: adicionar informa??es na documenta??o da API, mudar o README, etc.
- **build**: utilizada para indicar mudan?as que afetam o processo de build do projeto ou depend?ncias externas.
- **Exemplo**: Gulp, adicionar/remover depend?ncias do npm, etc.
- **perf**: indica uma altera??o que melhorou a performance do sistema.
- **Exemplo**: alterar ForEach por while, melhorar a query ao banco, etc.
- **ci**: utilizada para mudan?as nos arquivos de configura??o de CI.
- **Exemplo**: Circle, Travis, BrowserStack, etc.
- **revert**: indica a rever?o de um commit anterior.

# Outros comandos
Desfazer um commit, neste caso � criado um novo commit informando que esta revertendo as mudanca feitas no commit <hash>. Mantendo o historico.
`git revert <hash-commit>`

Retorna para o commit informado e ignora tudo o que tenha sido feito apos ele.
`git reset --hard <hash-commit>`

Volta para o commit ao que foi informado e todos os arquivos alterados retornam para a aarea de staged. Ao resetar � deletado o commit.
`git reset --soft <hash-commit>`

Uma dica � que o git reset seja utilizado apenas nos branchs proprios(locais) e o revert para quando estiver trabalhando na master ou no servidor. Dessa forma se evita perder o historico do que foi feito.

Para se editar o ultimo commit e/ou adicionar mais coisas utiliza-se:
`git commit --amend`
No caso n�o recomenda-se utilizar quando ja enviado para a origem, poispode alterar o historico.

Obter apens mudancas especificas em outra branch para se adicionar na branch em uso:
`git cherry-pick <hash-commit>`
Util para quando se precisa pegar 1 ou dois commit de um branch que tem varios commits, mas nao quer realizar um merge/rebase puxando todos eles.

Criar um zip contendo todos os arquivod do repositorio
`git archive`
Caso queira de uma branch especifica:
`git archive {nome-branch} --format=zip --output={nome-para-arquivo}.zip`

Para exibir o o logs em forma de grafico:
`git log --pretty=oneline --graph`
Se acrescentado o parametro `--all` ser� incluido tambem os stashs realizados entre outras informacoes adicionais.

Especificar a partir de qual data deve apresentar os log utiliza do:
`git log --since='jan 1 2024`
Seguindo a mesta ideia mas com data at� determinada data:
`git log --until='jan 1 2024`
Especificar o autor do commit
`git log --author='User'`

Caso deseje visualizar um log simplificado trazendo(uma linha, quantidade de commits):
`git shortlog`
Caso adicionado o parametro `--sn`, ser� trazido apenas a quantidade de commits e o autor.

Para cso se deseje apresentar as referencias(commits, merges, etc)
`git reflog`

Na parte issues, s�o basicamente o report de problemas encontrados no projeto que podem estar sendo discutidos e classificados com tags.

Milestone -> agrupamento de issues, para ent�o determinar algo como "Quando terminarem todas essas issues teriamos concluido o alpha"
Caso queira referenciar um trecho de codigo na issue � possivel abrir o codigo pelo github, selecionar as linha e ent�o ira apresentar na lateral o icone de 3 pontos ao clicar la tera a op��o de open new issue.

Para criar um template, de forma que ao ser aberta uma issue esses templates possam ser paresetnados, na raiz do projeto crie uma pasta `.github` e dentro dele crie o  arquivo `issue_template.md`.
Exemplo:
```markdown
## Prerequisites
- [ ] Read guidelines
- [ ] Test in all browers
- [ ] ...

## Description
Add here all the description that you think it will be useful.

## Screenshots
Add screenshots cases.
```

Para referenciar uma issue dentro de outra, � necess�rio que se coloque `#` seguida do n�mero da issue que deseja ser referenciada. Assim na issue relacionada er� apresentar que a mesma foi referenciada em outro lugar.

No github caso queira fechar a issue ao realizar um push, na mensagem use - Closes #{nuremoIssue}, assim fechando de forma automatica. O github tammb�m entrega outras keywords al�m de closes para realizar a��es [mais informa��es](https://docs.github.com/en/get-started/writing-on-github/working-with-advanced-formatting/using-keywords-in-issues-and-pull-requests)

Qaundo se cria uma nova branch e faz seu envio ao servidor, pode ser feito um pedido de pull request para que possa ser adicionada a branch principal. Ao acessar a branch � apresentada a op��o de comparar e realizar o pull request.

Para configurar um template para as descri��es apresentadas o pull request, na raiz do projeto crie uma pasta `.github` e dentro dele crie o  arquivo `pull_request_template.md`.
Exemplo:
```markdown
## Description
Add here all the description that you think it will be useful.

## Review
- [ ] Approval from stackholders
- [ ] ...

## Pre-merge checklist
- [ ] Test in all browers
- [ ] ...

## Screenshots
Add screenshots cases.
|Before|After|
|---|---|
|insert image before|insert image after|
```

Para bloquear pulls diretos para a master(protejendo assim de commits com erros), sendo assim necess�rio realizar um pull request deve ser configurado o repositorio. Para isso dentro do repositorio(servidor) acesse settings -> branchs dentro dela tem uma se��o de branchs protegidas onde pode se selecionar quais as branchs que se deseja bloquear. Podendo ainda configurar bloqueios extras como por exemplo o desejo que se tenha revis�o antes de poder dar o merge.

Com rela��o ao workflow existem normalmente 3 modelos que s�o seguidos:
- Centralized Workflow: Nessa metodologia se possui uma unica branch(master), n�o muito recomendado. O conceito se baseia onde uma pessoa realiza o commmit na master e ent�o o outro no momento que for realizar o commit e sofrer de conflito precisara dar um rebase para ent�o colocar suas altera��es no final.