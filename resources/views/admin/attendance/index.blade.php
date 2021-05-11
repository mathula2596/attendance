@extends('admin.template')
@section('title','Attendance')
@section('css')
@stop
@section('content')
<div class="content-heading">
    <div>Attendance</div>
</div>
 <div class="row">
    <form action="" method="post">
        @csrf
        <div class="col-sm-6" style="text-align: center;">
            <button class="btn btn-primary" id="in">In</button>
        </div>

        <div class="col-sm-6" style="text-align: center;">
            <button class="btn btn-danger" id="out">Out</button>
        </div>
    </form>
    
</div>
<br>
<div class="card card-default card-demo" id="cardChart9">
    <div class="card-header">
        <div class="float-right">
        </div>
        <div class="card-title">Attendance</div>
    </div>
    <div class="card-wrapper collapse show">
        <div class="card-body">
            
            <div class="table-responsive">
                <table datatable  class="table display nowrap">
                    <thead>
                            <tr>
                            <th>Date</th>
                            <th>In</th>
                            <th>Out</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($attendances))
                                
                                @foreach ($attendances as $attendance)
                                    <tr>
                                        <td>
                                            {{ $attendance->date }}
                                        </td>
                                        <td>
                                            {{ $attendance->in }}
                                        </td>
                                         <td>
                                            {{ $attendance->out }}
                                        </td>
                                    </tr>
                                @endforeach 
                            @endif
                        </tbody>
                
                    </table>
            </div>
        </div>
    </div>
</div>

@push('script')
<script>
  $(document).ready(function(){
    // datatableJs();
    $("#in").click(function (e) { 
        e.preventDefault();
        var data = "in";
        var _token = "{{ csrf_token() }}";
        $.ajax({
            url: '{{ route("attendance.store") }}',
            type: 'POST',
            data: {
                data:data,
                _token:_token,
            },
            success:function(res){
                console.log(res);
                location.reload();
            }
        })
        
    });
    $("#out").click(function (e) { 
        e.preventDefault();
        var data = "out";
        var _token = "{{ csrf_token() }}";
        $.ajax({
            url: '{{ route("attendance.store") }}',
            type: 'POST',
            data: {
                data:data,
                _token:_token,
            },
            success:function(res){
                console.log(res);
                location.reload();

            }
        })
        
    });
  });
</script>
@endpush

@stop