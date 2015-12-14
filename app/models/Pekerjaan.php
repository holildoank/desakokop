<?php

class Pekerjaan extends \Eloquent {
	protected $table = 'pekerjaan';
	 public function penduduk()
    {
    	return $this->hasMany('Penduduk', 'id_pekerjaan');
    }
}