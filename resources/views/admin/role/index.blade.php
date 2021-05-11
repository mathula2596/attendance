@extends('admin.template')

@section('content')
<div class="content-heading">
    <div>Roles</div>
</div>
 
<div class="card card-default card-demo" id="cardChart9">
    <div class="card-header">
        <div class="float-right">
            @can('add_role')
                <a href="#" class="btn btn-info btn-sm"  title="Add new role" data-toggle="modal" data-target="#roleModal"><i class="fa fa-plus"></i> New role</a>
            @endcan
        </div>
        <div class="card-title">List of roles</div>
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
            <div class="table-responsive">
                <table datatable  class="table display nowrap customer-table" style="font-size:15px">
                    <thead>
                        <tr>
                            <th>Role</th>
                            <th>Guard</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>
                                    @can('edit_role')
                                        <a href="{{route('role.edit',$role)}}" class="">
                                    @endcan
                                        {{$role->name}}
                                    @can('edit_role')
                                        </a>
                                    @endcan
                                </td>
                                <td>{{$role->guard_name}}</td>
                            </tr>
                        @endforeach
                    </tbody>
            
                </table>
            </div>
        </div>
    </div>
</div>
   
<div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel" style="z-index:1000">
    <div class="modal-dialog" role="document">
        {!! Form::open(['method' => 'post']) !!}

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <!-- name Form Input -->
                <div class="form-group @if ($errors->has('name')) has-error @endif">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Role Name']) !!}
                    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                <!-- Submit Form Button -->
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>


@stop

