@extends('layouts.seller-admin')

@section('title', 'Editar categoría | Movimoto')

@section('content')
    <div class="container">
        <div class="card shadow">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <h4 class="m-0 font-weight-bold text-primary">Editar categoría: {{ $category->name }}</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ action('CategoriesController@update', $category->id) }}">
                    @if (session('status'))  <!-- Si la categoría se actualizó correctamente, mostrará el mensaje del controlador -->
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
                    @method('PUT')
                    <div class="form-group">
                        <label for="content">Cambiar nombre:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $category->name) }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="status">Cambiar estado:</label>
                        <!--
                        <select class="form-control width-auto" id="status" name="status">
                         {{ $category->status == 0 ? 'active' : '' }}

                            <option value="0" class="" >Pendiente</option>
                            <option value="1">Completado</option>
                        </select>-->
                    </div>

                    <div class="my-2"></div>
                    <div class="ml-auto ">
                        <a href="{{ url('/ver-categoria', $category->id) }}" class="btn btn-secondary btn-icon-split text-left">
                            <span class="icon text-white-50">
                                  <i class="fas fa-arrow-left"></i>
                            </span>
                            <span class="text">Regresar</span>
                        </a>
                        <button type="submit" class="btn btn-primary btn-icon-split float-right">
                            <span class="icon text-white-50">
                                  <i class="far fa-save"></i>
                            </span>
                            <span class="text">Actualizar</span>
                        </button>
                    </div>
                </form>
            </div>
         </div>
    </div>
@endsection
