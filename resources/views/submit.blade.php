@extends('layouts.master')
@section('title')
	Submitting Lyrics
@endsection
@section('content')
	<form action="#">
		<h2 style="text-align: center;">འབྲེལ་བ་འབད་ས།</h2>
		<div class="form-group col-md-6 col-md-offset-3 col-centered">
			<label for="name"><span style="color: red;">*</span>མཚན:</label>
			<input type="text" class="form-control" required>
		</div>
		<div class="form-group col-md-6 col-md-offset-3 col-centered">
			<label for="email"><span style="color: red;">*</span>Email Address:</label>
			<input type="email" class="form-control" required>
		</div>
		<div class="form-group col-md-6 col-md-offset-3 col-centered">
			<label for="phone_no"><span style="color: red;">*</span>བརྒྱུད་འཕྲིན་ཨང་།:</label>
			<input type="number" class="form-control" required>
		</div>
		<div class="form-group col-md-6 col-md-offset-3 col-centered">
			<label for="artist"><span style="color: red;">*</span>ཞབས་ཁྲ་གི་མིང་།:</label>
			<input type="number" class="form-control" required>
		</div>
		<div class="form-group col-md-6 col-md-offset-3 col-centered">
			<label for="composer"><span style="color: red;">*</span>རྩོམ་པ་པོ།:</label>
			<input type="text" class="form-control" required>
		</div>
		<div class="form-group col-md-6 col-md-offset-3 col-centered">
			<label for="name"><span style="color: red;">*</span>གླུ་ཚིག:</label>
			<textarea name="message" cols="30" rows="10" class="form-control add_lyrics"></textarea>
		</div>
		<div class="col-centered col-md-6 col-md-offset-3" align="right">
			<input type="submit" name="sumbit" value="གཏང" class="btn btn-success" style="font-size: 40px; margin-bottom: 15px; width: 90px;">
			<input type="reset" name="sumbit" value="ཆ་མེད་གཏང" class="btn btn-danger" style="font-size: 40px; margin-bottom: 15px; width: 90px;">
		</div>
	</form>
	{{-- <script src="{{URL::to('vendor/tinymce/js/tinymce.min.js')}}"></script> --}}
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script>
	  var editor_config = {
	    path_absolute : "/",
	    selector: "textarea.add_lyrics",
	    plugins: [
	      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
	      "searchreplace wordcount visualblocks visualchars code fullscreen",
	      "insertdatetime media nonbreaking save table contextmenu directionality",
	      "emoticons template paste textcolor colorpicker textpattern"
	    ],
	    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
	    relative_urls: false,
	    file_browser_callback : function(field_name, url, type, win) {
	      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
	      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

	      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
	      if (type == 'image') {
	        cmsURL = cmsURL + "&type=Images";
	      } else {
	        cmsURL = cmsURL + "&type=Files";
	      }

	      tinyMCE.activeEditor.windowManager.open({
	        file : cmsURL,
	        title : 'Filemanager',
	        width : x * 0.8,
	        height : y * 0.8,
	        resizable : "yes",
	        close_previous : "no"
	      });
	    }
	  };
	  tinymce.init(editor_config);
	</script>
@endsection