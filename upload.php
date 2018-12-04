<?php
        
        //DB details
        $dbHost     = 'localhost:3307';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'doctors';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imageData=file_get_contents($image);
        $imgContent = mysqli_real_escape_string($db,$imageData);

      //  echo stripslashes($imgContent);

            // header("Content-type: image"); 
            // echo stripslashes($imgContent);
        /*
         * Insert image data into database
         */

        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
       // $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = $db->query("INSERT into registered_stu (image) VALUES ('$imgContent')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }

    $result = mysqli_query($db,"SELECT image,email FROM registered_stu WHERE student_id = (SELECT max(student_id) FROM registered_stu)");
    

        $imgData =mysqli_fetch_assoc( $result);
      //   echo stripslashes($imgData['image']);
        //Render image
        // header("Content-type: image/png"); 
        // echo stripslashes($imgData['image']);
       $encoded_image = base64_encode($imgData['image']);
       //echo $encoded_image;
//You dont need to decode it again.

 $Hinh = "<img src='data:image/png;base64,{$encoded_image}'>";


 echo $Hinh;
    
}
?>