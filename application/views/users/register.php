<div  class="row">
  <div class="col-md-6 col-md-offset-3">
<h2 class="text-center"><?=$title ?></h2>
<?php echo validation_errors('<p class="alert alert-danger">') ?>
<?php echo form_open('user/register') ?>
<?php echo form_label('Name');
  $data=array('type'=>'text','class'=>'form-control','name'=>'name','value'=>set_value('name'),'placeholder'=>'Enter Your Name');
  echo form_input($data);
?><br>
<?php echo form_label('Zipcode');
  $data=array('type'=>'number','class'=>'form-control','name'=>'zipcode','value'=>set_value('zipcode'),'placeholder'=>'Enter Your Zipcode');
  echo form_input($data);
?><br>
<?php echo form_label('Email');
  $data=array('type'=>'email','class'=>'form-control','name'=>'email','value'=>set_value('email'),'placeholder'=>'Enter Your Email');
  echo form_input($data);
?><br>
<?php echo form_label('Password');
  $data=array('type'=>'password','class'=>'form-control','name'=>'password','value'=>set_value('password'),'placeholder'=>'Enter Your Password');
  echo form_input($data);
?><br>
<?php echo form_label('Password');
  $data=array('type'=>'password','class'=>'form-control','name'=>'password2','value'=>set_value('password2'),'placeholder'=>'Confirm Your Password ');
  echo form_input($data);
?><br>
<?php echo form_label('Username');
  $data=array('type'=>'text','class'=>'form-control','name'=>'username','value'=>set_value('username'),'placeholder'=>'Enter Your Userame');
  echo form_input($data);
?><br>
<?php $data=array('name'=>'submit','type'=>'submit','class'=>'btn btn-primary btn-block','value'=>'Register'); ?><br>
<?php
 echo form_submit($data);?>
<?php echo form_close()?>
</div>
</div>