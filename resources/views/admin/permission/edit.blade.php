@extends('admin.template')
@section('content')
<div class="content-heading">
    <div>Permission</div>
</div>
 
<div class="card card-default card-demo" id="cardChart9">
    <div class="card-header">
        <div class="card-title">Edit permission - {{$permission->display_name }}</div>
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
              {{Form::model($permission,['route'=>['permission.update',$permission],'class'=>'permission','method'=>'patch'])}}
                @include('admin.permission.form')
                <div class="">
                    <a class="btn btn-secondary" href="{{ route('permission.index') }}"> <i class="ion-ios-arrow-thin-left"></i> Back</a>
                    <button class="btn btn-primary">Update</button>
                </div><!-- form-layout-footer -->
            {{Form::close()}}
        </div>
    </div>
</div>
   
@stop

