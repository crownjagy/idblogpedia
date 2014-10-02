Integrate-Tinymce-With-Codeigniter
==================================
Download TinyMCE package form http://www.tinymce.com/download/download.php. Currently, version 4.1.5 is available. Extract the compressed file and paste to any project folder (js is mostly prefered).

In header file or top of view file, include following: 

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

If you want to workup with more options on the editor, add more plugins. More plugins detail can be obtained from http://www.tinymce.com/wiki.php/Configuration:plugins. 40+ plugins are available on the main package. You just need to include the name of plugins. 

If you are still having problem, then you may need to check tinymce folder permission which can be changed by command  chmod -R 777 tinymce/.
