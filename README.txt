Follow the given steps to start coding:

- Open terminal in the project's folder:

	- Run:
		composer install

- Configure the file config.php to your database info:

	defined("DBDRIVER")or define("DBDRIVER","{dbdriver}");
	defined("DBHOST")or define("DBHOST","{dbhost}");
	defined("DBNAME")or define("DBNAME","{dbname}");
	defined("DBUSER")or define("DBUSER","{dbuser}");
	defined("DBPASS")or define("DBPASS","{dbpass}");

- Open file Route.php at "app/models/general/Route.php":

	- Change the attribute at line 9:
		- from:
			protected projectName = "standard-project";
		- to:
			protected projectName = "{project's name}";
		- Example:
		- If your project's name is management:
			protected projectName = "management";

- Start coding;

- To register a new route:
	
	- Open the file Route.php at "app/models/general/Route.php":
		- Reach the function setRoutes() at line 35;
		- Add to $this->routes Array the nickname path as a key and the project's path and title as value
		- Example: 
			- Original Array:

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

			- Adding categories to routes

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
	- To reach this page at navigator, set url to localhost/standard-project/categories (LOCAL);
	- To reach this page at navigator, set url to www.domain.com/categories (REMOTE);