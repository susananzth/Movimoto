@extends('layouts.seller-admin')

@section('title', 'Nuevo artículo | Movimoto')


@section('content')
      <div class="container">
          <div class="card shadow">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <h4 class="m-0 font-weight-bold text-primary">Añadir un nuevo artículo</h4>
              </div>
              <div class="card-body">
                  <form class="row" method="POST" action="{{ url('enviar-articulo') }}">
                      @if (session('status')) <!-- Si el artículo se creó correctamente, mostrará el mensaje del controlador -->
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
                          <label for="name">Nombre del artículo o servicio:</label>
                          <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" placeholder="Ej: Motor">
                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="form-group col-sm-12">
                          <label for="content">Descripción del artículo o servicio:</label>
                          <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="3"></textarea>
                          @error('content')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="form-group col-sm-6">
                          <div class="item-group">
                              <p class="label">Moneda:</p><hr>
                              <div class="custom-control custom-radio">
                                  <input class="custom-control-input @error('currency') is-invalid @enderror" id="currency1" type="radio" name="currency" value="s/.">
                                  <label class="custom-control-label" for="currency1">s/.</label>
                              </div>
                              <div class="custom-control custom-radio">
                                  <input class="custom-control-input @error('currency') is-invalid @enderror" id="currency2" type="radio" name="currency" value="$">
                                  <label class="custom-control-label" for="currency2">$</label>
                              </div>
                              @error('currency')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group col-sm-6">
                          <div class="item-group">
                              <label for="price">Precio</label><hr>
                              <input class="form-control @error('price') is-invalid @enderror" id="price" type="number" name="price" placeholder="Ej: S/. 505">
                              @error('price')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group col-sm-6">
                          <div class="item-group">
                              <label for="cant">Cantidad de inventario</label><hr>
                              <input class="form-control @error('cant') is-invalid @enderror" id="cant" type="number" name="cant" placeholder="Ej: 1000">
                              @error('cant')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group col-sm-6">
                          <div class="item-group">
                              <p class="label">Categorías</p>
                              <hr>
                              @foreach($categories as $category)
                              <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input @error('category_id') is-invalid @enderror" type="checkbox" id="{{ $category->id }}" value="{{ $category->id }}" name="category_id">
                                  <label class="custom-control-label" for="{{ $category->id }}">{{$category->name}}</label>
                              </div>
                              @endforeach
                              @error('category_id')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <!-- Editor de texto para descripción del artículo
                      <div id="tinymce-form">
                        <fieldset class="form-group">
                            <textarea class="form-control" id="editor" rows="10" placeholder="Content" v-tinymce-editor="content">
                            </textarea>
                        </fieldset>
                      </div>

                      <script >
                          $(function() {

                              // tinymce directive
                              Vue.directive('tinymce-editor',{
                                twoWay: true,
                                bind: function() {
                                    var self = this;
                                    tinymce.init({
                                        selector: '#editor',
                                        setup: function(editor) {

                                            // init tinymce
                                            editor.on('init', function() {
                                              tinymce.get('editor').setContent(self.value);
                                            });

                                            // when typing keyup event
                                            editor.on('keyup', function() {

                                              // get new value
                                              var new_value = tinymce.get('editor').getContent(self.value);

                                              // set model value
                                              self.set(new_value)
                                            });
                                        }
                                    });
                                },
                                update: function(newVal, oldVal) {
                                    // set val and trigger event
                                    $(this.el).val(newVal).trigger('keyup');
                                }

                              })
                              new Vue({
                                el: '#tinymce-form',
                                data: {
                                  content: ''
                                }
                              })
                          })
                      //# sourceURL=pen.js
                      </script>  -->
                      <div class="my-2"></div>
                      <div class="ml-auto text-right">
                        <!--
                          <button type="submit" class="btn btn-danger btn-icon-split">
                              <span class="icon text-white-50">
                                  <i class="fas fa-trash"></i>
                              </span>
                              <span class="text">Descartar</span>
                          </button>
                          <button type="submit" class="btn btn-secondary btn-icon-split">
                              <span class="icon text-white-50">
                                  <i class="fas fa-arrow-right"></i>
                              </span>
                              <span class="text">Guardar como borrador</span>
                          </button>  -->
                          <button type="submit" class="btn btn-success btn-icon-split">
                              <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                              </span>
                              <span class="text">Publicar</span>
                          </button>
                      </div>
                  </form>
              </div>
           </div>
      </div>
@endsection
