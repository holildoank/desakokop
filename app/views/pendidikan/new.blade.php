@extends('layouts.main')

@section('css')

@stop

@section('content')
<div class="row">
    <div class="col-xs-8">
        <div class="box">
            <div class="box-header">
                
            </div>
            <div class="box-body">
                <form class="form-horizontal" method="post" action="{{$action}}">
                    @include('layouts.notifikasi')
                    <input type="hidden" name="id" value="{{isset($pendidikan->id) ? $pendidikan->id : ''}}"/>
                    <div class="form-group">
                        <label for="jenjangpendidikan" class="control-label col-xs-4">Jenjang Pendidikan</label>
                        <div class="col-xs-6">
                            <input type="text" name="jenjangpendidikan" class="form-control" value="{{isset($pendidikan->jenjangpendidikan) ? $pendidikan->jenjangpendidikan : ''}}"required=""/>
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

