<!DOCTYPE html>
<html>
<head>
	<title>1CAK</title>
	<?php $this->load->view('_partials/header.php'); ?>
	
</head>
<body>

<?php $this->load->view('_partials/navbar.php');?>

<div class="container" style="padding-top: 80px; " >
	<div class="row">
	<div class="col-md-9 col-sm-12 ">
	<form>
	<center>
		<span>Sudah punya username? sini sini yuk login...</span>
		<div  style="width : 300px">
  		<div class="form-group">
 		<label for="exampleInputEmail1">User</label>
    	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  	</div>
  	<div class="form-group">
    	<label for="pwd">Password</label>
    	<input type="password" class="form-control" id="exampleInputPassword1" >
  	</div>
	  <button type="submit" color="black" class="btn btn-dark">Login</button>
	</div>
	<a href="#">Lupa password?</a><br>
	<small>*if you have a problem with login, try clear cookie first</small>
	</center>
</form>
	</div>
	<?php $this->load->view('_partials/sidebar.php'); ?>
</div>
</div>




</body>
<?php $this->load->view('_partials/footer.php');?>
</html>