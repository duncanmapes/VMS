<?php
session_start();
if (!$_SESSION['username']) {
    //redirect to login page
    header('Location: login.php');
}

include ('includes/head.php');
?>

<body>
	<div id="wrapper">
		<?php
        include ('includes/nav.php');
		?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Enter Road Trip Log</h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<div class="row">
				<div class="col-lg-6">
					<form id="tripLogForm" action="" method="post" class="form-horizontal">

						<div class="form-group">
							<label class="col-md-5 control-label" for="vehicleINP">Choose the Vehicle:</label>
							<div class="col-md-4">
								<select class="form-control" id="vehicleINP" name="vechicle">
									<option value="SC3563">SC3563</option>
									<option value="SC3565">SC3565</option>
									<option value="SC3533">SC3533</option>
									<option value="SC3573">SC3573</option>
									<option value="SC3583">SC3583</option>

								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label" for="startDateINP">Enter the start date of the trip:</label>
							<div class="col-sm-5">
								<input class="form-control" id="startdateINP" name="startdate" value="" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-5 control-label" for="driverINP">Choose the Driver:</label>
							<div class="col-sm-5">
								<select class="form-control" id="driverINP" name="driver">
									<option value="1">George</option>
									<option value="2">Sam</option>
									<option value="3">Alice</option>
									<option value="4">Duncan</option>
									<option value="5">Sarah</option>

								</select>
							</div>
						</div>

						<label for="odostartINP">Enter the starting odometer reading of the trip:</label>
						<input id="odostartINP" name="odostart" value="" />
						<label for="odoendINP">Enter the ending odometer reading of the trip:</label>
						<input id="odoendINP" name="odoend" value="" />
						<label for="triporiginINP">Enter the departure location of the trip:</label>
						<input id="triporiginINP" name="triporigin" value="" />
						<label for="tripdestinationINP">Enter the destination of the trip:</label>
						<input id="tripdestinationINP" name="tripdestination" value="" />
						<label for="endDateINP">Enter the end date of the trip:</label>
						<input id="enddateINP" name="enddate" value="" />

						<label for="pcaINP">Choose the PCA for this trip:</label>
						<select id="pcaINP" name="pca">
							<option value="1">AB3</option>
							<option value="2">DE5</option>
							<option value="3">MN7</option>
							<option value="4">PQ8</option>
							<option value="5">YZ9</option>

						</select>

						<label for="ccINP">Choose the CC for this trip:</label>
						<select id="ccINP" name="cc">
							<option value="1">Aweirueoir</option>
							<option value="2">lsdkfjdslfkj</option>
							<option value="3">jlkwejrwlk</option>
							<option value="4">uiousdfjk</option>
							<option value="5">elkjwjbufj</option>

						</select>

						<button type="submit" class="btn btn-primary">Submit</button>

					</form>

				</div>
			</div>
		</div>
	</div>
</body>
</html>

