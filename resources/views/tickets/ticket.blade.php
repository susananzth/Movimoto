@extends('layouts.seller-admin')

@section('title', 'Nuevo artículo | Movimoto')

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
                <form class="row">
                    <div class="form-group col-sm-12">
                        <label for="ticketTitle">Título o asunto</label>
                        <input class="form-control" id="ticketTitle" type="text">
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="ticketDescript">Descripción o contenido</label>
                        <textarea class="form-control" id="ticketDescript" rows="5"></textarea>
                    </div>
                </form>
                <div class="my-2"></div>
                <div class="ml-auto text-right">
                    <a href="#" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                              <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Enviar</span>
                    </a>
                </div>
            </div>
         </div>
    </div>
@endsection
