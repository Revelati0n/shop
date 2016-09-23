<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
	<div class="row">
		<label class="control-label">Select File</label>
		<input id="input-fa" name="userfile" type="file" multiple class="file">
</div>
	<script>
	$("#input-fa").fileinput({
    theme: "fa",
		language: "th",
		uploadUrl: "upload/do_upload",
		allowedFileExtensions: ["jpg", "png", "gif"]
});
	</script>
</div>
