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
-Abra o arquivo route-list.php em "routes/route-list.php":
-Registre uma nova rota como mostrado no arquivo;
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
-Open the file route-list.php at "routes/route-list.php":
-Add a new route following the example in the file;
-To reach this page at navigator locally, set url to:
	localhost/standard-eloquent-project/categories
-To reach this page at navigator remotely, set url to:
	www.domain.com/categories
