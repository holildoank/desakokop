<ul class="sidebar-menu">
    <li class="active">
        <a href="{{URL::to('/')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-bars"></i>
            <span>Data Master</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{URL::to('agama')}}"><i class="fa fa-angle-double-right"></i> Data Jenis Agama</a></li>
            <li><a href="{{URL::to('pendidikan')}}"><i class="fa fa-angle-double-right"></i> Data Jenis Pendidikan</a></li>
            <li><a href="{{URL::to('pekerjaan')}}"><i class="fa fa-angle-double-right"></i> Data Jenis Pekerjaan</a></li>
            <li><a href="{{URL::to('dusun')}}"><i class="fa fa-angle-double-right"></i> Data Dusun</a></li>
        </ul>
    </li>
     <li class="treeview">
        <a href="#">
            <i class="glyphicon-user"></i>
            <span>Data Penduduk</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{URL::to('penduduk')}}"><i class="fa fa-angle-double-right"></i> Data Penduduk</a></li>
            <li><a href="{{URL::to('fungsional')}}"><i class="fa fa-angle-double-right"></i> Laporan Data Penduduk</a></li>
            <li><a href="{{URL::to('struktural')}}"><i class="fa fa-angle-double-right"></i> Input Pemohon KK </a></li>
            <li><a href="{{URL::to('khusus')}}"><i class="fa fa-angle-double-right"></i> Data Pemohon KK</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-times"></i>
            <span>Data Kematian</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{URL::to('golongan')}}"><i class="fa fa-angle-double-right"></i> Input Data Kematian</a></li>
            <li><a href="{{URL::to('fungsional')}}"><i class="fa fa-angle-double-right"></i> Laporan Data Kematian</a></li>
            
        </ul>
    </li>

<!--     <li>
        <a href="{{URL::to('/karyawan')}}">
            <i class="fa fa-users"></i>
            <span>Karyawan</span>
        </a>
    </li>
    <li>
        <a href="{{URL::to('periode-gaji')}}">
            <i class="fa fa-times"></i>
            <span>Periode Gaji</span>
        </a>
    </li>
    <li>
        <a href="{{URL::to('pengaturan-umum')}}">
            <i class="fa fa-cogs"></i>
            <span>Pengaturan Umum</span>
        </a>
    </li> -->

    <!--dropdown menu example-->
    <!--    <li class="treeview">
            <a href="#">
                <i class="fa fa-bar-chart-o"></i>
                <span>Charts</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
            </ul>
        </li>-->
    <!--end dropdown example-->
</ul>

