@extends('layouts.seller-admin')

@section('title', 'Listado de categorías | Movimoto')

@section('css')
<!-- Estilos de esta vista -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
      <div class="container-fluid">
          <!-- Cabecera de página -->
          <h1 class="h3 mb-2 text-gray-800">Listado de artículos</h1>
          <p class="mb-4">En esta sección se listan los artículos registrados por los usuarios.</p>
          </a><a target="_blank" href="#">Link a tutoriales y/o procesos</a></p>

          <!-- Tabla de Artículos -->
          <div class="card shadow mb-4">

              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Artículos</h6>
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
                                      </select> artículos
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
                                          <th>Nombre</th>
                                          <th>F. creación</th>
                                          <th>Creado por</th>
                                          <th>Estado</th>
                                          <th>Acción</th>
                                      </tr>
                                  </thead>
                                  <tfoot> <!-- Footer de la tabla -->
                                      <tr>
                                          <th>Nombre</th>
                                          <th>F. creación</th>
                                          <th>Creado por</th>
                                          <th>Estado</th>
                                          <th>Acción</th>
                                      </tr>
                                  </tfoot>
                                  <tbody> <!-- Registros de la tabla -->
                                      @forelse($items as $item) <!-- Buble 'por cada' para mostrar todos los registros -->
                                        <tr>
                                          <td>{{ $item->name }}</td>
                                          <td>{{ $item->created_at }}</td>
                                          <td>{{ $item->modified_by }}</td>
                                          <!-- Purificar HTML -->
                                          <td>{!! $item->status ? '<div class="badge badge-success badge-pill">Activo</div>' : '<div class="badge badge-danger badge-pill">Inactivo</div>' !!}</td>
                                          <td>
                                              <div class="display-in-block">
                                                  <a href="{{ action('ItemsController@show', $item->id) }}" class="btn btn-primary btn-icon-split">
                                                      <span class="icon text-white-50">
                                                            <i class="far fa-eye"></i>
                                                      </span>
                                                      <span class="text">Ver</span>
                                                  </a>
                                              </div>
                                          </td>
                                        </tr>
                                        @empty <!-- Si no hay registros, mostrará el siguiente mensaje -->
                                          <p><b>No hay artículos</b></p>
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
