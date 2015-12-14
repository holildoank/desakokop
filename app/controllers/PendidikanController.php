<?php

class PendidikanController extends \BaseController {

		public function getIndex(){
		$pendidikan = Pendidikan::all();
		$data = array(
			'title' =>'Pendidikan',
			'new'	=>URL::to('pendidikan/new'),
			'pendidikan' =>$pendidikan,
			'pendidikanCount'	=>$pendidikan->Count(),
			'deleteUrl'	=>URL::to('pendidikan/delete'),
			'editUrl'	=>URL::to('pendidikan/edit'),
			);
		return View::make('pendidikan.index', $data);
	}

	public function getNew(){
		$data = array(
			'title' => 'Tambah Data Pendidikan',
			'action' => URL::to('/pendidikan/save-new')
			);
		return View::make('pendidikan.new', $data);
	}
	public function postSaveNew(){
		$pendidikan =new Pendidikan();
		$pendidikan->jenjangpendidikan = Input::get('jenjangpendidikan');
		if($pendidikan->save()){
			return Redirect::to('pendidikan')->with('success', ' Anda Berhasil Menambah Pendidikan');
		}else{
			return Redirect::to('pendidikan')->with('error', 'Anda Gagal Menympan Data Pendidikan');
		}
	}
	public function getEdit($id){
		$pendidikan = Pendidikan::find($id);
		$data = array(
			'title' =>'Edit Data Pendidikan',
			'action' => URL::to('/pendidikan/edit'),
			'pendidikan' => $pendidikan,
			);
		return View::make('pendidikan.new', $data);
	}
	public function postEdit(){
        $pendidikan = Pendidikan::find(Input::get('id'));
        $pendidikan->jenjangpendidikan = Input::get('jenjangpendidikan');
        if($pendidikan->save()){
            return Redirect::to('pendidikan')->with('success', 'pembaruan Pendidikan berhasil disimpan');
        }else{
            return Redirect::to('pendidikan')->with('error', 'pembaruan Pendidikan gagal disimpan');
        }
    }

	public function getDelete($id){
		$pendidikan = Pendidikan::find($id);
		if($pendidikan->delete()){
			return Redirect::to('pendidikan')->with('succes', 'Anda Berhasi Menghapus data Pendidikan');
		}else{
			return Redirect::to('pendidikan')->with('error', 'Anda gagal menghapus data ini');
		}
	}


}
