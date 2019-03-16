<body>
	<?php include("adnav.php") ?>
	<div class="container-fluid">
		<div class="row">
			<?php include("adsidebar.php") ?>
			<main role="main" class="col-md-9 m-b-50 ml-sm-auto col-lg-10 pt-3 px-4">
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
					<h1 class="h2">Coupons</h1>
					<a href="coupons.php" class="btn btn-danger">Add Coupons</a>
				</div>
				<!--
				<canvas class="my-4" id="myChart" width="900" height="380"></canvas> -->
				<div class="dashboard-item">
					<div class="table-responsive">
						<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Coupon Type</th>
      <th scope="col">Coupon Amount</th>
      <th scope="col">Product IDs</th>
      <th scope="col">Usage/Limit</th>
      <th scope="col">Expire Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="coupon-code">
      	<span class="code">ajkshd</span>
      </td>
      <td class="coupon-code">Fixed Amount</td>
      <td class="coupon-code">45</td>
      <td class="coupon-code">45hpj09</td>
      <td class="coupon-code">4-10</td>
      <td class="coupon-code">4-10-2018</td>
      <td class="coupon-code">
      	<a href="adedit.php" class="btn btn-primary">
      	<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
      	</a>
      	<a href="" class="btn btn-danger">
      	<i class="fa fa-trash-o" aria-hidden="true"></i>
      	</a>
      </td>
    </tr>
   
  </tbody>
</table>
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