@extends('layouts.seller-admin')

@section('title', 'Ver ticket | Movimoto')

@section('content')
          <div class="container">
              <div class="card shadow">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h4 class="m-0 font-weight-bold text-primary">Ticket # {{ $ticket->slug }}</h4>
                  </div>
                  <div class="card-body">
                      <p><strong>Titulo:</strong> {{ $ticket->title }}</p>
                      <p><strong>Estado:</strong> {{ $ticket->status ?  'Resuelto' : 'Pendiente' }}</p>
                      <p><strong>Contenido:</strong> {{ $ticket->content }}</p>
                      <div class="ml-auto">
                          <a href="{{ url('/ver-tickets') }}" class="btn btn-secondary btn-icon-split text-left">
                              <span class="icon text-white-50">
                                    <i class="fas fa-arrow-left"></i>
                              </span>
                              <span class="text">Regresar</span>
                          </a>
                          <a href="{{ action('TicketsController@edit', $ticket->slug) }}" class="btn btn-primary btn-icon-split float-right">
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
