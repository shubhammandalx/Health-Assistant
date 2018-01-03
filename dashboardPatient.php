<?php include 'pheader.php';?>

<?php
$doctorsList = "SELECT id, firstName, lastName, placeName, email, phoneNo, fee, city FROM doctors";
$result = $conn->query($doctorsList);
?>


<script type="text/javascript">
function myFunction() {
	  // Declare variables 
	  var input, filter, table, tr, td, i;
	  input = document.getElementById("myInput");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("myTable");
	  tr = table.getElementsByTagName("tr");

	  // Loop through all table rows, and hide those who don't match the search query
	  for (i = 0; i < tr.length; i++) {
	    td = tr[i].getElementsByTagName("td")[7];
	    if (td) {
	      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
	        tr[i].style.display = "";
	      } else {
	        tr[i].style.display = "none";
	      }
	    } 
	  }
	}
</script>


<div class="header-icon">
	<i class="fa fa-tachometer"></i>
</div>
<div class="header-title">
	<h1>Dashboard</h1>
	<small> Dashboard features</small>
	<ol class="breadcrumb hidden-xs">
		<li><a href="index.html"><i class="pe-7s-home"></i>Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</div>
</section>
<!-- Main content -->

<section class="content">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="dataTables_length">
				<div class="input-group custom-search-form">
					<input id="myInput" type="search" onkeyup="myFunction()" class="form-control"
						placeholder="Search for doctors.." /> <span class="input-group-btn">
						<button class="btn btn-primary" type="button">
							<span class="fa fa-search"></span>
						</button>
					</span>
				</div>
				<!-- /input-group -->
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-bd" data-index="0">
				<div class="panel-body">
					<div class="table-responsive" ng-app="myApp" ng-controller="customersCtrl">
					<form action="scheduleAppointment.php" method="get">
							<table id="myTable" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Place Name</th>
										<th>Email</th>
										<th>PhoneNo</th>
										<th>Price</th>
										<th>Fee</th>
										<th>City</th>
										<th>Add Appointment</th>
									</tr>
								</thead>
								
								<tbody id="tbody">
<?php

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<tr> <td>' . $row["firstName"] . '</td> <td>' . $row["lastName"] . '</td>
            <td>' . $row["placeName"] . '</td> <td>' . $row["email"] . '</td>
            <td>' . $row["phoneNo"] . '</td> <td>' . $row["phoneNo"] . '</td> 
            <td>' . $row["fee"] . '</td> <td>' . $row["city"] . '</td>
            <td><a class="btn btn-primary btn-xs" href="scheduleAppointment.php?doctorId=' . $row["id"] . '" >Add Appointment</a></td></tr> ';
    }
} else {
    echo "0 results";
}
?>
								</tbody>
							</table>
							</form>
					</div>
				</div>
			</div>
	</div>
</div>
</section>
	<!-- /.content -->

	<?php include 'pfooter.php';?>