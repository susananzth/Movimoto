@extends('layouts.seller-admin')

@section('title', 'Ver categoría | Movimoto')

@section('content')
          <div class="container">
              <div class="card shadow">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h4 class="m-0 font-weight-bold text-primary">Categoría: {{ $category->name }}</h4>
                  </div>
                  <div class="card-body">
                      <p><strong>Nombre:</strong> {{ $category->name }}</p>
                      <p><strong>Estado:</strong> {{ $category->status ? 'Activo' : 'Inactivo' }}</p>
                      <p><strong>Creado por:</strong> {{ $category->modified_by }}</p>
                      <p><strong>Fecha de creación:</strong> {{ $category->created_at }}</p>
                      <p><strong>Fecha de modificación:</strong> {{ $category->updated_at }}</p>
                      <div class="ml-auto">
                          <a href="{{ url('/ver-categorias') }}" class="btn btn-secondary btn-icon-split text-left">
                              <span class="icon text-white-50">
                                    <i class="fas fa-arrow-left"></i>
                              </span>
                              <span class="text">Regresar</span>
                          </a>
                          <a href="{{ action('CategoriesController@edit', $category->id) }}" class="btn btn-primary btn-icon-split float-right">
                              <span class="icon text-white-50">
                                    <i class="far fa-edit"></i>
                              </span>
                              <span class="text">Editar</span>
                          </a>
                      </div>
                  </div>
               </div>
          </div>
@endsection
