@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br><br>
            <div class="panel panel-default">
                <div class="panel-heading">Pesanan #1</div>
                <div class="panel-body">
                    {!! Form::open( ['route'=>['pesanan.add',$id],'method'=>'post','onsubmit'=>'return addPesanan()','id'=>'form_pesanan','class'=>'form-inline'] ) !!}

                    <div class="form-group">
                        <label class="control-label" for="menu_list">Menu : </label>
                        <select class="form-control" id="menu_list" name="menu_list">
                            @foreach ($menu as $menuItem)
                                <option value="{{$menuItem->id}}">{{$menuItem->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="jumlah">Jumlah : </label>
                        <input  type="number" class="form-control" name="jumlah" id="jumlah"  required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="text-center btn btn-success ">Submit</button>
                    </div>
                    {!! Form::close() !!}
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Menu</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Subtotal Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesanan as $pesananItem)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $pesananItem->menu->nama }}</td>
                                <td>{{ $pesananItem->jumlah }}</td>
                                <td>{{ $pesananItem->menu->harga }}</td>
                                <td>{{ $pesananItem->menu->harga * $pesananItem->jumlah }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function addPesanan() {
        //.....
        //show some spinner etc to indicate operation in progress
        //.....
        $.post(
            $( this ).prop( 'action' ),
            {
                "_token": $( this ).find( 'input[name=_token]' ).val(),
                "menu": $( '#menu_list' ).val(),
                "jumlah": $( '#jumlah' ).val()
            },
            function( data ) {
                //do something with data/response returned by server
            },
            'json'
        );

        //.....
        //do anything else you might want to do
        //.....

        //prevent the form from actually submitting in browser
        return false;
    }
</script>
@endsection
