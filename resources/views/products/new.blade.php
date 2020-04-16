@extends('layouts.seller-admin')

@section('js')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.3.4/tinymce.min.js'></script>
@endsection

@section('content')
    <div class="container">


      <!-- Editor de texto -->
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
    </div>
@endsection
