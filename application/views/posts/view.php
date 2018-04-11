<div class="container">
<h2><?php echo $post['title']?></h2>
<img  src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'] ;?>" >
<small class="post-date"> Posted on <?php echo $post['created_at'] ?></small><br>
<div class="post-body"><?php echo  $post['body']?></div>
<?php if($this->session->userdata('user_id')==$post['user_id']): ?>
<hr>
    <a class="btn btn-info pull-left" href="edit/<?php echo $post['slug'] ?>">Edit</a>
<?php echo form_open('posts/delete/'.$post['id']) ?>
<button class="btn btn-danger">Delete</button>
<?php echo form_close()?>
<?php endif; ?>
<hr>

<h3>Comments </h3>
 <?php if(isset($comments)) :?>
 <?php foreach($comments as $comment):    ?>
 <div class="well">
  <h5><?php echo $comment['body']  ?> [by <strong><?php echo $comment['name']   ?></strong>]</h5>
</div>
<?php  endforeach ;   ?>

<?php else : ?>
	<p>No Comment to Display</p>

  <?php endif; ?>

<hr>

<h3>Add Comments</h3>
<?php echo validation_errors('<p class="alert alert-danger">'); ?>
<?php  echo form_open('comments/create/'.$post['id']); ?>
<div class="form-group">
 <label>Name</label>
  <input type="text" class="form-control" name="name">
</div>
<div class="form-group">
 <label>Email</label>
  <input type="text" class="form-control" name="email">
</div>
<div class="form-group">
 <label>Body</label>
  <textarea  class="form-control" name="body"></textarea>
</div>
<input type="hidden" value="<?php echo $post['slug']; ?>">
<button class="btn btn-primary" type="submit">Submit</button>
</form>
