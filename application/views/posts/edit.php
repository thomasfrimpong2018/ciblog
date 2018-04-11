
<div class="container">
    <h2><?=$title ?></h2>
    <?php echo validation_errors('<p class="alert alert-danger">');
    echo form_open('posts/update');
   echo form_hidden('id',$posts['id']);
    echo form_hidden('category_id',$posts['category_id']);
    echo form_label(' Title');
    $data=array('style'=>'width:100%','name'=>'title','placeholder'=>'Enter Title','class'=>'form-control','value'=>  $posts['title']);
    echo form_input($data);
    echo form_label('Body');
    $data=array('style'=>'width:80%','placeholder'=>'Enter Posts','id'=>'editor1','class'=>'form-control','value'=>  $posts['body'],'name'=>'body');
    echo form_textarea($data);
    $data=array('name'=>'submit','type'=>'submit','class'=>'btn btn-default','value'=>'Post'); ?><br>
    <div class="form-group">
        <label >Categories</label>
        <select name="category_id" class="form-control" >
            <?php foreach ($categories as $category ) : ?>
                <option value="<?php echo $category['id']?>"><?php echo $category['name']?></option>
            <?php  endforeach   ?>
        </select>
    </div>
    <?php
    echo form_submit($data);
    form_close() ?>
</div>



