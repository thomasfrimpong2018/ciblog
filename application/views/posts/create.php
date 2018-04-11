<div class="container">
    <h2><?=$title ?></h2>
    <?php echo validation_errors('<p class="alert alert-danger">');
echo form_open_multipart('posts/create');
echo form_label(' Title');
$data=array('style'=>'width:100%','name'=>'title','placeholder'=>'Enter Title','class'=>'form-control','value'=>set_value('title'));
 echo form_input($data); ?><br><?php
 echo form_label('Body');
$data=array('style'=>'width:80%','placeholder'=>'Enter Posts','id'=>'editor1','class'=>'form-control','value'=>set_value('body'),'name'=>'body');
 echo form_textarea($data); ?><br>
    <div class="form-group">
    <label >Categories</label>
        <select name="category_id" class="form-control" >
    <?php foreach ($categories as $category ) : ?>
            <option value="<?php echo $category['id']?>"><?php echo $category['name']?></option>
    <?php  endforeach   ?>
        </select>
    </div>
    <div class="form-group">
        <label>Image Upload</label>
        <input name="userfile" type="file" size="20" >
    </div>
 <?php $data=array('name'=>'submit','type'=>'submit','class'=>'btn btn-default','value'=>'Post'); ?><br><?php
 echo form_submit($data);
form_close() ?>
</div>



