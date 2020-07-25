<?php 

namespace Models\General;

class Model {

	public function get($attr) {
		return $this->$attr;
	}

	public function set($attr, $value) {
		$this->$attr = $value;
	}

}