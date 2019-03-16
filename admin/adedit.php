<body>
	<?php include("adnav.php") ?>
	<div class="container-fluid">
		<div class="row">
			<?php include("adsidebar.php") ?>
			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
					<h1 class="h2">Add Product</h1>
					<div class="btn-toolbar mb-2 mb-md-0">
					</div>
				</div>
				<!--
				<canvas class="my-4" id="myChart" width="900" height="380"></canvas> -->
				<div class="dashboard-item">
					<div class="container">
						<div class="row">
							<div class="col-md-6 offset-md-3">
								<form class="mx-auto">
									<div class="form-group">
									<label for="exampleInputEmail1">Product Name</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
									</div>
									<div class="form-group">
										<label for="">Product Code</label>
										<input type="text" class="form-control">
									</div>						
									<div class="form-group">
										<label for="">Stock Available</label>
										<input type="number" class="form-control" min="1" max="" value="1">
									</div>
									<div class="form-group">
										<label for="">Product Price</label>
										<input type="number" class="form-control">
									</div>
									<div class="form-group">
										<label>Product Details</label>
										<textarea class="form-control" id="" rows="3">
										
										</textarea>
									</div>							
<div class="size">
  <div class="panel panel-default">
        <div class="panel-body">

          <!-- Standar Form -->
          <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
            <div class="form-inline">
              <div class="form-group">
                <input type="file" name="files[]" id="js-upload-files" multiple>
              </div>
            </div>
          </form>
          <h6>Available Size</h6>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">M</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">L</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
  <label class="form-check-label" for="inlineCheckbox2">XL</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
  <label class="form-check-label" for="inlineCheckbox2">XXL</label>
</div>

<!--           <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>  -->         
        </div>
    </div>	
</div>
      <button type="submit" class="btn btn-primary m-b-50">Submit</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</main>
			</div>
		</div>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<!-- Icons -->
		<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
	</body>