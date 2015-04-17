@extends('app')

@section('content')
<br> <br>
<div class="container">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Manager Login</div>
            </div>     

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                
                {!! Form::open(['route' => 'manager.login', 'id' => 'loginform', 'class' => 'form-horizontal', 'role' => 'form']) !!}    
                            
                    <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                {!! Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'username', 'required']) !!}
                            </div>
                        
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'password', 'required']) !!}
                    </div>


                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            {!! Form::submit('login', ['class' => 'btn btn-success']) !!}
                        </div>
                    </div>
                </form>
                {!! Form::close() !!}     
            </div>                     
        </div>  
    </div>
</div>

@endsection