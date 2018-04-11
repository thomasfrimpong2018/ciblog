<!doctype html>
<html>
<head>
	<title>ciBlog</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!--dropzon-->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">

</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">

        <div id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="/">ciBlog</a> </li>
                <li><a href="<?php echo base_url()?>home">Home</a> </li>
                <li><a href="<?php echo base_url()?>about">About</a> </li>
                <li><a href="<?php echo base_url()?>posts">Blog</a> </li>
                <li><a href="<?php echo base_url()?>category/index">Categories</a> </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if( !$this->session->userdata('logged_in')): ?>
                <li><a href="<?php echo base_url()?>user/register">Register</a> </li>
                <li><a href="<?php echo base_url()?>user/login">Login</a> </li>
                 <?php  endif;?>

                <?php if( $this->session->userdata('logged_in')): ?>
                <li><a href="<?php echo base_url()?>posts/create">Create Post</a> </li>
                <li><a href="<?php echo base_url()?>category/create">Create Category</a> </li>
                <li><a href="<?php echo base_url()?>user/logout">Logout</a> </li>
                <?php endif;  ?>
            </ul>

        </div>

    </div>
</nav>
<div class="container">
<!--Flash data  -->
<?php if ($this->session->flashdata('user_registered')):  ?>
<?php   echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered');  ?>
<?php endif; ?>
<?php if ($this->session->flashdata('post_created')):  ?>
<?php   echo '<p class="alert alert-success">'.$this->session->flashdata('post_created');  ?>
<?php endif; ?>

<?php if ($this->session->flashdata('post_updated')):  ?>
<?php   echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated');  ?>
<?php endif; ?>

<?php if ($this->session->flashdata('category_created')):  ?>
<?php   echo '<p class="alert alert-success">'.$this->session->flashdata('category_created');  ?>
<?php endif; ?>

<?php if ($this->session->flashdata('post_deleted')):  ?>
<?php   echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted');  ?>
<?php endif; ?>

<?php if ($this->session->flashdata('login_success')):  ?>
<?php   echo '<p class="alert alert-success">'.$this->session->flashdata('login_success');  ?>
<?php endif; ?>
<?php if ($this->session->flashdata('login_failed')):  ?>
<?php   echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed');  ?>
<?php endif; ?>

<?php if ($this->session->flashdata('logout_success')):  ?>
<?php   echo '<p class="alert alert-success">'.$this->session->flashdata('logout_success');  ?>
<?php endif; ?>
<?php if($this->session->set_userdata('username')!=null) {echo $this->session->set_userdata('username');} ?>
