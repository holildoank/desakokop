<?php

class DusunController extends \BaseController {


	public function getIndex()
	{
		$dusun = Dusun::all();
			$data = array(
				'title' =>'Dusun',
				'new' => URL::to('dusun/new'),
				'dusun' => $dusun,
				'dusunCount' => $dusun->count(),
	            'deleteUrl' => URL::to('dusun/delete'),
	            'editUrl' => URL::to('dusun/edit'),
				);
			return View::make('dusun.index', $data);
	}
	public function getNew(){
		$data = array(
			'title' => 'Tambah Data Dusun',
			'action' => URL::to('/dusun/save-new')
			);
		return View::make('dusun.new', $data);
	}
	public function postSaveNew(){
		$dusun =new Dusun();
		$dusun->nama = Input::get('nama');
		if($dusun->save()){
			return Redirect::to('dusun')->with('succes', ' Anda Berhasil Menambah Dusun');
		}else{
			return Redirect::to('dusun')->with('error', 'Anda Gagal Menympan Data Dusun');
		}
	}
	public function getEdit($id){
		$dusun = Dusun::find($id);
		$data = array(
			'title' =>'Edit Data Dusun',
			'action' => URL::to('/dusun/edit'),
			'dusun' => $dusun,
			);
		return View::make('dusun.new', $data);
	}
	public function postEdit(){
        $dusun = Dusun::find(Input::get('id'));
        $dusun->nama = Input::get('nama');
        if($dusun->save()){
            return Redirect::to('dusun')->with('success', 'pembaruan dusun berhasil disimpan');
        }else{
            return Redirect::to('dusun')->with('error', 'pembaruan dusun gagal disimpan');
        }
    }
	public function getDelete($id){
		$dusun = Dusun::find($id);
		if($dusun->delete()){
			return Redirect::to('dusun')->with('succes', 'Anda Berhasi Menghapus data dusun');
		}else{
			return Redirect::to('dusun')->with('error', 'Anda gagal menghapus data ini');
		
			}
		}

}
