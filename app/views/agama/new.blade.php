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
                    <input type="hidden" name="id" value="{{isset($agama->id) ? $agama->id : ''}}"/>
                    <div class="form-group">
                        <label for="nama" class="control-label col-xs-3">Agama</label>
                        <div class="col-xs-9">
                        @if($errors->has('nama'))
                            {{ $errors->first('nama') }}
                            @endif 
                            <input type="text" name="nama" class="form-control" value="{{isset($agama->nama) ? $agama->nama : ''}}"/>
                         
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

