<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChannelDoc</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/dashboard.css')?>">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>
<body>

<!-- Nav -->
<!-- <img src="<?= base_url('/assets/images/p5.jpg')?>" class="bg" alt="bg Img"> -->
<div class="wrapper">
    <div class="sidebar">
      <div class="logo_content">
        <div class="logo">
          <div class="logo_name">
            <h3 class="pic">My Profile</h3>
            <!-- upload image -->
            <!-- <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload"></label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url('http://i.pravatar.cc/500?img=7');">
                    </div>
                </div>
            </div> -->
            <!-- end of upload image -->
            <h4 class="name">Name</h4>
          </div>
        </div>
      </div><br>
  
    <!--directions of the navigation buttons-->
      <div class="side_nav">
        <ul>
          <li>
          <a href="">
            <i class='bx bx-user-circle' ></i>
            <span class="tablinks" onclick="openCity(event, 'Profile')" id="defaultOpen">Users</span>
          </a>
          </li>
          <li>
          <a href="<?php echo base_url('Admin/approval')?>">
            <i class='bx bx-user-circle' ></i>
            <span class="tablinks" onclick="openCity(event, 'Approval')" id="defaultOpen">Approval</span>
          </a>
          </li>
          <li>
          <a href="#">
            <i class='bx bxs-report'></i>
            <span class="tablinks" onclick="openCity(event, 'Reports')">Reports</span>
          </a>
          </li>
          <li>
            <a href="<?php echo base_url('Logout/logout')?>">
            <i class='bx bx-log-out'></i>
            <span class="links_name"> Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- <div class="main">
      <div class="tabcontent" id="Profile">
        <h2>User Managment</h2>

                <!-- Practitioner Accounts Waiting for Approval
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

                <!-- Practitioner Approved Accounts
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
      </div>
    </div> -->
    
  </div>

  <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>

        // //imgage upload js
        // function readURL(input) {
        //     if (input.files && input.files[0]) {
        //         var reader = new FileReader();
        //         reader.onload = function(e) {
        //             $('#imagePreview').css('background-image', 'url('+e.target.result +')');
        //             $('#imagePreview').hide();
        //             $('#imagePreview').fadeIn(650);
        //         }
        //         reader.readAsDataURL(input.files[0]);
        //     }
        // }
        // // $("#imageUpload").change(function() {
        // //     readURL(this);
        // // });



        // Move to the different pages by buttons in navigation side bar
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();


    </script>

  

</body>
</html>