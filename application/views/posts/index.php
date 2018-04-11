

<div class="container">
	<h2><?=$title ?></h2>
<?php foreach ($posts as $ki): ?>
<h3><?php echo $ki['title'] ?></h3>	
<div class="row">
	 

	<div class="col-md-3">
     <img  src="<?php echo site_url();?>assets/images/posts/<?php echo $ki['post_image'] ;?>" >
	</div>
	<div class="col-md-9">
   
 
  <small class="post-date"> Posted on <?php echo $ki['created_at'] ?> in the category <strong> <?php echo $ki['name'] ?></strong></small><br>
    <?php  echo word_limiter($ki['body'],70 )      ?><br>
    <a class="btn btn-default" href="<?php  echo site_url('/posts/'. $ki['slug']) ?>">Read More</a>
 

</div>
</div>
<?php endforeach; ?>
</div>