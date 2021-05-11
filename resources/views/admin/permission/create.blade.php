@extends('admin.template')
@section('content')
 <div class="content-heading">
    <div>Permission</div>
</div>
 
<div class="card card-default card-demo" id="cardChart9">
    <div class="card-header">
        <div class="card-title">Create new permission</div>
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
             {{Form::open(['route'=>['permission.store'],'class'=>'permission'])}}
                @include('admin.permission.form')
                <div class="">
                    <a class="btn btn-secondary" href="{{ route('permission.index') }}"> <i class="ion-ios-arrow-thin-left"></i> Back</a>
                    <button class="btn btn-primary">Save</button>
                </div><!-- form-layout-footer -->
            {{Form::close()}}
        </div>
    </div>
</div>

@stop

