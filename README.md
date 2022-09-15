<h1>Contact Manager</h1>

<p>Contact Manager é uma aplicação de gerêncimento de contactos, é um teste que me foi dado pela empresa AlfaSofware.</p>

### Como rodar o projecto
<p>Para rodar o projecto na sua máquina, primeiramente deves renomear o arquivo

```.env-example``` para ```.env```. Em seguida segui o passos abaixo:</p>

- Roda o seguinte comando no terminal na raíz do projecto: ``` php artisan key:generate ```(caso ainda não foi criada a chave)
- Abri o arquivo ```.env``` e procura a váriavel ***DB_DATABASE*** e atribuir o nome da base de dados(primeiro tens de criar  base de dados).
- Roda o seguinte comando para instalar os pacotes do laravel via composer: ``` composer update & install``` ou simplesmente ``` composer install ```.
- Roda o seguinte comando para instalar as migrations: ``` php artisan migrate ```
- Roda o seguinte comando para criar um usuario administrator: ``` php artisan user:create ```
- Roda o seguinte comando para inicializar aplicação: ``` php artisan serve ```
### Funcionalidades da aplicação
- [x] Listar todos contactoa
- [x] Criação de novo contacto
- [x] Actualização do contacto
- [x] Deleção do contacto

### Apresentação da aplicação

<p>Tela inicial (Usuário autenticado / Usuário não autenticado)</p>
<img src="home.png" />
<p>Tela de login</p>
<img src="login.png" />

<p>Tela para listar contacto (Usuário autenticado)</p>
<img src="contact-auth.png" />

<p>Tela para adicionar contact (Usuário autenticado)</p>
<img src="add.png" />
