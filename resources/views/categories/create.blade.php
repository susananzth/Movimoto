@extends('layouts.seller-admin')

@section('title', 'Nueva categoría | Movimoto')

@section('content')
    <div class="container">
        <div class="card shadow">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <h4 class="m-0 font-weight-bold text-primary">Agregar una categoría</h4>
            </div>
            <div class="card-body">
                <form class="row" method="POST" action="{{ url('enviar-categoria') }}">
                  @if (session('status')) <!-- Si la categoría se creo correctamente, mostrará el mensaje del controlador -->
                      <div class="alert alert-success alert-icon" role="alert">
                          <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">×</span>
                          </button>
                          <div class="alert-icon-aside">
                              <i class="fas fa-check"></i>
                          </div>
                          <div class="alert-icon-content">
                              <h6 class="alert-heading">{{ session('status') }}</h6>
                          </div>
                      </div>
                  @endif
                  @csrf   <!-- Solicitud de token para enviar el form -->
                    <div class="form-group col-sm-12">
                        <label for="name">Nombre de la categoría:</label>
                        <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="my-2"></div>
                    <div class="ml-auto text-right">
                        <button type="submit" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                  <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Agregar</span>
                        </button>
                    </div>
                </form>
            </div>
         </div>
    </div>
@endsection
