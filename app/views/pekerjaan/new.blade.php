@extends('layouts.main')

@section('css')

@stop

@section('content')
<div class="row">
    <div class="col-xs-6">
        <div class="box">
            <div class="box-header">
                
            </div>
            <div class="box-body">
                <form class="form-horizontal" method="post" action="{{$action}}">
                    @include('layouts.notifikasi')
                    <input type="hidden" name="id" value="{{isset($pekerjaan->id) ? $pekerjaan->id : ''}}"/>
                    <div class="form-group">
                        <label for="nama" class="control-label col-xs-3">Nama Pekerjaan</label>
                        <div class="col-xs-9">
                            <input type="text" name="nama" class="form-control" value="{{isset($pekerjaan->nama) ? $pekerjaan->nama : ''}}"required=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Jenispekerjaan" class="control-label col-xs-3">Jenis Pekerjaan</label>
                        <div class="col-xs-9">
                            <input type="text" name="Jenispekerjaan" class="form-control" value="{{isset($pekerjaan->Jenispekerjaan) ? $pekerjaan->Jenispekerjaan : ''}}"required=""/>
                        </div>
                    </div>
                    
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

