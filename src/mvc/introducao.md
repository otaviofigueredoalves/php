## BÁSICO
Model - É onde está o processamento de dados. Ele aguarda o controller fazer a solicitação dos dados e, a partir disso ele realiza a busca/processamento destes dados. Geralmente retorna os dados como json, array, array de objetos...

View - É onde está a interface, componentes e a estrutura da página. Ele aguarda o controller fazer o pedido da interface

Controller - Recebe as entradas do usuário e realiza a solicitação para o view e para o model. Quando ele precisa de dados ele solicita estes dados pro model, o model pega eles do banco e depois retorna pro controller. Agora que o controller tem os dados ele precisa exibir estes dados pro usuário de forma que o usuário entenda/compreenda o que está sendo exibido. Para isso existe o View, que recebe os dados do controller e exibe a interface pro usuário. Ou no padrão mais moderno, a view retorna o html pronto pro controller

- Podemos executar vários models em uma mesma requisição.
- Geralmente é assim: 1 controlador buscando vários models e geralmente 1 view. Mas depois quando complicar mais vamos ter partes do site com MVC separado e componentes buscando mais de 1 controlador

## ROUTER
- O Router vai ser o redirecionador para os controllers toda vez que o usuário acessar determinada parte da página;
- Ele deve estar no index.php, pois deve ser a primeira página a ser acessada independente de onde o user estiver acessando
- Ex: o usuário quer acessar site.com/perfil, o router irá capturar esse /perfil e enviar a requisição pro controller PerfilController.php.

## HTACCESS
- Por padrão, quando o usuário tenta acessar /noticias ou noticias.php o navegador irá fazer uma pesquisa "existe na pasta do servidor um arquivo chamado notícias .php?" Isso ignora totalmente o controller.

- Para contornar isso existe o .HTACCESS. No NGINX o htaccess altera a rota que o usuário digitou e direciona toda a rota pro index.php (router) através de um get. Ex: site.com/index.php?rota=noticias

- Ele é basicamente um funil


### DISSECANDO HTACCESS
====
RewriteEngine On
====
"Servidor apache/nginx, por favor, ligue o motor de reescrita de URLs"

====
RewriteCond %{REQUEST_URI} !^/public
====
"SE a URL que o usuário digitou NÃO começar com a palavra '/public'..."

===
- RewriteCond: If (condição)

- %{REQUEST_URI}: é o que o usuário digitou (ex: /livros/adicionar)
- !: NÃO

- ^/public: o "^" significa "começa com". Isso existe pois se o usuário estiver tentando acessar algo dentro da pasta public, o servidor deixa passar direto e não faz o redirecionamento
===

====
RewriteRule ^(.*)$ public/index.php?url=$1 [QSA,L]
====
"ENTÃO, pegue absolutamente TUDO o que ele digitou, esconda isso, e mande a requisição para o index.php dentro da pasta public, passando o que ele digitou como uma variavel chamada url"


RewriteRule: É a Ação (O que fazer se a Linha 2 for verdadeira).

^(.*)$: Isso é uma Expressão Regular. Os parênteses (.*) significam "Capture absolutamente qualquer texto digitado aqui".

public/index.php?url=$1: O destino. Aquele $1 é a variável mágica que guarda o texto que foi capturado nos parênteses acima.

[QSA]: Significa Query String Append. Se o usuário digitou site.com/livros?id=5, o servidor não vai apagar o ?id=5, ele vai juntar tudo.

[L]: Significa Last (Última). Diz ao servidor: "Terminamos por aqui, não leia mais nenhuma regra abaixo desta linha".