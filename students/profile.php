<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
td{
padding:15px;
border-bottom: 1px solid #eee;
}
</style>
</head>

<body class="w3-theme-l5">

	<?php
	include('classes/class_db.php');
session_start();
$sql="select * from registered_stu where student_id=".$_SESSION["StuData"]["student_id"]."";
$res1=mysqli_fetch_assoc(mysqli_query($db,$sql));
$_SESSION["StuData"] = $res1;
	
	?>
<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Logo</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
    
  </div>
  
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>
<?php require_once('classes/class_db.php'); ?>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="https://www.w3schools.com/w3images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>

         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><?= $_SESSION["StuData"]["name"];?> </p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> <?= $_SESSION["StuData"]["present_add"];?></p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i><?= $_SESSION["StuData"]["mobile"];?></p>
        </div>
      </div>
      
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
                <a href="edit.php?upitem=<?= $_SESSION["StuData"]["student_id"];?>">  <button style="margin-bottom:10px;" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> Edit Profile</button></a>
                  <button style="margin-bottom:10px;" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> Change Password</button>

         <a href="../user_login.php" style="text-decoration:none;"> <button class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> Logout</button></a>
        </div>      
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>Welcome to the CME Programme...</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">You can see your complete details here...</h6>
            </div>
          </div>
        </div>
      </div>
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="https://www.w3schools.com/w3images/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <h4><?= $_SESSION["StuData"]["name"];?></h4><br>
        <hr class="w3-clear">
<table>
 <tr> <td>Date Of Birth</td><td><?= $_SESSION["StuData"]["dob"];?></td> </tr>
 <tr><td> Present Address</td><td> <?= $_SESSION["StuData"]["present_add"];?></td></tr>
  <tr><td> Permenent address</td><td><?= $_SESSION["StuData"]["permenent_add"];?></td></tr>
  <tr><td> Medical college From which You Graduated</td> <td><?= $_SESSION["StuData"]["previous"];?></td></tr>
  <tr><td> Email ID</td><td> <?= $_SESSION["StuData"]["email"];?></td></tr>
  <tr> <td> Residence Number</td><td><?= $_SESSION["StuData"]["phone"];?></td> </tr>
   <tr> <td>Mobile Number</td><td> <?= $_SESSION["StuData"]["mobile"];?></td></tr>
  <tr> <td> Whatsapp Number</td><td> <?= $_SESSION["StuData"]["whatsapp"];?></td></tr>
  <tr> <td> Telegram Number</td><td> <?= $_SESSION["StuData"]["telegram"];?></td></tr>
  <tr> <td> Facebook ID</td> <td> <?= $_SESSION["StuData"]["facebook"];?></td> </tr>
  <tr> <td>Membership Number</td> <td> <?= $_SESSION["StuData"]["membership"];?></td> </tr>
  <tr> <td>Previous Expeience wih us</td> <td> <?= $_SESSION["StuData"]["experience"]; ?></td> </tr>
 </tr>
 <tr> <td> DD Number</td><td><?= $_SESSION["StuData"]["dd"];?></td> </tr>
  <tr> <td> Paytm Number</td><td><?= $_SESSION["StuData"]["paytm"];?></td>
 </tr> 
  <tr><td> Google Pay Number</td> <td> <?= $_SESSION["StuData"]["gpay"];?></td></tr>

</table>
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
            </div>
            <div class="w3-half">
          </div>
        </div>
      </div>
      
        

      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Latest News :</p>
          <img src="https://www.w3schools.com/w3images/forest.jpg" alt="Forest" style="width:100%;">
          <p><strong>Comming Soon</strong></p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
        </div>
      </div>
      <br>
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

 
<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script></body>
</html>