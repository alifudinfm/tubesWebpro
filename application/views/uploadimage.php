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
		<form action="/action_page.php", action="upload.php", method="post", enctype="multipart/form-data">
		<h4> Submit Something Fun </h4><br>
		<span>Media Type</span>
		<div class="form-check">
  			<label class="form-check-label">
    			<input type="radio" class="form-check-input" name="optradio">Picture url
  			</label>
		</div>
		<div class="form-check">
  			<label class="form-check-label">
    			<input type="radio" class="form-check-input" name="optradio">Upload Picture
  			</label>
		</div>
		<div class="form-check disabled">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="optradio">Video Youtube/gfycat
			</label>
		</div>
		<div class="custom-file">
			<input type="file" class="custom-file-input" id="customFile">
			<label class="custom-file-label" for="customFile">Choose file</label><br>
		</div>
  		<div class="form-group"><br>
    		<label for="text">Title</label>
    		<input type="email" class="form-control" id="text">
  		</div>
  		<div class="form-group">
    		<label for="text">Sumber</label>
    		<input type="text" class="form-control" id="text">
  		</div>
		<div class="form-group">
    		<label for="text">Tags</label>
    		<input type="text" class="form-control" id="text">
  		</div>
  		<div class="form-group form-check">
    		<label class="form-check-label">
      		<input class="form-check-input" type="checkbox"> Ini material yang tidak cocok dibuka saat bekerja(di kantor) (Not Safe For Work)/NSFW
    		</label>
  		</div>
		<div class="form-group form-check">
    		<label class="form-check-label">
      		<input class="form-check-input" type="checkbox">  Ini buatan saya sendiri
    		</label>
  		</div>
  			<button type="submit" class="btn btn-dark">Submit</button>
		</form>
	</div>
	<?php $this->load->view('_partials/sidebar.php'); ?>
</div>
</div>




</body>
<?php $this->load->view('_partials/footer.php');?>
</html>