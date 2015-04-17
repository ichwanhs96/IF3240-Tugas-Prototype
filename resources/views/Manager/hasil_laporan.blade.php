@extends('Manager.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <br><br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Laporan</div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Jenis</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php 
                    		$iterator = 1;
                    	?>
                        @foreach ($menus as $menu)
                        <tr>
                            <th scope="row">{{ $menu->id }}</th>
                            <td>{{ $menu->nama }}</td>
                            <td>{{ $menu->harga }}</td>
                            <td>{{ $menu->jenis }}</td>
                            <td>{{ $laporans[$iterator]['jumlah'] }}</td>
                        </tr>
                        <?php 
                        	$iterator++;
                        ?>
                        @endforeach
                    </tbody>
                </table>
                <div> <strong> Jumlah Total Pesanan = {{count($pesanans)}} </strong> </div> <br>
                <div> <a href="{{URL::route('manager.tambahMenu')}}" class="text-center btn btn-success ">Tambah Menu </a> </div>
            </div>
        </div>
    </div>
</div>

@endsection