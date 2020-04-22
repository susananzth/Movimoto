@extends('layouts.seller-admin')

@section('title', 'Editar ticket | Movimoto')

@section('js')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.3.4/tinymce.min.js'></script>
@endsection
<!--  url("notas/{$note->id}")  -->
@section('content')
    <div class="container">
        <div class="card shadow">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <h4 class="m-0 font-weight-bold text-primary">Editar ticket # {{ $ticket->slug }}</h4>
            </div>
            <div class="card-body">
                <h6><strong>Titulo:</strong> {{ $ticket->title }}</h6>
                <p><strong>Contenido:</strong> {{ $ticket->content }}</p>
                <form method="POST" action="{{ action('TicketsController@update', $ticket->slug) }}">
                    @if (session('status'))
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
                    <div class="form-group col-sm-12">
                        <label for="content">Descripción o contenido</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" id="content" rows="5" name="content">{{ old('content', $ticket->content) }}</textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <label for="status">Estado del ticket</label>

                    <select class="form-control width-auto" id="status" name="status">
                      <!-- {{ $ticket->status == 0 ? 'active' : '' }} -->

                        <option value="0" class="" >Pendiente</option>
                        <option value="1">Completado</option>
                    </select>
                    <div class="my-2"></div>
                    <div class="ml-auto ">
                        <a href="#" class="btn btn-secondary btn-icon-split text-left">
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
