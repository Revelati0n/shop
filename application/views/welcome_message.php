<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
	<div class="row">
		<label class="control-label">Select File</label>
		<input id="input-fa" name="inputfa[]" type="file" multiple class="file">
</div>
	<script>
	$("#input-fa").fileinput({
    theme: "fa",
		language: "th",
		uploadUrl: "/file-upload-batch/2",
		allowedFileExtensions: ["jpg", "png", "gif"]
});
	</script>
</div>
