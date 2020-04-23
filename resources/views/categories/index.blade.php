@extends('layouts.seller-admin')

@section('title', 'Categorías | Movimoto')

@section('content')
      <div class="container">
          <div class="row">
              <div class="col-md-6 col-sm-12 mb-4">
                  <div class="card lift h-100">
                      <a href="{{ url('/ver-categorias') }}" class="text-decoration-none">
                          <div class="card-body text-center">
                              <div class="card-text">
                                <i class="fas fa-list rem6"></i>
                              </div>
                          </div>
                          <div class="card-footer">
                              <div class="post-preview-meta-details">
                                  <h5 class="text-center">Ver todas las categorías</h5>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="col-md-6 col-sm-12 mb-4">
                  <div class="card lift h-100">
                      <a href="{{ url('/nueva-categoria') }}" class="text-decoration-none">
                          <div class="card-body text-center">
                              <div class="card-text">
                                <i class="far fa-plus-square rem6"></i>
                              </div>
                          </div>
                          <div class="card-footer">
                              <div class="post-preview-meta-details">
                                  <h5 class="text-center">Crear una categoría</h5>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
      </div>
@endsection
