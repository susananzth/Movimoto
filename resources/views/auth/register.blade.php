@extends('layouts.app')

@section('content')
<!-- Comienzo del contenido para el registro de un usuario -->
<div class="container">
  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <div class="row">
        <!-- Caja donde va la imágen de la izquierda -->
        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
        <!-- Caja donde va el formulario de la derecha -->
        <div class="col-lg-7">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">{{ __('!Registrarse!') }}</h1>
            </div>
            <!-- Formulario -->
            <form class="user" method="POST" action="{{ route('register') }}">
              @csrf
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user @error('dni') is-invalid @enderror" name="dni" id="dni" placeholder="DNI" value="{{ old('dni') }}" required autocomplete="dni" autofocus>
                  @error('dni')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nombre de usuario" value="{{ old('name') }}" required autocomplete="name">
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control form-control-user @error('firstname') is-invalid @enderror" name="firstname" id="firstname" placeholder="Nombres" value="{{ old('firstname') }}" required autocomplete="firstname">
                  @error('firstname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-group">
                  <input type="text" class="form-control form-control-user @error('lastname') is-invalid @enderror" name="lastname" id="lastname" placeholder="Apellidos" value="{{ old('lastname') }}" required autocomplete="lastname">
                  @error('lastname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user @error('codeCountry') is-invalid @enderror" name="codeCountry" id="codeCountry" placeholder="Código de país" value="{{ old('codeCountry') }}" required autocomplete="codeCountry">
                  @error('codeCountry')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Número de teléfono" value="{{ old('phone') }}" required autocomplete="phone">
                  @error('phone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" id="email" placeholder="Correo electrónico" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="password" placeholder="Contraseña">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" id="password_confirm" placeholder="Repetir contraseña">
                </div>
              </div>

              <div class="form-group">
                <input type="distrit" class="form-control form-control-user @error('distrit') is-invalid @enderror" name="distrit" id="distrit" placeholder="Distrito" value="{{ old('distrit') }}" required autocomplete="distrit">
                @error('distrit')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <input type="address" class="form-control form-control-user @error('address') is-invalid @enderror" name="address" id="address" placeholder="Dirección" value="{{ old('address') }}" required autocomplete="address">
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary btn-user btn-block">
                {{ __('Registrarse') }}
              </button>
              <hr>
              <a href="index.html" class="btn btn-google btn-user btn-block">
                <i class="fab fa-google fa-fw"></i> Registrarse con Google
              </a>
              <a href="index.html" class="btn btn-facebook btn-user btn-block">
                <i class="fab fa-facebook-f fa-fw"></i> Registrarse con Facebook
              </a>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="{{ route('password.request') }}">¿Olvidó su contraseña?</a>
            </div>
            <div class="text-center">
              <a class="small" href="{{ route('login') }}">¿Tiene una cuenta? Inicie sesión</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
