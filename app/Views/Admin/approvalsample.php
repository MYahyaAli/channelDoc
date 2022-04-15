<!-- Approval -->
    <!-- <div class="main">
      <!--User management content
            <div id="Profile" class="tabcontent">
                
                <h2>User Management </h2><br>
                
            <!-- ADMIN PRACTITIONER ACCOUNT APPROVAL
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="card border border-dark">
                            <div class="card-header">
                                <h4>Practitioners awaiting for approval</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>

                                            <th>Doctor ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>E-mail</th>
                                            <th>Account Type</th>
                                            <th>Approval</th>
                                            <th>Removal</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php

session();

$adsModel = new \App\Models\userModel;

// Runs query to get approved ads of the user
$query = $adsModel -> query("SELECT * FROM registrations WHERE approved = 'No' AND type = 'Company'"); 

foreach ($query -> getResult() as $row){

?>
<tr>
    <td><?php echo $row -> id ?></td>
    <td><?php echo $row -> fname ?></td>
    <td><?php echo $row -> lname ?></td>
    <td><?php echo $row -> email ?></td>
    <td><?php echo $row -> type ?></td>

    <td>
        <a href="<?php echo base_url('Admin/approveUser/'.$row -> id)?>" class="btn btn-outline-success float-end btn-sm">Approve</a>
    </td>
    <td>
        <a href="<?php echo base_url('Admin/deleteUser/'.$row -> id)?>" class="btn btn-outline-danger float-end btn-sm">Delete</a>
    </td>
    
</tr>
<?php 
} 
?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>

<!-- ADMIN APPROVED PRACTITIONERS
<div class="container">
<div class="row">
<div class="col-md-12 mt-5">
<div class="card border border-dark">
<div class="card-header">
<h4>Approved Practitioners</h4>
</div>
<div class="card-body">
<table class="table table-bordered">
<thead>
<tr>

    <th>Doctor ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>E-mail</th>
    <th>Account Type</th>
    <th>Removal</th>
    
</tr>
</thead>
<tbody>
<?php

    session();

    $adsModel = new \App\Models\userModel;

    // Runs query to get approved ads of the user
    $query = $adsModel -> query("SELECT * FROM registrations WHERE approved = 'Yes' AND type = 'Company' "); 

    foreach ($query -> getResult() as $row){

?>
    <tr>
        <td><?php echo $row -> id ?></td>
        <td><?php echo $row -> fname ?></td>
        <td><?php echo $row -> lname ?></td>
        <td><?php echo $row -> email ?></td>
        <td><?php echo $row -> type ?></td>

        <td>
            <a href="<?php echo base_url('Admin/deleteUser/'.$row -> id)?>" class="btn btn-outline-danger float-end btn-sm">Delete</a>
        </td>
        
    </tr>
<?php 
} 
?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>



<!-- ADMIN DISAPPROVED PRACTITIONERS
<div class="container">
<div class="row">
<div class="col-md-12 mt-5">
<div class="card border border-dark">
<div class="card-header">
<h4>Disapproved Practitioners</h4>
</div>
<div class="card-body">
<table class="table table-bordered">
<thead>
<tr>

<th>Doctor ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>E-mail</th>
<th>Account Type</th>
<th>Removal</th>

</tr>
</thead>
<tbody>
<?php

session();

$adsModel = new \App\Models\userModel;

// Runs query to get approved ads of the user
$query = $adsModel -> query("SELECT * FROM registrations WHERE approved = 'Yes' AND type = 'Company' "); 

foreach ($query -> getResult() as $row){

?>
<tr>
    <td><?php echo $row -> id ?></td>
    <td><?php echo $row -> fname ?></td>
    <td><?php echo $row -> lname ?></td>
    <td><?php echo $row -> email ?></td>
    <td><?php echo $row -> type ?></td>

    <td>
        <a href="<?php echo base_url('Admin/deleteUser/'.$row -> id)?>" class="btn btn-outline-danger float-end btn-sm">Delete</a>
    </td>
    
</tr>
<?php 
} 
?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>

</div>

<!-- My Reports content-->
<!-- <div id="Reports" class="tabcontent">
<h3>Reports</h3>
<p>Reports for this month</p> 
</div>


</div> -->