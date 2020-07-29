<?php

namespace App\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Manager as DB;

class Validate extends Model {

    public function validate($array) {
        $error = [];
        foreach($array as $key => $value) {
            $rules = explode('|', $value);
            foreach($rules as $value) {
                $aux = explode(':',$value);
                switch ($aux[0]) {
                    case 'require':
                        if (!isset($this->$key) || empty($this->key))
                            $error[$key][$aux[0]] = 'Campo obrigatório';
                    break;
                    case 'email':
                        if (strpos($this->$key,'@') == -1)
                            $error[$key][$aux[0]] = 'Digite um e-mail válido';
                    break;
                    case 'min':
                        if (strlen($this->$key) < $aux[1])
                            $error[$key][$aux[0]] = 'Digite ao menos '.$aux[1].' caracteres';
                    break;
                    case 'max':
                        if (strlen($this->$key) > $aux[1])
                            $error[$key][$aux[0]] = 'Digite no máximo '.$aux[1].' caracteres';
                    break;
                    case 'unique':
                        $obj = DB::table($aux[1])->where($key, $this->$key)->get();
                        if (!$obj->isEmpty())
                            $error[$key][$aux[0]] = 'Tente outro valor';
                    break;
                }
            }
        }

        return $error;
    }

}