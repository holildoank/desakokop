<?php

class PekerjaanController extends \BaseController {

	public function getIndex(){
		$pekerjaan = Pekerjaan::all();
		$data = array(
			'title' =>'Pekerjaan',
			'new'	=>URL::to('pekerjaan/new'),
			'pekerjaan' =>$pekerjaan,
			'pekerjaanCount'	=>$pekerjaan->Count(),
			'deleteUrl'	=>URL::to('pekerjaan/delete'),
			'editUrl'	=>URL::to('pekerjaan/edit'),
			);
		return View::make('pekerjaan.index', $data);
	}
	public function getNew(){
		$data = array(
			'title' => 'Tambah Data Pekerjaan',
			'action' => URL::to('/pekerjaan/save-new')
			);
		return View::make('pekerjaan.new', $data);
	}
	public function postSaveNew(){
		$pekerjaan = new Pekerjaan();
		$pekerjaan->nama = Input::get('nama');
		$pekerjaan->Jenispekerjaan = Input::get('Jenispekerjaan');
		if($pekerjaan->save()){
			return Redirect::to('pekerjaan')->with('succes', ' Anda Berhasil Menambah Pekerjaan');
		}else{
			return Redirect::to('pekerjaan')->with('error', 'Anda Gagal Menympan Data Pekerjaan');
		}
	}
	public function getEdit($id){
		$pekerjaan = Pekerjaan::find($id);
		$data = array(
			'title' =>'Edit Data Pekerjaan',
			'action' => URL::to('pekerjaan/edit'),
			'pekerjaan' => $pekerjaan,
			);
		return View::make('pekerjaan.new', $data);
	}
	public function postEdit(){
        $pekerjaan = Pekerjaan::find(Input::get('id'));
        $pekerjaan->nama = Input::get('nama');
        $pekerjaan->Jenispekerjaan = Input::get('Jenispekerjaan');
        if($pekerjaan->save()){
            return Redirect::to('pekerjaan')->with('success', 'pembaruan Pekerjaan berhasil disimpan');
        }else{
            return Redirect::to('pekerjaan')->with('error', 'pembaruan Pekerjaan gagal disimpan');
        }
    }
	public function getDelete($id){
		$pekerjaan = Pekerjaan::find($id);
		if($pekerjaan->delete()){
			return Redirect::to('pekerjaan')->with('succes', 'Anda Berhasi Menghapus data Pekerjaan');
		}else{
			return Redirect::to('pekerjaan')->with('error', 'Anda gagal menghapus data ini');
		}
	}

}
