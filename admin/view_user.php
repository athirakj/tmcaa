<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Directory</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!--<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />--> 
<!-- Custom Theme files -->
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
  
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
 

	</head>
<body>
<div id="wrapper">
         <?php require_once('classes/class_db.php'); ?>

         <?php require_once('includes/side_nav.php'); ?>

		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

 	<!--grid-->
 	<div class="validation-system">
  <!--banner-->	
		    <div class="banner">		   
				<h2>
				<a href="register.php">Dashboard</a>
                				<i class="fa fa-angle-right"></i>
				<span>View User Profile</span>

				</h2>
		    </div>
		<!--//banner-->
	
 		<div class="validation-form">
 	<!---->
  <?php 
 	  if(isset($_GET['viewitem']))
{
 $sqla="select * from registered_stu  where student_id=".$_GET['viewitem']."";
$res1=mysqli_query($db,$sqla);

$row=mysqli_fetch_array($res1)

 ?>
 
 <table  class="view-user">
 <tr>
 <td> Profile Photo</td>
 <td> <?php
// $content = stripslashes($row['image']); header('Content-type: image/jpeg'); echo $content;
//  echo '<img src="data:image/jpeg;base64,'.base64_encode( stripslashes($row['image']) ).'" hieght="200" width="200"/>';
         <p class="w3-center">
          
          $encoded_image = base64_encode($row['image']);
          echo "<img src='data:image/png;base64,{$encoded_image}' class='w3-circle' style='height:106px;width:106px' alt='Avatar'>";
         
         <!-- <img src="https://www.w3schools.com/w3images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"> -->
        
        </p>
   ?> </td>  
 </tr>


 <tr>
 <td>Name</td>
 <td><?php echo $row['name']; ?></td>
 </tr>
 <tr>
 <td>Date Of Birth</td>
 <td><?php echo $row['dob']; ?></td>
 </tr>
 <tr>
 <td> Present Address</td>
 <td> <?php echo $row['present_add'];?></td>
 </tr>
  <tr>
 <td> Permenent address</td>
 <td> <?php echo $row['permenent_add'];?></td>
 </tr>
  <tr>
 <td> Medical college From which You Graduated</td>
 <td> <?php echo $row['previous'];?></td>
 </tr>
  <tr>
 <td> Email ID</td>
 <td> <?php echo $row['email'];?></td>
 </tr>
  <tr>
 <td> Residence Number</td>
 <td> <?php echo $row['phone'];?></td>
 </tr>
   <tr>
 <td>Mobile Number</td>
 <td> <?php echo $row['mobile'];?></td>
 </tr>
  <tr>
 <td> Whatsapp Number</td>
 <td> <?php echo $row['whatsapp'];?></td>
 </tr>
  <tr>
 <td> Telegram Number</td>
 <td> <?php echo $row['telegram'];?></td>
 </tr>
  <tr>
 <td> Facebook ID</td>
 <td> <?php echo $row['facebook'];?></td>
 </tr>
  <tr>
 <td>Membership Number</td>
 <td> <?php echo $row['membership'];?></td>
 </tr>
  <tr>
 <td>Previous Expeience wih us</td>
 <td> <?php echo $row['experience'];?></td>
 </tr>
  <tr>
 <td>Registration Date </td>
 <td> <?php echo $row['registered_on'];?></td>
 </tr>
   <tr>
 <td> DD Number</td>
 <td> <?php echo $row['dd'];?></td>
 </tr>
  <tr>
 <td> Paytm Number</td>
 <td> <?php echo $row['paytm'];?></td>
 </tr>
  <tr>
 <td> Google Pay Number</td>
 <td> <?php echo $row['gpay'];?></td>
 </tr>

 
 </table>

     <?php
}

?>
 
 
 	<!---->
 </div>
 </div>

 </div>
		</div>
	   	</div>
       
     </body>
</html>

