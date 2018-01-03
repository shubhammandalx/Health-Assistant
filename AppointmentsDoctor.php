<?php include 'dheader.php';?>
<?php

?>
<form action="index.html#" method="get"
	class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
	<div class="input-group">
		<input type="text" name="q" class="form-control"
			placeholder="Search..."> <span class="input-group-btn">
			<button type="submit" name="search" id="search-btn" class="btn">
				<i class="fa fa-search"></i>
			</button>
		</span>
	</div>
</form>
<div class="header-icon">
	<i class="fa fa-tachometer"></i>
</div>
<div class="header-title">
	<h1>Appointments</h1>
	<small> Appointment features</small>
	<ol class="breadcrumb hidden-xs">
		<li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
		<li class="active">Appointment</li>
	</ol>
</div>
</section>
<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-bd" data-index="0">
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>FirstName Patient</th>
									<th>LastName Patient</th>
									<th>Title</th>
									<th>Description</th>
									<th>Phone No</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>
							
<?php
$queryAppointmentList = 'select patient.firstName, patient.lastName, patient.phoneNo, patient.email, appointment.title, appointment.description from patient inner join appointment inner join doctors on '.$_SESSION['id'].' = appointment.doctorId and patient.id = appointment.patientId' ;
$getAppointmentList = $conn->query($queryAppointmentList);

if ($getAppointmentList->num_rows > 0) {
    while ($row = $getAppointmentList->fetch_assoc()) {
        echo  '<tr>'.
                '<td>' . $row['firstName'] . '</td> <td>' . $row['lastName']. '</td>' .
            '<td>' . $row['title'] . '</td>'.
            '<td>' . $row['description'] .'</td> <td>' . $row['phoneNo'] . '</td>'.  
                '</td> <td>' . $row['email'] . '</td> 
                </tr>';
    }
    
} else {
    echo "0 results";
}
?>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<?php include 'dfooter.php';?>

