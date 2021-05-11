@extends('admin.template')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>User</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>

                <li>
                    <a href="{{ route('user.index') }}">User</a>
                </li>
                <li class="active">
                    <strong>Create</strong>
                </li>
            </ol>
        </div>
       
    </div>

   <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h2>
                            <span class="text-navy">Users </span>
                        </h2>
                    </div>

                    <div class="ibox-content">
                        {{Form::model($user,['route'=>'password.update'])}}
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Old Password</label>
                                        <input id="name" type="password" class="form-control" name="old_password" required autofocus>

                                        @if ($errors->has('old_password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('old_password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="name" class="control-label">New Password</label>
                                        <input id="name" type="password" class="form-control" name="password" required autofocus>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Confirm Password</label>
                                        <input id="name" type="password" class="form-control" name="password_confirmation" required autofocus>

                                        @if ($errors->has('password_con
                                        firmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                            </div>

                        <div class="">
                            <a class="btn btn-default" href="{{ url('/') }}"> <i class="ion-ios-arrow-thin-left"></i> Back</a>
                            <button class="btn btn-primary">Reset</button>
                        </div><!-- form-layout-footer -->
                    {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@stop
