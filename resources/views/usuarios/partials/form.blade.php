<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        <!-- <label for="email_address_2">Email Address</label> -->
        {{Form::label('name','Nombre')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <!-- <input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address">
                 -->
                 {{Form::text('name',null,['class'=>'form-control'])}}
            </div>
        </div>
    </div>
</div>


<div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        <!-- <label for="email_address_2">Email Address</label> -->
        {{Form::label('email','Correo')}}
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <!-- <input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address">
                 -->
                 {{Form::text('email',null,['class'=>'form-control ', 'id'=>'email_address_2'])}}
            </div>
        </div>
    </div>
</div>


<div class="row clearfix form-group">
  <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
    <ul >
        @foreach($roles as $role)
           <li>
               <label>
                {{ Form::checkbox('roles[]', $role->id,null, ['class'=>'filled-in','id'=>'remember_me_3']) }}
                {{ $role->name }}
                <em>({{ $role->description ?: 'Sin Descripcion'}})</em>
                </label>
           </li>
        @endforeach
    </ul>
  </div>
</div>


<!-- <div class="row clearfix">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
        <label for="password_2">Password</label>
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <input type="password" id="password_2" class="form-control" placeholder="Enter your password">
            </div>
        </div>
    </div>
</div> -->

<div class="row clearfix">
    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
        <a href="{{route('users.index')}}"><button type="button"  class="btn btn-primary m-t-15 waves-effect">VOLVER</button></a>
        <!-- <button type="button" class="btn btn-success m-t-15 waves-effect bg-green pull-right">GUARDAR</button> -->
        {{Form::submit('Guardar', ['class'=>'btn btn-success m-t-15 waves-effect bg-green pull-right'])}}
    </div>
</div>