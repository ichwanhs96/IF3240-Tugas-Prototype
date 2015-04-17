@extends('Manager.app')

@section('content')
<br> <br>
<div class="container">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Tambah Menu Makanan</div>
            </div>     

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                
                {!! Form::open(['route' => 'manager.updateMenu', 'id' => 'loginform', 'class' => 'form-horizontal', 'role' => 'form']) !!}    
                    {!! Form::label('nama menu:') !!}    
                    <div style="margin-bottom: 25px" class="input-group">    
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                        {!! Form::text('nama', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                    
                    {!! Form::label('jenis menu:') !!}    
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                        {!! Form::select('jenis', ['0' => 'Makanan', '1' => 'Minuman', '2' => 'Lain'], null, ['class' => 'form-control', 'required']) !!}
                    </div>

                    {!! Form::label('harga menu:') !!}
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                        {!! Form::text('harga', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                    {!! Form::hidden('id', '-1') !!}
                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            {!! Form::submit('Update Menu Makanan', ['class' => 'btn btn-success']) !!}
                        </div>
                    </div>
                </form>
                {!! Form::close() !!}     
            </div>                     
        </div>  
    </div>
</div>

@endsection