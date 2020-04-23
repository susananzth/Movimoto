@extends('layouts.seller-admin')

@section('title', 'Artículos | Movimoto')

@section('content')
      <div class="container">
          <div class="row">
              <div class="col-md-6 col-sm-12 mb-4">
                  <div class="card lift h-100">
                      <a href="{{ url('/ver-articulos') }}" class="text-decoration-none">
                          <div class="card-body text-center">
                              <div class="card-text">
                                <i class="fas fa-boxes rem6"></i>
                              </div>
                          </div>
                          <div class="card-footer">
                              <div class="post-preview-meta-details">
                                  <h5 class="text-center">Ver todas los artículos</h5>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="col-md-6 col-sm-12 mb-4">
                  <div class="card lift h-100">
                      <a href="{{ url('/nuevo-articulo') }}" class="text-decoration-none">
                          <div class="card-body text-center">
                              <div class="card-text">
                                <i class="far fa-plus-square rem6"></i>
                              </div>
                          </div>
                          <div class="card-footer">
                              <div class="post-preview-meta-details">
                                  <h5 class="text-center">Agregar un artículo</h5>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
      </div>
@endsection
