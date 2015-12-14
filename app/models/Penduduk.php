<?php

class Penduduk extends \Eloquent {
	protected $table = 'penduduk';
	 public function agama()
    {
        return $this->belongsTo('agama', 'id_agama');
    }
     public function dusun()
    {
        return $this->belongsTo('dusun', 'id_dusun');
    }
     public function pekerjaan()
    {
        return $this->belongsTo('pekerjaan', 'id_pekerjaan');
    }
     public function pendidikan()
    {
        return $this->belongsTo('pendidikan', 'id_pendidikan');
    }
}