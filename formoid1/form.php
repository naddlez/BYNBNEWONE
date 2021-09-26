<?php

define('EMAIL_FOR_REPORTS', 'nbothe@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

require_once str_replace('\\', '/', __DIR__) . '/handler.php';

?>

<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-default.css" type="text/css" />
<? if (frmd_message()): ?>
<span class="alert alert-success"><?=FINISH_MESSAGE;?></span>
<? else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-default.css" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
<form class="formoid-default" title="My Formoid form" method="post">
	<div class="element-text" ><h3 class="title">Contact Me</h3></div>
	<div class="element-email"  title="please enter your email so I can get back to you"><label class="title">Email<span class="required">*</span></label><input type="email" name="email" value="" required="required"/></div>
	<div class="element-submit" ><input type="submit" value="Submit"/></div>
	<div class="element-textarea"  title="find out what I can do for you!"><label class="title">Query</label><textarea name="textarea" cols="20" rows="5" ></textarea></div>

</form>
<!-- <script type="text/javascript" src=<"formoid1/formoid-default.js"></script>-->

<p class="frmd"><a href="http://formoid.com/">Web Email Forms Formoid.com 1.9</a></p>
<!-- Stop Formoid form-->
<? endif; ?>

<?php frmd_end_form(); ?>