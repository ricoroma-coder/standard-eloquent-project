<?php 

namespace Models\General;

use Models\General\Model;

class Route extends Model {

	protected $projectName = "standard-eloquent-project";
	protected $current;
	protected $path;
	protected $routes;
	protected $parameters = [];
	protected $pathFailed;
	protected $title;

	public function __construct() {
		$this->setRoutes();
		$REQUEST_URI = $this->request();
		$URL = $this->prepareUrl($REQUEST_URI);

		if (isset($this->routes[$URL]['path'])) {
			$this->current = $URL;
			$this->path = $this->routes[$URL]['path'];
			$this->title = $this->routes[$URL]['title'];
		}
		else {
			$this->current = 'nao-encontrado';
			$this->path = $this->routes['nao-encontrado']['path'];
			$this->title = $this->routes['nao-encontrado']['title'];
			$this->pathFailed = $URL;
		}
	}

	public function setRoutes() {
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
	}

	public function request() {
		$REQUEST_URI = filter_input(INPUT_SERVER, 'REQUEST_URI');

		$hasParameters = strpos($REQUEST_URI, '?');
		if ($hasParameters) {
			$PARAMETERS = explode('?', $REQUEST_URI)[1];
			$REQUEST_URI = substr($REQUEST_URI, 0, $hasParameters);
			$PARAMETERS = explode('&', $PARAMETERS);
			foreach ($PARAMETERS as $value) {
				$k = explode('=', $value)[0];
				$v = explode('=', $value)[1];
				$this->parameters[$k] = $v;
			}
		}

		return $REQUEST_URI;
	}

	public function prepareUrl($REQUEST_URI) {
		$FOLDER = substr($REQUEST_URI, 1);

		$URL = explode($this->projectName.'/', $FOLDER);

		if (!empty($URL[1]))
			for ($i = 0; $i < sizeof($URL); $i++) {
				if ($i != sizeof($URL)-1) {
					$URL[$i] = $URL[$i+1];
				}
				else {
					$URL[$i] = '';
				}
			}
		else if (empty($URL[0]))
			$URL[0] = 'index';

		$aux = [];
		foreach ($URL as $val) {
			if (!empty($val))
				$aux[] = $val;
		}

		$URL = implode('/', $aux);

		return $URL;
	}

	public function get($attr) {
		return $this->$attr;
	}


}