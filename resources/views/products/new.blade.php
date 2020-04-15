@extends('layouts.seller-admin')

@section('css')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css'>
@endsection

@section('js')
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection

<!--
<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script>
<script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script>
<script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script>
-->

@section('content')
    <div class="container">
      <div id="tinymce-form">
        <fieldset class="form-group">
            <textarea class="form-control" id="editor" rows="10" placeholder="Content" v-tinymce-editor="content">
            </textarea>
        </fieldset>
        </div>
        <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.3.4/tinymce.min.js'></script>
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
              	content: 'hello world'
              }
            })
            })
        //# sourceURL=pen.js
        </script>
    </div>
@endsection
