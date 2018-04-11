<div class='container'>
<h2> <?=$title ?> </h2>
<?php
echo validation_errors();
echo form_open_multipart('category/create');
echo form_label('Categories');
$data=array(
	'style'=>'width:60%',
     'name'=> 'category',
     'placeholder'=>'Enter a Category',
    'class'=>'form-control',
    'value'=>set_value('category')
	);
echo form_input($data); ?> <br><?php
$data=array(
	'value'=>'Post',
	'class'=>'btn btn-default',
	'name'=>'Submit',
	'type'=>'Submit'
	);
echo form_submit($data);
echo form_close(); ?>
</div>