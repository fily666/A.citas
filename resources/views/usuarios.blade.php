@extends('layouts.abb')

@section('content')
<div class="container">
<div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">user</h1>
          </div>
        </div>
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">usuarios</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="datatable table table-striped table-bordered table-hover dataTable">
                        <thead>
                            <tr role="row">

                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="processTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 16px;">id</th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="processTable" rowspan="1" colspan="1" aria-label="Tipo de proceso: activate to sort column ascending" style="width: 119px;">Nombre</th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="processTable" rowspan="1" colspan="1" aria-label="Unidad sectorial de normalización: activate to sort column ascending" style="width: 251px;">Email</th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="processTable" rowspan="1" colspan="1" aria-label="Nombre del documento: activate to sort column ascending" style="width: 173px;">Fecha</th>

                            </tr>
                        </thead>

                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                            @foreach($user as $userr)
                            <tr>
                                <th scope="row">{{$userr->id}} </th>
                                <td>{{$userr->name}} </td>
                                <td>{{$userr->email}} </td>
                                <td>{{$userr->created_at}} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection