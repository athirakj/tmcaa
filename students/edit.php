<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Profile</title>
<link href="../admin/css/style1.css" rel='stylesheet' type='text/css' />
<style>
.myform{
	width: 50%;
    margin: 0 auto;
    display: block;
}
.form-group1 input[type="text"],.form-group1 textarea{
	width:83%;
	    margin-bottom: 20px;
}
.vali-form{
	padding:0px;
}
</style>
</head>

<body>
<?php include ('../admin/classes/class_db.php'); ?>

<div class="validation-form myform">
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
              <label class="control-label">Name (In Block Letters)</label>
              <input type="text"  name="name" value="<?php echo $row['name'];?>">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Date Of Birth</label>
              <input type="text"  name="dob"  value="<?php echo $row['dob'];?>"/>
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Present Address</label>
              <input type="text" name="presentaddress" value="<?php echo $row['present_add'];?>">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Permenent Address</label>   
              <input type="text"  name="paddress" value="<?php echo $row['permenent_add'];?>">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Medical College from which you graduated & year * </label>
              <input type="text" name="yr" value="<?php echo $row['previous'];?>">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">E mail ID (In Block letters) *</label>
              <input type="text"  name="email" value="<?php echo $row['email'];?>">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Residence Number</label>
              <input type="text" name="phn" value="<?php echo $row['phone'];?>">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Mobile Number</label>
              <input type="text"  name="mobile" value="<?php echo $row['mobile'];?>">
            </div>
            <div class="clearfix"> </div>
            </div>
            
                        <div class="vali-form">
            <div class="col-md-4 form-group1">
              <label class="control-label">Whatsapp Number </label>
              <input type="text" name="wnumber" value="<?php echo $row['whatsapp'];?>">
            </div>
            <div class="col-md-4 form-group1 form-last">
              <label class="control-label">Telegram Number</label>
              <input type="text"  name="tnumber" value="<?php echo $row['telegram'];?>">
            </div>
            <div class="col-md-4 form-group1 form-last">
              <label class="control-label">Facebook ID </label>
              <input type="text"  name="facebook" value="<?php echo $row['facebook'];?>">
            </div>
            <div class="clearfix"> </div>
            </div>

            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Membership Number (if you are already a member)</label>
              <input type="text" name="member" value="<?php echo $row['membership'];?>">
            </div>
            <div class="clearfix"> </div>
            </div>

             <div class="clearfix"> </div><br />
            <div class="col-md-12 form-group1" style="width:100% !important;">
              <label class="control-label">Have you participated in previous TMCAA programs? If yes, give details. </label>
              <textarea  placeholder="Your Details..." name="about" value="<?php echo $row['experience'];?>"></textarea>
            </div>
             <div class="clearfix"> </div>
             <div class="pay">
             <div class="vali-form">
            <div class="col-md-4 form-group1">
                          <label class="control-label">Paytm Number</label>

              <input type="text" name="paytm" value="<?php echo $row['paytm'];?>">
            </div>
            <div class="col-md-4 form-group1">
              <label class="control-label">DD Number</label>
              <input type="text" name="dd" value="<?php echo $row['dd'];?>">
            </div>
             <div class="col-md-4 form-group1">
              <label class="control-label">GooglePay Number</label>
<input type="text" name="gpay" value="<?php echo $row['gpay'];?>">            </div>
           
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


		echo '<meta http-equiv="Refresh" Content="0; URL=profile.php">';

}				
?>
 	<!---->
 </div>
</body>
</html>