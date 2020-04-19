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
          <div class="row">
              <div class="col-md-6 col-sm-12 mb-4">
                  <div class="card lift h-100">
                      <a href="{{ url('/ver-tickets') }}" class="text-decoration-none">
                          <div class="card-body text-center">
                              <div class="card-text">
                                <i class="fas fa-ticket-alt rem6"></i>
                              </div>
                          </div>
                          <div class="card-footer">
                              <div class="post-preview-meta-details">
                                  <h5 class="text-center">Ver tickets de soporte</h5>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="col-md-6 col-sm-12 mb-4">
                  <div class="card lift h-100">
                      <a href="{{ url('/nuevo-ticket') }}" class="text-decoration-none">
                          <div class="card-body text-center">
                              <div class="card-text">
                                <i class="far fa-plus-square rem6"></i>
                              </div>
                          </div>
                          <div class="card-footer">
                              <div class="post-preview-meta-details">
                                  <h5 class="text-center">Crear un tickets de soporte</h5>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="col-md-6 col-sm-12 mb-4">
                  <div class="card lift h-100">
                      <a href="{{ url('/faq') }}" class="text-decoration-none">
                          <div class="card-body text-center">
                              <div class="card-text">
                                <i class="far fa-question-circle rem6"></i>
                              </div>
                          </div>
                          <div class="card-footer">
                              <div class="post-preview-meta-details">
                                  <h5 class="text-center">Preguntas y respuestas</h5>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
      </div>
@endsection
