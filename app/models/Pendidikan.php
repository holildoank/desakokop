<?php

class Pendidikan extends \Eloquent {
	protected $table = 'pendidikan';

	 public function penduduk()
    {
    	return $this->hasMany('Penduduk', 'id_pendidikan');
    }
}