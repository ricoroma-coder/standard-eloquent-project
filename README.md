##Siga as seguintes instruções para começar a codificar:

#Abra o terminal de comando na pasta do projeto e execute:
	composer install

#Configure o arquivo config.php com os dados de sua base de dados:
	defined("DBDRIVER")or define("DBDRIVER","{dbdriver}");
	defined("DBHOST")or define("DBHOST","{dbhost}");
	defined("DBNAME")or define("DBNAME","{dbname}");
	defined("DBUSER")or define("DBUSER","{dbuser}");
	defined("DBPASS")or define("DBPASS","{dbpass}");

#Abra o arquivo Route.php em "app/models/general":
-Mude o atributo na linha 9 de:
	protected projectName = "standard-project";
-para:
	protected projectName = "{project's name}";
-Exemplo: 
-Se o seu projeto chama management:
	protected projectName = "management";

#Comece a codificar.

##Funcionalidades:

#Para registrar uma nova rota:
-Abra o arquivo Route.php em "app/models/general/Route.php":
-Registre uma nova rota na função setRoutes() na linha 35;
-Exemplo: Crie uma nova rota "categorias"
- Array Original
	$this->routes = [
		'index' => [
			'path' => 'resources/views/index.php',
			'title' => 'Home'
		],
		'nao-encontrado' => [
			'path' => 'resources/views/error/404.php',
			'title' => 'Caminho não encontrado'
		]
	];
- Novo Array
	$this->routes = [
		'index' => [
			'path' => 'resources/views/index.php',
			'title' => 'Home'
		],
		'nao-encontrado' => [
			'path' => 'resources/views/error/404.php',
			'title' => 'Caminho não encontrado'
		],
		'categorias' => [
			'path' => 'resources/views/categoria/index.php',
			'title' => 'Categorias'
		]
	];
-Para acessar essa nova rota no navegador localmente, configure a url para:
	localhost/standard-eloquent-project/categorias
-Para acessar essa nova rota no navegador remotamente, configure a url para:
	www.domain.com/categorias

##Follow the given steps to start coding:

#Open terminal in the project's folder and run:
	composer install

#Configure the file config.php to your database info:
	defined("DBDRIVER")or define("DBDRIVER","{dbdriver}");
	defined("DBHOST")or define("DBHOST","{dbhost}");
	defined("DBNAME")or define("DBNAME","{dbname}");
	defined("DBUSER")or define("DBUSER","{dbuser}");
	defined("DBPASS")or define("DBPASS","{dbpass}");

#Open the file Route.php at "app/models/general/Route.php":
-Change the attribute at line 9 from:
	protected projectName = "standard-project";
-to:
	protected projectName = "{project's name}";
-Example:
-If your project's name is management:
	protected projectName = "management";

#Start coding.

##Engine

#To register a new route:
-Open the file Route.php at "app/models/general/Route.php":
-Add a new route in function setRoutes() at line 35;
-Example: Add a new route "categories"
- Original Array
	$this->routes = [
		'index' => [
			'path' => 'resources/views/index.php',
			'title' => 'Home'
		],
		'nao-encontrado' => [
			'path' => 'resources/views/error/404.php',
			'title' => 'Caminho não encontrado'
		]
	];
- New Array
	$this->routes = [
		'index' => [
			'path' => 'resources/views/index.php',
			'title' => 'Home'
		],
		'nao-encontrado' => [
			'path' => 'resources/views/error/404.php',
			'title' => 'Caminho não encontrado'
		],
		'categories' => [
			'path' => 'resources/views/category/index.php',
			'title' => 'Categories'
		]
	];
-To reach this page at navigator locally, set url to:
	localhost/standard-eloquent-project/categories
-To reach this page at navigator remotely, set url to:
	www.domain.com/categories
