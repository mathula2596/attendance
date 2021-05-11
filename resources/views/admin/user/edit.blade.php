@extends('admin.template')
@section('content')
<div class="content-heading">
    <div>Users</div>
</div>
 
<div class="card card-default">
    <div class="card-header">
        <div class="card-title">Edit user - {{ $user->name }}</div>
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
            {{Form::model($user,['route'=>['user.update',$user],'class'=>'user','method'=>'patch'])}}
                @include('admin.user.form')
                <div class="">
                    <a class="btn btn-default" href="{{ route('user.index') }}"> <i class="ion-ios-arrow-thin-left"></i> Back</a>
                    <button class="btn btn-primary">Update</button>
                </div><!-- form-layout-footer -->
            {{Form::close()}}
        </div>
    </div>
</div>

 
@stop

