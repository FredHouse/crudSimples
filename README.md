# Crud Simples #

Um crud simples em PHP+PDO+Bootstrap se frameworks e sem ajax.

A ideia principal é criar um pequeno sistema com telas crud (create, read, update, delete), sem usar frameworks no lado do servidor, e sem uso de ajax. Um crud bem característico do início do php, para que possamos também compreender como os sistemas eram criados naquela época.

## Arquivos ##

Vamos descrever a seguir a funcionalidade de cada arquivo criado no sistema:

![](http://i.imgur.com/pEOH3b8.png)

- **includes** Nesta pasta ficam os arquivos da base do sistema, que devem ser inseridos pelos outros arquivos que a usam.
- **includes/banco.php** Classe para conexão com o banco de dados mySql, através do PDO. Esta classe pode ser utilizada em qualquer sistema PHP para acesso ao banco de dados através do PDO. A forma de utilização desta classe está descrita no tópico a seguir.
- **includes/cabecalho.php** Contém o cabeçalho HTML da página, incluindo a chamada ao bootstrap, a inclusão do título da página, do menu.php e de uma mensagem de erro definida através da variável ERRO.
- **includes/config.php** Contém as configurações do sistema, como as informações de acesso ao banco de dados, o menu da aplicação, além da inclusão de arquivos base ao sistema. Toda página deve incluir este arquivo.
- **includes/funcoes.php** Funções diversas do sistema
- **includes/menu.php** É o menu superior da aplicação, que usa o config.php para incluir os itens de menu. Para incluir um item no menu, edite o arquivo config.php e não este.
- **inlcudes/rodape.php** Inclui a parte html do final da pagina, incluindo os arquivos jquery e bootstrap via CDN
- Outros: em breve

## Uma nota sobre CDN ##

Os arquivos javascript e css da aplicação são incluidos através de seus respectivos caminhos CDN. Ou seja, ao invés de copiar o arquivo jquery.js para o sistema, nós estamos adicionando-o diretamente do servidor do google, conforme podemos ver a seguir:

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

Isso significa que, para que a aplicação funcione como um todo, é necessário estar conectado à Internet.


