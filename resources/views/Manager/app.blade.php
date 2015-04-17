@extends('app')

@section('manager')
<li>
    <a href="{{ URL::route('manager.home') }}">Beranda</a>
</li>
<li>
    <a href="{{ URL::route('manager.list_menu_makanan') }}">Edit Menu Makanan</a>
</li>
<li>
    <a href="{{ URL::route('manager.laporan') }}">Laporan</a>
</li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{!! Session::get('manager')->nama !!} <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li>
            <a href="{{ URL::route('manager.logout') }}">logout</a>
        </li>
    </ul>
</li>
@endsection