@extends('layouts.seller-admin')

@section('title', 'Nuevo ticket | Movimoto')

@section('js')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.3.4/tinymce.min.js'></script>
@endsection

@section('content')
    <div class="container">
        <div class="card shadow">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <h4 class="m-0 font-weight-bold text-primary">Enviar un Ticket de soporte</h4>
            </div>
            <div class="card-body">
                <form class="row" method="POST" action="{{ url('enviar-ticket') }}">
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
                    <div class="form-group col-sm-12">
                        <label for="title">Título o asunto</label>
                        <input class="form-control @error('title') is-invalid @enderror" id="title" type="text" name="title">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="content">Descripción o contenido</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" id="content" rows="5" name="content"></textarea>
                        @error('content')
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
                            <span class="text">Enviar</span>
                        </button>
                    </div>
                </form>
            </div>
         </div>
    </div>
@endsection
