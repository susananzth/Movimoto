@extends('layouts.seller-admin')

@section('title', 'Ayuda | Movimoto')

@section('js')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.3.4/tinymce.min.js'></script>
<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
          <div class="container">
              <div class="card shadow">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h4 class="m-0 font-weight-bold text-primary">Ticket # {!! $ticket->slug !!}</h4>
                  </div>
                  <div class="card-body">
                      <h6><strong>Titulo:</strong> {!! $ticket->title !!}</h6>
                      <p><strong>Estado:</strong> {!! $ticket->status ? 'Pendiente' : 'Resuelto' !!}</p>
                      <p><strong>Contenido:</strong> {!! $ticket->content !!}</p>
                      <div class="ml-auto text-right">
                          <a href="#" class="btn btn-primary btn-icon-split">
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
