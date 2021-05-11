<div class="row">
    <div class="col-sm-6">
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="control-label">Name</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ isset($user) ? $user->name : '' }}" required autofocus>

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="control-label">E-Mail Address</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ isset($user) ? $user->email : '' }}" required>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

   
    
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
            <label for="phone" class="control-label">Phone No</label>
            <input id="phone" type="number" class="form-control" name="phone" value="{{ isset($user) ? $user->phone : '' }}" >

            @if ($errors->has('phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
            <label for="date" class="control-label">E-Mail Address</label>
           
            <input id="date" type="date" class="form-control" name="date" value="{{ isset($user) ? date('Y-m-d',strtotime($user->date)) : date('Y-m-d') }}" >
            @if ($errors->has('date'))
                <span class="help-block">
                    <strong>{{ $errors->first('date') }}</strong>
                </span>
            @endif
        </div>
    </div>

   
    
</div>
<div class="form-group @if ($errors->has('roles')) has-error @endif">
    {!! Form::label('roles[]', 'Roles for this user') !!}
    {!! Form::select('roles[]', $roles, isset($user) ? $user->roles->pluck('id')->toArray() : null,  ['class' => 'form-control select', 'multiple']) !!}
    @if ($errors->has('roles')) <p class="help-block">{{ $errors->first('roles') }}</p> @endif
</div>


<div class="row">
    <div class="col-sm-6">
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="control-label">Password</label>
            <input id="password" type="password" class="form-control" name="password">
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="password-confirm" class="control-label">Confirm Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
        </div>
    </div>

</div>






