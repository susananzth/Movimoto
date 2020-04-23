@extends('layouts.seller-admin')

@section('title', 'Listado de tickets | Movimoto')

@section('css')
<!-- Estilos de esta vista -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
      <div class="container-fluid">
          <!-- Cabecera de página -->
          <h1 class="h3 mb-2 text-gray-800">Tickets de atención y soporte</h1>
          <p class="mb-4">Descripción o instrucciones <a target="_blank" href="#">Link a tutoriales</a>.</p>

          <!-- Tabla de Tickets -->
          <div class="card shadow mb-4">

              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tickets</h6>
              </div>

              <div class="card-body">

                <div class="table-responsive">

                  <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                      <div class="row">
                          <div class="col-sm-12 col-md-6"> <!-- Lista de cantidad de registros a mostrar de la tabla de la tabla -->
                              <div class="dataTables_length" id="dataTable_length">
                                  <label>Mostrar
                                      <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                      </select> tickets
                                  </label>
                              </div>
                          </div>
                          <div class="col-sm-12 col-md-6"> <!-- Botón de búsqueda de la tabla de la tabla -->
                              <div id="dataTable_filter" class="dataTables_filter">
                                  <label>Buscar:
                                      <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                                  </label>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-12">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <thead> <!-- Cabecera de la tabla -->
                                    <tr>
                                      <th>ID</th>
                                      <th>Título</th>
                                      <th>Estado</th>
                                      <th>Acción</th>
                                    </tr>
                                  </thead>
                                  <tfoot> <!-- Footer de la tabla -->
                                    <tr>
                                      <th>ID</th>
                                      <th>Título</th>
                                      <th>Estado</th>
                                      <th>Acción</th>
                                    </tr>
                                  </tfoot>
                                  <tbody> <!-- Registros de la tabla -->
                                      @forelse($tickets as $ticket) <!-- Buble 'por cada' para mostrar todos los registros -->
                                        <tr>
                                          <td>{{ $ticket->slug }}</td>
                                          <td>{{ $ticket->title }}</td>
                                          <!-- Purificar HTML -->
                                          <td>{!! $ticket->status ? '<div class="badge badge-warning badge-pill">Pendiente</div>' : '<div class="badge badge-success badge-pill">Resuelto</div>' !!}</td>
                                          <td>
                                              <div class="display-in-block">
                                                  <a href="{{ action('TicketsController@show', $ticket->slug) }}" class="btn btn-primary btn-icon-split">
                                                      <span class="icon text-white-50">
                                                            <i class="far fa-eye"></i>
                                                      </span>
                                                      <span class="text">Ver</span>
                                                  </a>
                                              </div>
                                          </td>
                                        </tr>

                                      @empty <!-- Si no hay registros, mostrará el siguiente mensaje -->
                                        <p>No hay tickets</p>
                                      @endforelse
                                  </tbody>

                              </table>
                          </div>
                      </div>
                  </div>

              </div>

          </div>

      </div>
@endsection
