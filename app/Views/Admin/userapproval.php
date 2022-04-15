<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChannelDoc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
    <body>
        <!--Nav-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ChannelDoc</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('Home/home')?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Appointments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                            <!--Use the users name here-->
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo base_url('Admin/index')?>">Dashboard</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('Logout/logout')?>">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

        <!-- Body -->
        <!-- Practitioner Accounts Waiting for Approval -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card border border-dark">
                        <div class="card-header">
                            <h4>Company Accounts Awaiting Approval</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>

                                        <th>Account ID</th>
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
                                        $query = $adsModel -> query("SELECT * FROM user WHERE approved = 'No' AND type = 'Practitioner'"); 

                                        foreach ($query -> getResult() as $row){

                                    ?>
                                        <tr>
                                            <td><?php echo $row -> id ?></td>
                                            <td><?php echo $row -> firstname ?></td>
                                            <td><?php echo $row -> lastname ?></td>
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

        <!-- Practitioner Approved Accounts -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card border border-dark">
                        <div class="card-header">
                            <h4>Approved Company Accounts</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>

                                        <th>Account ID</th>
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
                                        $query = $adsModel -> query("SELECT * FROM user WHERE approved = 'Yes' AND type = 'Practitioner' "); 

                                        foreach ($query -> getResult() as $row){

                                    ?>
                                        <tr>
                                            <td><?php echo $row -> id ?></td>
                                            <td><?php echo $row -> firstname ?></td>
                                            <td><?php echo $row -> lastname ?></td>
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

        <!-- Footer -->
        <div class="container">
            <div class="row">
                <div class="col">
                <div class="row row-cols-2">
                    <div class="col">
                        <!--Logo-->
                    </div>
                    <div class="col">
                        <p>We provide the best Doctors for your care as you desire.</p>
                    </div>
                </div>
                </div>
                <div class="col">
                    <!--
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    -->
                </div>
                <div class="col">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Appointments</a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li>
                            Telephone :- <br>0114523659
                        </li>
                        <li>
                            Address :- <br>Colombo, Sri Lanka
                        </li>
                        <li>
                            Email :- <br>channeldoc@yahoo.com
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li>
                            <a href="#">Privacy</a>
                        </li>
                        <li>
                            <a href="#">Policy</a>
                        </li>
                        <li>
                            <a href="#">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="#">Partners</a>
                        </li>
                        <li>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-footer text-muted">
                    All rights Reserved to Group 3
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

