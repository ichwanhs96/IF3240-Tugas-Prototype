@extends('Manager.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <br><br><br>
        <div class="panel panel-default">
            <div class="panel-heading">List Menu Makanan</div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Jenis</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                        <tr>
                            <th scope="row">{{ $menu->id }}</th>
                            <td>{{ $menu->nama }}</td>
                            <td>{{ $menu->harga }}</td>
                            <td>{{ $menu->jenis }}</td>
                            <td> <a href="{{URL::route('manager.editMenu', $menu->id)}}" class="glyphicon glyphicon-cog"/></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div> <a href="{{URL::route('manager.tambahMenu')}}" class="text-center btn btn-success ">Tambah Menu </a> </div>
            </div>
        </div>
    </div>
</div>
@endsection