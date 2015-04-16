@extends('app')

@section('manager')
<li class="active">
    <a href="manager/">Beranda</a>
</li>
<li>
    <a href="manager/edit_menu_makanan">Edit Menu Makanan</a>
</li>
<li>
    <a href="manager/laporan">Laporan</a>
</li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{!! Session::get('manager')->nama !!} <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li>
            <a href="manager/logout">logout</a>
        </li>
    </ul>
</li>
@endsection