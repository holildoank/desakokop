<?php

class PendudukController extends \BaseController {

	public function getIndex()
	{
		$penduduk = Penduduk::all();
			$data = array(
				'title' =>'Penduduk',
				'new' => URL::to('penduduk/new'),
				'penduduk' => $penduduk,
				'pendudukCount' => $penduduk->count(),
	            'deleteUrl' => URL::to('penduduk/delete'),
	            'editUrl' => URL::to('penduduk/edit'),
				);
			return View::make('penduduk.index', $data);
	}
	public function getNew(){
		$data = array(
			'title' => 'Tambah Data Penduduk',
			'action' => URL::to('/penduduk/save-new')
			);
		return View::make('penduduk.new', $data);
	}
	public function postSaveNew(){
		$penduduk =new Penduduk();
		$penduduk->nokk = Input::get('nokk');
		$penduduk->kepala_keluarga = Input::get('kepala_keluarga');
		$penduduk->nama = Input::get('nama');
		$penduduk->nik = Input::get('nik');
		$penduduk->jenisklamin = Input::get('jenisklamin');
		$penduduk->tempatlahir = Input::get('tempatlahir');
		$penduduk->tanggallahir = Input::get('tanggallahir');
		$penduduk->id_agama = Input::get('id_agama');
		$penduduk->id_pendidikan = Input::get('id_pendidikan');
		$penduduk->id_pekerjaan = Input::get('id_pekerjaan');
		$penduduk->id_dusun = Input::get('id_dusun');

		if($penduduk->save()){
			return Redirect::to('penduduk')->with('success', ' Anda Berhasil Menambah Penduduk');
		}else{
			return Redirect::to('penduduk')->with('error', 'Anda Gagal Menympan Data Penduduk');
		}
	}
	public function getEdit($id){
		$penduduk = Penduduk::find($id);
		$data = array(
			'title' =>'Edit Data Penduduk',
			'action' => URL::to('penduduk/edit'),
			'penduduk' => $penduduk,
			);
		return View::make('penduduk.new', $data);
	}
	public function postEdit(){
        $penduduk = Penduduk::find(Input::get('id'));
        $penduduk->nokk = Input::get('nokk');
		$penduduk->kepala_keluarga = Input::get('kepala_keluarga');
		$penduduk->nama = Input::get('nama');
		$penduduk->nik = Input::get('nik');
		$penduduk->jenisklamin = Input::get('jenisklamin');
		$penduduk->tempatlahir = Input::get('tempatlahir');
		$penduduk->tanggallahir = Input::get('tanggallahir');
		$penduduk->id_agama = Input::get('id_agama');
		$penduduk->id_pendidikan = Input::get('id_pendidikan');
		$penduduk->id_pekerjaan = Input::get('id_pekerjaan');
		$penduduk->id_dusun = Input::get('id_dusun');

        if($penduduk->save()){
            return Redirect::to('penduduk')->with('success', 'pembaruan Penduduk berhasil disimpan');
        }else{
            return Redirect::to('penduduk')->with('error', 'pembaruan Penduduk gagal disimpan');
        }
    }
	public function getDelete($id){
		$penduduk = Penduduk::find($id);
		if($penduduk->delete()){
			return Redirect::to('penduduk')->with('succes', 'Anda Berhasi Menghapus data Penduduk');
		}else{
			return Redirect::to('penduduk')->with('error', 'Anda gagal menghapus data ini');
		}
	}





}
