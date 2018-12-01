<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMCAA</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/register-front-page.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<!---------header section--------->
<?php include ('includes/head-section.php'); ?>
<?php include('admin/classes/class_db.php'); ?>

<!---------Title section--------->
<div class="container-fluid title-bar">
  <div class="container">
    <div class="row">
    <div class="col-md-8">
      <h2>Online Registration</h2></div>
      <div class="col-md-4" align="right"><a href="attachments/register-form.pdf"><img src="images/download.png" class="img-responsive" id="register"/ ></a></div>
    </div>
  </div>
</div>
<!-------end Title section------->
<!-------content secton---------->
<div class="container">
<div class="row">
<div class="col-md-12">
<?php
if(isset($_POST['submit'])) 
{	
 /*?>$check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false){<?php */ 
        $image = $_FILES['photo']['tmp_name'];
       // $imgContent = addslashes(file_get_contents($image));
                $imageData=file_get_contents($image);
        $imgContent = mysqli_real_escape_string($db,$imageData);
		//echo $imgContent;
	//	$imgContent = mysqli_real_escape_string($db, $imgContent);
	//	echo $imgContent;
	$sql_one="insert into registered_stu(name,dob,present_add,permenent_add,previous,email,phone,mobile,whatsapp,telegram,facebook,membership,image,experience,dd,paytm,gpay,status,registered_on)values('$_POST[name]','$_POST[dob]','$_POST[presentaddress]','$_POST[paddress]','$_POST[yr]','$_POST[email]','$_POST[phn]','$_POST[mobile]','$_POST[wnumber]','$_POST[tnumber]','$_POST[facebook]','$_POST[member]','{$imgContent}','$_POST[about]','$_POST[dd]','$_POST[paytm]','$_POST[gpay]',1,now())";
	//echo "hello testing " .$sql_one."-test";
	//echo $sql_one ;
	//echo die();
 $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'; $pass = array(); //remember to declare $pass as an array 
 $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache 
 for ($i = 0; $i < 8; $i++) { $n = rand(0, $alphaLength); $pass[] = $alphabet[$n]; } 
  $pas= implode($pass); 
	
	$sql_one2="insert into login (user_type,username,password,status) values ('student','$_POST[email]','{$pas}',1)";
	$result=mysqli_query($db,$sql_one);
	$result2=mysqli_query($db,$sql_one2);
	send_email($_POST[email],$pas);
	echo '<div class="alert alert-success alert-dismissible" align="center" style="font-size:16px;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Successfully Registered ! Your login Details send to your email</strong><br> Get in touch with us <br> Whatsapp Number : 9539989204<br> Join with us on <a href=" https://www.facebook.com/tmcaa.cme">Facebook</a></div>';
	//	echo '<meta http-equiv="Refresh" Content="0; URL=#">';
//echo $sql_one;
//die();
}

if(isset($_POST['login']))
{
	$sql_one="select * from login where username = '$_POST[email]' and password = '$_POST[password]'";
	
	$sql_two="select * from registered_stu where email = '$_POST[email]' limit 1";

	$result=mysqli_query($db,$sql_one);
if	($result->num_rows>0)	
{
	$result2=mysqli_query($db,$sql_two);	
	$row2 = mysqli_fetch_assoc($result2);
	session_start();
	$_SESSION["id"] = $_POST[email];
	$_SESSION["payment_status"] = $row2['payment_status'];
	$row = mysqli_fetch_assoc($result);
if( $row['user_type'] =="admin")
header("Location: admin/index.php");
else
header("Location: student/index.php"); 
}
else
{
	
	echo '<script language="javascript"> alert("Login Failed"); </script>';
}
}


 function send_email($email,$Password)
			{
				$to      = $email;
				$subject = "Login Details";
			//	$link    = SITE_PATH .'activate.php?id='.base64_encode($id);

				$message = '
			<html>
				<head>
				<title>Qatarbedspace Email</title>			
				</head>
				<body>
				<table>
				<tr>
				<td>
				UserName</td>
				<td>
				  "'.$email.'"	
				</td>
				</tr>
							<tr>
				<td>
				Password</td>
				<td>
				  "'.$Password.'"	
				</td>
				</tr>
				</table>
				</body>
				</html>'
				;
				
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				
				// More headers
				$headers .= 'From: <info@mediacrow.com>' . "\r\n";
				//$headers .= 'Cc: bmidhunbabu@live.com' . "\r\n";
				
				
				if(mail($to,$subject,$message,$headers))
				return TRUE;
			}
			



?>
<h4>Personal Details</h4>
<form action="#" method="post" enctype="multipart/form-data">
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
              <label class="control-label">Mobile Number *</label>
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
              <input type="file"  name="photo" >      									
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
             <h4>Payment Details</h4>
             <br />
             <p>Provide anyone of the method to pay and the details here. If you are a registered member then you have 1000/- reduction in registration fee.</p>
             <div class="vali-form">
            <div class="col-md-4 form-group1">
              <img src="images/dd.png" />
            </div>
            <div class="col-md-5 form-group1">
              <label class="control-label">DD Number</label>
              <input type="text" name="dd" >
            </div>
             
            <div class="col-md-5 form-group1 form-last">
              <label class="control-label"><b> Our Bank Details </b></label>
              <p>CME Programmefor Junior Doctors<br />
(Payable at Thrissur)</p>
            </div>
            <div class="clearfix"> </div>
            </div>
<div class="vali-form">
            <div class="col-md-4 form-group1">
              <img src="images/paytm.png" />
            </div>
            <div class="col-md-5 form-group1">
              <label class="control-label">Paytm Number</label>
              <input type="text" name="paytm" >
            </div>
            <div class="col-md-5 form-group1 form-last paytm">
              <label class="control-label"><b>Our Paytm Details</b></label>
<p class="paytm">Mr.Praveen - 9895460272</p>
<p>Mr.Rajeev - 9995330344</p>          
            </div>
            <div class="clearfix"> </div>
            </div>  
            
            <div class="vali-form">
            <div class="col-md-4 form-group1">
              <img src="images/g-pay.png" />
            </div>
            <div class="col-md-5 form-group1">
              <label class="control-label">GooglePay Number</label>
              <input type="text" name="gpay" >
            </div>
            <div class="col-md-5 form-group1 form-last">
              <label class="control-label"><b>Our Google Details</b></label>
<p class="paytm">Mr.Praveen - 9895460272</p>
<p>Mr.Rajeev - 9995330344   </p>       
            </div>
            <div class="clearfix"> </div>
            </div>         </div>
                       <div align="left"> <p><input type="checkbox" name="terms" required>I undertake to pay any additional amount in case the TMCAA modifies the Registration fees for the CME. I understand that the amount paid is not refundable and not Exchangeable. In the event of discontinuation of the CME programme by the organisers, the liability of TMCAA is limited to refund of CME Registration Fee, less the actual expenditure incurred to the TMCAA</p> <BR></div>
 
            <div class="col-md-12 form-group" style="margin-top:15px;" align="center">
              <input type="submit" class="btn btn-primary" value="Submit" name="submit">
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>  
        

        </form>

</div>
</div>
</div>
<!-------end content secton----------->

</body>
</html>
