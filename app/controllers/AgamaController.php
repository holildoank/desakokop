<?php

class AgamaController extends \BaseController {
		public function getIndex(){
		$agama = Agama::all();
		$data = array(
			'title' =>'Agama',
			'new'	=>URL::to('agama/new'),
			'agama' =>$agama,
			'agamaCount'	=>$agama->Count(),
			'deleteUrl'	=>URL::to('agama/delete'),
			'editUrl'	=>URL::to('agama/edit'),
			);
		return View::make('agama.index', $data);
	}
	public function getNew(){
		$data = array(
			'title' => 'Tambah Data Agama',
			'action' => URL::to('/agama/save-new')
			);
		return View::make('agama.new', $data);
	}
	public function postSaveNew(){
		$input = Input::all();
		 $rules = array(
            'nama' => 'required|string:value',
        );
		  $pesan = array(
            'nama.required' => 'Inputan Nama wajib diisi.',
        );
        $validasi = Validator::make($input, $rules, $pesan);
        //jika tidak valid redirect kembali ke halaman create
        if ($validasi->fails()) {
            # Kembali kehalaman yang sama dengan pesan error
            return Redirect::back()->withErrors($validasi)->withInput();
        } else {
		$agama =new Agama();
		$agama->nama = Input::get('nama');
		if($agama->save()){
			return Redirect::to('agama')->with('success', ' Anda Berhasil Menambah agama');
		}else{
			return Redirect::to('agama')->with('error', 'Anda Gagal Menympan Data agama');
		}
	}
}
	public function getEdit($id){
		$agama = Agama::find($id);
		$data = array(
			'title' =>'Edit Data Dusun',
			'action' => URL::to('/agama/edit'),
			'agama' => $agama,
			);
		return View::make('agama.new', $data);
	}
	public function postEdit(){
        $agama = Agama::find(Input::get('id'));
        $agama->nama = Input::get('nama');
        if($agama->save()){
            return Redirect::to('agama')->with('success', 'pembaruan Agama berhasil disimpan');
        }else{
            return Redirect::to('agama')->with('error', 'pembaruan Agama gagal disimpan');
        }
    }
	public function getDelete($id){
		$agama = Agama::find($id);
		if($agama->delete()){
			return Redirect::to('agama')->with('succes', 'Anda Berhasi Menghapus data Agama');
		}else{
			return Redirect::to('agama')->with('error', 'Anda gagal menghapus data ini');
		
			}
		}

	

}
