<h2><?=$title?></h2>
<?php
  foreach ($detail as $details) : ?>
  <div>
  	<?php $details['title']   ?>
  </div>
  <div>
  	<?php $details['post_image']   ?>
  </div>
  <div>
  	<?php $details['body']   ?>
  </div>

<?php endforeach ?>
  	
 