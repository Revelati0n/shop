<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">

	<div class="col-md-7">
	<input type="text" class="summernote" />
</div>
<div class="col-md-5">

				 <button type="button" data-toggle="tooltip"  id="button-upload" class="btn btn-primary"><i class="fa fa-upload"></i></button>
				 <button type="button" data-toggle="tooltip"  id="button-folder" class="btn btn-default" onclick="$('.summernote').summernote('insertText', 'Hello, world');"><i class="fa fa-folder"></i></button>
				 <button type="button" data-toggle="tooltip"  id="button-delete" class="btn btn-danger" onclick="$('.summernote').summernote('insertImage', 'http://localhost/shop/uploads/placeholder.png');"><i class="fa fa-trash-o"></i></button>

</div>

</div>

<div class="container">

	<div class="col-md-8">

		<span class="btn btn-success fileinput-button">
	        <i class="glyphicon glyphicon-plus"></i>
	        <span>Select files...</span>
	        <!-- The file input field used as target for the file upload widget -->
	        <input id="fileupload" type="file" name="files" multiple>
	    </span>
	    <br>
	    <br>
	    <!-- The global progress bar -->
	    <div id="progress" class="progress">
	        <div class="progress-bar progress-bar-success"></div>
	    </div>


</div>
	<script>

	$(function () {
	    var url = '<?php echo base_url();?>upload/do_upload';
	    $('#fileupload').fileupload({
	        url: url,
	        dataType: 'json',
	        done: function (e, data) {
							console.log(data);
							$('.summernote').summernote('insertImage', '<?php echo base_url();?>/uploads/' + data.result.upload_data.file_name);
	        },
	        progressall: function (e, data) {
	            var progress = parseInt(data.loaded / data.total * 100, 10);
	            $('#progress .progress-bar').css(
	                'width',
	                progress + '%'
	            );
	        }
	    }).prop('disabled', !$.support.fileInput)
	        .parent().addClass($.support.fileInput ? undefined : 'disabled');
	});



	</script>
</div>
