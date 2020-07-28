<?php 

namespace App\General;

use Illuminate\Database\Eloquent\Model;

class ModelObject extends Model {

	public function get($attr) {
		return $this->$attr;
	}

	public function set($attr, $value) {
		$this->$attr = $value;
	}

}