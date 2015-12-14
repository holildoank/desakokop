<?php

class Agama extends \Eloquent {
	protected $table = 'agama';
	protected $primaryKey ='id';
    
    protected $fillable = array('nama');


    public function penduduk()
    {
    	return $this->hasMany('Penduduk', 'id_agama');
    }
}