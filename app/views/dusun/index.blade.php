@extends('layouts.main')

@section('css')
 <!-- DATA TABLES -->
{{HTML::style("assets/css/datatables/dataTables.bootstrap.css")}}
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div style="padding: 20px">
                    <a href="{{$new}}" class="btn btn-primary">Tambah Dusun</a>  
                </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                @include('layouts.notifikasi')
                <table {{{ $dusunCount > 0 ? "id='tblDusun'" : '' }}} class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Dusun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($dusunCount > 0)
                            <?php $no = 1;?>
                            @foreach($dusun as $row)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$row->nama}}</td>
                                <td width="100px">
                                    <a href="{{$editUrl.'/'.$row->id}}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                                    <a href="{{$deleteUrl.'/'.$row->id}}" class="btn btn-danger btn-delete"><i class="fa fa-trash-o"></i></a>
                                </td>
                                <?php $no++ ?>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4">Tidak ada data</td>
                            </tr>
                        @endif
                    </tbody>
                    <tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>

@stop

@section('js')
{{HTML::script("assets/js/plugins/datatables/jquery.dataTables.js")}}
{{HTML::script("assets/js/plugins/datatables/dataTables.bootstrap.js")}}
<!-- AdminLTE App -->
{{HTML::script("assets/js/AdminLTE/demo.js")}}
<!-- page script -->
<script type="text/javascript">
    $(document).ready(function() {
        $("#tblDusun").dataTable();
    });
    var btnDelete = $(".btn-delete");
        btnDelete.click(function() {
            console.log("deleted");
            var konfirmasi = confirm("apakah anda yakin ingin menghapus data ini?");
            if (konfirmasi == true) {
                return true;
            } else {
                return false;
            }
        });
</script>
@stop

