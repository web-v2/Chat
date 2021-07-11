@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<div class="card">
<div class="card-body">

<table class="table" id="categoria">
    <tr>
    <td>
    @foreach ($users as $item)
        @if(Auth::user()->id != $item->id)
        <div class="col-md-8 col-sm-8 col-xs-8">
            <div class="info-box">
                <a href="chat/with/{{$item->id}}">
                <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">{{$item->name}}</span>
                </div><!-- /.info-box-content -->
                </a>
            </div><!-- /.info-box -->
        </div><!-- /.col -->
        @endif
    @endforeach
    </td>
    </tr>
</table>
</div>
</div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
<script>
    /*
    $(document).ready(function() {
        $('#categoria').DataTable({
            "lengthMenu": [[5, 10, 20, 50, -1], [5, 10, 20, 50, "All"]]
        });
    });*/
</script>
@stop

