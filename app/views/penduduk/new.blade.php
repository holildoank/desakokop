@extends('layouts.main')

@section('css')
<style>
    .garis{
        margin-top: 0;
        margin-bottom: 10px;
    }
</style>
@stop

@section('content')
<div class="row">
    <div class="col-xs-9">
        <div class="box">
            <div class="box-header">
                
            </div>
            <div class="box-body">
                <form class="form-horizontal" method="post" action="{{$action}}">
                    @include('layouts.notifikasi')
                    <input type="hidden" name="id" value="{{isset($penduduk->id) ? $penduduk->id : ''}}"/>
                    <div class="box-header">
                        <h3 class="box-title">Kepala Keluarga & NO KK</h3>
                    </div>
                    <hr class="garis">
                    <div class="form-group">
                        <label for="nokk" class="control-label col-xs-4">NO KK</label>
                        <div class="col-xs-8">
                            <input type="text" name="nokk" class="form-control" value="{{isset($penduduk->nokk) ? $penduduk->nokk : ''}}"required=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kepala_keluarga" class="control-label col-xs-4">Inputkan Kepala Keluarga</label>
                        <div class="col-xs-8">
                            <input type="text" name="kepala_keluarga" class="form-control" value="{{isset($penduduk->kepala_keluarga) ? $penduduk->kepala_keluarga : ''}}"required=""/>
                        </div>
                    </div>
                    <hr class="garis">
                    <div class="box-header">
                        <h3 class="box-title">Anggota Keluarga</h3>
                    </div>
                    <hr class="garis">
                    <div class="form-group">
                        <label for="nama" class="control-label col-xs-4">nama</label>
                        <div class="col-xs-8">
                            <input type="text" name="nama" class="form-control" value="{{isset($penduduk->nama) ? $penduduk->nama : ''}}"required=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nik" class="control-label col-xs-4">NIK</label>
                        <div class="col-xs-8">
                            <input type="text" name="nik" class="form-control" value="{{isset($penduduk->nik) ? $penduduk->nik : ''}}"required=""/>
                        </div>
                    </div>
                  
					<div class="form-group">
                        <label for="nama" class="control-label col-xs-4">jenis Kelamin</label>
                        <div class="col-xs-4">  
                       <select class="form-control" name="jenisklamin" value="" id="jenisklamin" required>
                         <option value="">Pilih jenis Kelamin</option>
                         <option value="laki_laki">Laki-laki</option>
                         <option value="perempuan">Perempuan</option>
                         </select>
					   </div>
                    </div>
                    <div class="form-group">
                        <label for="tempatlahir" class="control-label col-xs-4">Tempat Lahair</label>
                        <div class="col-xs-6">
                            <input type="text" name="tempatlahir" class="form-control" value="{{isset($penduduk->tempatlahir) ? $penduduk->tempatlahir : ''}}"required=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggallahir" class="control-label col-xs-4">tanggallahir</label>
                        <div class="col-xs-6">
                            <input type="date" name="tanggallahir" class="form-control" value="{{isset($penduduk->tanggallahir) ? $penduduk->tanggallahir : ''}}"required=""/>
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="id_agama" class="control-label col-xs-4">Pilih agama</label>
                        <div class="col-xs-6">
                           {{ Form::select  ('id_agama', array(''=>'--pilih--agama--')+Agama::lists('nama','id'), null, array(
                           'id'=>'id','placeholder', 'class'=>'form-control')) }}
                        </div>
                    </div>
                        <div class="form-group">
                        <label for="id_pendidikan" class="control-label col-xs-4">Pilih Pendidikan Terahir</label>
                        <div class="col-xs-6">
                           {{ Form::select  ('id_pendidikan', array(''=>'--pilih--pendidikan--')+Pendidikan::lists('jenjangpendidikan','id'), null, array(
                           'id'=>'id','placeholder', 'class'=>'form-control')) }}
                        </div>
                    </div>
                        <div class="form-group">
                        <label for="pekerjaan" class="control-label col-xs-4">Pilih pekerjaan</label>
                        <div class="col-xs-6">
                           {{ Form::select  ('id_pekerjaan', array(''=>'--pilih--pekerjaan--')+Pekerjaan::lists('Jenispekerjaan','id'), null, array(
                           'id'=>'id','placeholder', 'class'=>'form-control')) }}
                        </div>
                    </div>
                        <div class="form-group">
                        <label for="dusun" class="control-label col-xs-4">Pilih Dusun</label>
                        <div class="col-xs-6">
                           {{ Form::select  ('id_dusun', array(''=>'--pilih--Dusun--')+Dusun::lists('nama','id'), null, array(
                           'id'=>'id','placeholder', 'class'=>'form-control')) }}
                        </div>
                    </div>
                    <hr class="garis">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="submit" class="btn btn-primary pull-right" value="Simpan"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop

@section('js')

@stop

