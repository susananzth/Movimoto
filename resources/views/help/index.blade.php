@extends('layouts.seller-admin')

@section('title', 'Ayuda | Movimoto')

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
