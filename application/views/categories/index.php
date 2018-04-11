<div class="container">
<div class="row">
<div class="col-md-6">
<h2><?=$title ?></h2>
<ul class="list-group">
	<?php //print_r($category)?>
   <?php foreach ($category as $list ) : ?>
   	
    <li class="list-group-item"> <a href="<?php echo site_url('/category/posts/'.$list['id']); ?>"><?php echo $list['name']; ?></a> </li>

  <?php endforeach; ?>
</ul>
</div>
</div>
</div>	