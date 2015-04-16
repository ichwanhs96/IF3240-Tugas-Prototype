@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br><br>
            <div class="panel panel-default">
                <div class="panel-heading">Pesanan #1</div>
                <div class="panel-body">
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
                            <tr>
                                <th scope="row">1</th>
                                <td>Ayam</td>
                                <td>2</td>
                                <td>1000</td>
                                <td>2000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
