Integrasi MCE Tiny Editor ke Codeigniter
==================================
Codeigniter adalah framework PHP yang sangat populer sejak di luncurkan pertama kali. Tidak seperti LARAVEL yang ribet pengaturannya dan membutuhkan composer pada awalnya, codeigniter lebih sederhana. Anda cukup download dari situsnya dan masukkan ke root dari webserver, poinkan dengan virtual server dan boom! Codeigniter siap di gunakna.

Untuk integrasi TinyMCE kedalam codeigniter, silahkan download paketnya terlebih dahulu di  http://www.tinymce.com/download/download.php. 
Setelah itu, extrak kedalam folder proyek Anda. 

Masukkan kode berikut di halaman view:

<script type="text/javascript" src="<?php echo site_url('js/tinymce/tinymce.min.js'); ?>"></script>
	<script type="text/javascript">
		tinymce.init({
			// General options
			selector : "textarea",
			theme : "modern",
			plugins: 'advlist autolink link image lists charmap print preview'
			
		});
</script>
	
	

Masukkan kode ini kedalam lokasi penempatan TINYMCE ini:
	
<?php echo form_textarea('body',set_value('body',$page->body),'class="tinymce"'); ?>

Mau lebih banyak fitur? coba download di: http://www.tinymce.com/wiki.php/Configuration:plugins. 


Set: 
chmod -R 777 tinymce/.

Butuh bantuan?
Saya siap bantu: http://www.detikblogger.com/onebetqq-com-agen-bandar-poker/
