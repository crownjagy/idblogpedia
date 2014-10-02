Integrate-Tinymce-With-Codeigniter
==================================
Keep tinymce folder to any project folder (js is mostly prefered).

In header file, include following: 
<script type="text/javascript" src="<?php echo site_url('js/tinymce/tinymce.min.js'); ?>"></script>
	<script type="text/javascript">
		tinymce.init({
			// General options
			selector : "textarea",
			theme : "modern",
			plugins: 'advlist autolink link image lists charmap print preview'
			
		});
	</script>
	
	
	In view file:
	
<?php echo form_textarea('body',set_value('body',$page->body),'class="tinymce"'); ?>

