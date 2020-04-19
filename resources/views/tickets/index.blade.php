@extends('layouts.seller-admin')

@section('title', 'Ver tickets | Movimoto')

@section('js')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.3.4/tinymce.min.js'></script>
<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
      <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tickets</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              @if ($tickets->isEmpty())
                <p>No hay tickets</p>
              @else
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Estado</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Estado</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach($tickets as ticket)
                    <tr>
                      <td>{!! $ticket->id !!}</td>
                      <td>{!! $ticket->title !!}</td>
                      <td>{!! $ticket->status ? 'Pendiente' : 'Resuelto' !!}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
@endsection
