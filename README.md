# proginternet-t1

Unipar EAD

Analise e Desenvolvimento de Sistemas

Andrik Machado Batista

Atividade Reflexiva [AR]

Disciplina: Programação para Internet

Tema: Aplicação Web

Professor: Carlos Eduardo Simões Pelegrin

1 – Características da Atividade

A atividade que será desenvolvida visa proporcionar a oportunidade de vivência
no mundo do desenvolvimento para Internet, trazendo-o mais próximo possível
do mercado de trabalho.

Portanto, busca-se permitir a pesquisa e interpretação de códigos e exemplos,
aguçar a curiosidade e compreensão das diversas técnicas de trabalho com as
técnicas de programação explicadas no decorrer da disciplina.

Também visa mostrar que não é necessário ser designer para criar sites
minimamente bonitos e com uma funcionalidade aceitável.

Ainda, a atividade oportuniza aprender técnicas que não foram vistas na
disciplina, aprimorando o conhecimento através de pesquisas e interpretação de
exemplos.

O emprego da atividade prática é também uma forma de motivar a refletir sobre
a área, já que os mesmos terão a responsabilidade de empregar suas
capacidades analítica e criativa e não simplesmente realizar uma leitura (ou
pesquisa) “somente por ler”.

A capacidade analítica é desenvolvida quando o aluno é desafiado a interpretar
e implementar o que é solicitado, conforme acontece com análise de requisitos
em um projeto real. Dessa forma, a técnica possibilita a integração de ideias, já
que precisa organizar, raciocinar e sintetizar essas ideias para implementar o
projeto proposto.

2 – Contextualização e preparação para o estudo

Nesta atividade o acadêmico deverá criar um mini e-commerce. Para isso deverá
utilizar as técnicas de orientação a objetos, relacionamento entre objetos,
armazenamento e autenticação.

3 – Atividades

Como itens obrigatórios:

• O acadêmico deverá criar uma página capaz de realizar um CRUD (Create,
Read, Update e Delete) de Produtos. Para isso, deverá utilizar os conceitos de
orientação a objetos para definir a classe Produtos, que deve conter as seguintes
informações: id, nome, descrição, código de barras, fabricante, validade (se
houver), etc... e os métodos necessários para realizar o CRUD.
• Uma página de Login também deverá ser criada com o intuito de autenticar um
usuário para que possa ser apresentada as informações e operações sobre os
produtos, mantendo uma sessão para acesso. Um Usuário deve conter as
seguintes informações: id, nome e senha.
• A página de Login deve permitir que um novo usuário se cadastre no site,
preenchendo as informações de nome e senha. A senha deve ser armazenada
no banco de dados utilizando hash.
• Só será permitido realizar operações de CRUD dos Produtos para usuários
devidamente autenticados no site.
• O acadêmico deverá criar menus para facilitar a navegação.
• Utilizar o framework Bootstrap para deixar seu sistema mais bonito.
• NÃO utilizar nenhum framework além do Bootstrap. A ideia desta atividade é
que você pratique os conceitos abordados na disciplina.
• Utilizar o banco de dados MySQL (phpMyAdmin) para persistir os dados.
• Enviar junto com o projeto o script do banco de dados. No phpMyAdmin, você
pode exportar todo o script SQL do banco de dados na aba “Exportar” de forma
bem simples.
• Enviar junto com o projeto um arquivo de texto contendo uma breve descrição
sobre as funcionalidades do projeto desenvolvido e de como fazer para
testá-lo, incluindo informações sobre como executar a base de dados
(script SQL).
Como forma de desafio (opcional):
• Ter desenvolvido tudo o que fora solicitado nos itens obrigatórios e utilizar
orientação a objetos para definir as classes Produto, Fornecedor e Carrinho.
• Deverá existir uma área para cadastro dos 3 elementos no Banco de Dados,
consequentemente deve-se haver relacionamento entre as classes/objetos.
• Outra área do site deverá utilizar AJAX para atualização dos dados dos 3
elementos.
• Uma terceira área deverá exibir os produtos e permitir a seleção de um
checkbox, e, após alguns produtos selecionados (validação), permite incluir no
carrinho.
• Uma quarta área do site deverá exibir o carrinho de compras com os produtos
selecionados pelo usuário.

4 – Entrega da atividade

Todo o código fonte desenvolvido e demais itens solicitados devem ser
entregues como forma de avaliar sua Atividade Reflexiva. O projeto pode ser
entregue através de um repositório do Git, ou através do envio de um arquivo
compactado.

Se optar por utilizar Git, a entrega do trabalho será o link do repositório público
em que seu código fonte está mantido. Crie corretamente o arquivo README.md
para que mostre seu nome, detalhes do trabalho e referências de uso de
bibliotecas e outros materiais utilizados para desenvolvimento. Basta enviar o
link do repositório em um arquivo de texto (.DOCX ou .PDF) no ambiente da
atividade reflexiva.

Caso opte por não utilizar o Git, poderá enviar o projeto em arquivo
compactado (.ZIP ou .RAR) no ambiente da atividade reflexiva.

ATENÇÃO: Seu código deve funcionar sem erros. Caso sejam identificados
erros na execução do projeto ou não seja possível executá-lo por que as
instruções foram insuficientes ou não explicadas de forma clara, a atividade não
poderá ser avaliada.

Dicas:

Consulte as referências deste arquivo.

Caso tenha problemas com a utilização do Git, o acadêmico poderá assistir às
aulas neste canal: <http://bit.ly/2te8UPX>

Faça commit de cada alteração em uma ferramenta de Git. A mais utilizada pela
comunidade é o GitHub, mas existem outras, como o GitLab e Bitbucket.

Em todas elas o procedimento é o mesmo. Crie um repositório já com um
README.md, faça clone para seu computador, inclua os arquivos do seu projeto
dentro da pasta que foi clonada. A cada alteração, faça um add e um commit
com a mensagem de forma correta para facilitar o changelog. Faça um push
após algum tempo para enviar as alterações para o servidor Git. Ao final, crie
uma TAG e envie para o servidor central.

5 – Orientações para o estudo

Perceba que essa atividade possui uma infinidade de formas para
desenvolvimento, sendo assim não há formas totalmente erradas para chegar
ao resultado. O que pode existir é maneiras mais indicadas de programar.
Sugiro que sejam seguidas as boas práticas de programação de cada linguagem.
Procure referências na internet ou em livros para verificar como desenvolver de
maneira mais correta.

A internet é a forma mais fácil de disseminação de informação, mas procure
artigos e sites confiáveis para ter embasamento no desenvolvimento. Livros
também são ótimas opções.

Dúvidas sobre o tema ou as questões podem ser enviadas pelo AVA.
Como fontes de consultas, sugere-se a utilização do Guia Didático da disciplina,
os materiais complementares, as aulas conceituais, os encontros ao vivo, as
obras da biblioteca virtual e artigos científicos (base de dados confiável para a
busca por artigos científicos: www.spell.org.br).

Além dessas fontes, apresenta-se ao final do roteiro referências sobre a temática
da atividade.

6 – Referências

1. Site oficial do PHP. Disponível em: <https://www.php.net/>. Acesso em
15/02/2022.
2. PHP Básico. Disponível em:
<<https://www.schoolofnet.com/curso/php/linguagem-php/iniciando-com>-
php/>. Acesso em 15/02/2022.
3. Tutorial PHP W3Schools. Disponível em:
<https://www.w3schools.com/php/>. Acesso em 15/02/2022.
4. Site oficial do Bootstrap. Disponível em: <https://getbootstrap.com/>.
Acesso em 15/02/2022.
5. Tutorial Bootstrap 5 W3Schools. Disponível em:
<https://www.w3schools.com/bootstrap5/>. Acesso em 22/07/2021.
6. CRUD PHP com PDO. Disponível em:
<https://www.devmedia.com.br/crud-com-php-pdo/28873>. Acesso em
15/02/2022.
7. PHP:: PDO – CRUD COMPLETO. Disponível em:
<<https://alexandrebbarbosa.wordpress.com/2016/09/04/php-pdo-crud>-
completo/>. Acesso em 15/02/2022.
8. DALL’OGLIO, Pablo. PHP – Programando com Orientação a Objetos.
São Paulo: Novatec, 2018.
