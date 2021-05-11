@extends('admin.template')
@section('content')
<div class="content-heading">
    <div>Users</div>
</div>
 
<div class="card card-default card-demo" id="cardChart9">
    <div class="card-header">
        <div class="card-title">Create new user</div>
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
            {{Form::open(['route'=>['user.store'],'class'=>'user'])}}
                @include('admin.user.form')
                <div class="">
                    <a class="btn btn-default" href="{{ route('user.index') }}"> <i class="ion-ios-arrow-thin-left"></i> Back</a>
                    <button class="btn btn-primary">Save</button>
                </div><!-- form-layout-footer -->
            {{Form::close()}}
        </div>
    </div>
</div>
@stop



