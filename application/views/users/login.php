
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h3 class="text-center"><?=  $title;?></h3>
    
	<?php echo  form_open('user/login')?>
     <div class="form-group">
      <input type="text" name="username" placeholder="Enter Username" class="form-control" required autofocus>

     </div>

     <div class="form-group">
      <input type="password" name="password" placeholder="Enter Password" class="form-control" required autofocus>

     </div>
     <button class="btn btn-primary btn-block" type="submit">Login</button>
     <?php   echo form_close()?>
	</div>

</div>