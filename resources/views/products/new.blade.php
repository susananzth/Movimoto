@extends('layouts.seller-admin')

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
               <h4 class="m-0 font-weight-bold text-primary">Añadir un nuevo artículo</h4>
            </div>
            <div class="card-body">
                <form class="row">
                    <div class="form-group col-sm-12">
                        <label for="itemTitle">Título del artículo</label>
                        <input class="form-control" id="itemTitle" type="text" placeholder="Ej: Motor">
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="itemDescript">Descripción del artículo</label>
                        <textarea class="form-control" id="itemDescript" rows="3"></textarea>
                    </div>
                    <div class="form-group col-sm-6">
                        <div class="item-group">
                            <p>Moneda</p><hr>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" id="itemCurrency1" type="radio" name="customRadio">
                                <label class="custom-control-label" for="itemCurrency1">s/.</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" id="itemCurrency2" type="radio" name="customRadio">
                                <label class="custom-control-label" for="itemCurrency2">$</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <div class="item-group">
                            <label for="itemPrice">Precio</label><hr>
                            <input class="form-control" id="itemPrice" type="number" placeholder="Ej: S/. 505">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <div class="item-group">
                            <label for="itemStock">Cantidad de inventario</label><hr>
                            <input class="form-control" id="itemStock" type="number" placeholder="Ej: 1000">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <div class="item-group">
                            <p>Categorías</p>
                            <hr>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" id="itemCategory1" type="checkbox">
                                <label class="custom-control-label" for="itemCategory1">Productos</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" id="itemCategory2" type="checkbox">
                                <label class="custom-control-label" for="itemCategory2">Servicios</label>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Editor de texto para descripción del artículo -->
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
                </script>
                <div class="my-2"></div>
                <div class="ml-auto text-right">
                    <a href="#" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Descartar</span>
                    </a>
                    <a href="#" class="btn btn-warning btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fas fa-exclamation-triangle"></i>
                        </span>
                        <span class="text">Guardar como borrador</span>
                    </a>
                    <a href="#" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Guardar</span>
                    </a>
                </div>

            </div>
         </div>
    </div>
@endsection
