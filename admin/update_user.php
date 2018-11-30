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
<?php include('classes/class_db.php');  ?>

         <?php require_once('includes/side_nav.php'); ?>

		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

 	<!--grid-->
 	<div class="validation-system">
  <!--banner-->	
		    <div class="banner">		   
				<h2>
				<a href="home.php">Dashboard</a>
				<i class="fa fa-angle-right"></i>
				<span>Update User</span>

				</h2>
		    </div>
		<!--//banner-->
	
 		<div class="validation-form">
 	<!---->
  <?php 
//	echo "test";
	  if(isset($_GET['upitem']))
{
//	echo "inner";
$sqla="select * from registered_stu where student_id=".$_GET['upitem']."";
$res1=mysqli_query($db,$sqla);

while($row=mysqli_fetch_array($res1))
{
//echo $row['muncipality'];
?>
    <form action="#" method="post" name="form13" id="form13">
      <input type="hidden" name="sta" value="<?php echo $row['student_id'];?>" />

         	<div class="vali-form" style="padding-bottom: 0;">      
            <div class="col-md-6 form-group1">
              <label class="control-label">Name (In Block Letters) *</label>
              <input type="text"  name="name" required>
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Date Of Birth *</label>
              <input type="text"  name="dob" required>
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Present Address</label>
              <input type="text" name="presentaddress">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Permenent Address</label>   
              <input type="text"  name="paddress">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Medical College from which you graduated & year * </label>
              <input type="text" name="yr" required="required">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">E mail ID (In Block letters) *</label>
              <input type="text"  name="email" required>
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Residence Number</label>
              <input type="text" name="phn" >
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Mobile Number</label>
              <input type="text"  name="mobile" required>
            </div>
            <div class="clearfix"> </div>
            </div>
            
                        <div class="vali-form">
            <div class="col-md-4 form-group1">
              <label class="control-label">Whatsapp Number </label>
              <input type="text" name="wnumber">
            </div>
            <div class="col-md-4 form-group1 form-last">
              <label class="control-label">Telegram Number</label>
              <input type="text"  name="tnumber" >
            </div>
            <div class="col-md-4 form-group1 form-last">
              <label class="control-label">Facebook ID </label>
              <input type="text"  name="facebook">
            </div>
            <div class="clearfix"> </div>
            </div>

            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Membership Number (if you are already a member)</label>
              <input type="text" name="member">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Attach your Passport size Photo *</label>
              <input type="file"  name="photo" required>      									
            </div>
            <div class="clearfix"> </div>
            </div>

             <div class="clearfix"> </div><br />
            <div class="col-md-12 form-group1" style="width:100% !important;">
              <label class="control-label">Have you participated in previous TMCAA programs? If yes, give details. </label>
              <textarea  placeholder="Your Details..." name="about"></textarea>
            </div>
             <div class="clearfix"> </div>
             <div class="pay">
             <div class="vali-form">
            <div class="col-md-4 form-group1">
                          <label class="control-label">Paytm Number</label>

              <input type="text" name="paytm" >
            </div>
            <div class="col-md-4 form-group1">
              <label class="control-label">DD Number</label>
              <input type="text" name="dd" >
            </div>
             <div class="col-md-4 form-group1">
              <label class="control-label">GooglePay Number</label>
<input type="text" name="gpay" >            </div>
           
            <div class="clearfix"> </div>
            </div>         </div>
                 
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group" style="margin-top:15px;">
              <input type="submit" class="btn btn-primary" value="Submit" name="update">
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>  
        </form>
     <?php
}
}
?>
  <?php
if(isset($_POST['update']))
{
	
	$sql_one="update registered_stu set name='$_POST[name]',dob='$_POST[dob]',present_add='$_POST[presentaddress]',permenent_add='$_POST[paddress]',previous='$_POST[yr]',email='$_POST[email]',phone='$_POST[phn]',mobile='$_POST[mobile]',whatsapp='$_POST[wnumber]',telegram='$_POST[tnumber]',facebook='$_POST[facebook]',membership='$_POST[member]',experience='$_POST[about]',dd='$_POST[dd]',paytm='$_POST[paytm]',gpay='$_POST[gpay]' where student_id='$_POST[sta]'";
	
	
	$re=mysqli_query($db,$sql_one);
//		echo $sql_one();
//	die();

		echo '<meta http-equiv="Refresh" Content="0; URL=index.php">';

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

