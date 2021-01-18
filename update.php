<?php

Include_once 'connection.php';

session_start();
error_reporting(0);
if (!isset($_SESSION['id']))
    {
        header("Location: login.php");
    } /*else if(!isset($_GET['id']))
        {
        header("Location: blog_loginUser.php");
        }


          
    $userID=$_SESSION['id'];
*/
                    

$Id=   $_SESSION['BlogId'];

if(isset($_POST["btn_Update"]))
    {
    
    $target_dir = "Upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $filename =basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    if(!empty($_POST['BlogTitle']) && !empty($_POST['Quote']) && !empty($_POST['BlogContant']))
    {
    
    
    $BlogTitle=( $_POST['BlogTitle']);
    $BlogQuote=($_POST['Quote']);
    $BlogContent=($_POST['BlogContant']);
   

    if(!empty($filename))
    {
    $FileQuery="SELECT file_name From blogs where id=' $Id ' ";
    $Execute2=mysqli_Query($con,$FileQuery);

     $row = mysqli_fetch_array($Execute2);

     $src=$row['file_name'];
  
         $tmpfile = 'Upload/'. $src;
         unlink($tmpfile);
    
    date_default_timezone_set("Asia/Calcutta");
    $date = date('d/Y h:i:s', time());
    

    $Query = "UPDATE blogs SET BlogTitle='$BlogTitle',BlogQuote = '$BlogQuote', BlogContent= '$BlogContent' , file_name = '$filename' , last_update = '$date'  WHERE id= $Id";
    }else
    {
       date_default_timezone_set("Asia/Calcutta");
       $date = date('d/Y h:i:s', time());
    

    $Query = "UPDATE blogs SET BlogTitle='$BlogTitle',BlogQuote = '$BlogQuote', BlogContent= '$BlogContent' , last_update = '$date'  WHERE id= $Id";
    } /*
    $Query="INSERT INTO blogs(BlogTitle,BlogQuote,BlogContent,file_name,userID)
            VALUES('$BlogTitle','$BlogQuote','$BlogContent','$filename','$userID')";
*/
    $Execute=mysqli_query($con,$Query);
    if($Execute)
    {
        header("Location: blog_loginUser.php");
    }
    else
    {
        echo "<h4>Record not save!</h4>";
    }
    
    
    }
    else
    {
        echo "<h4>Feeds are empty</h4>";
    }
    
    
    
   
 $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== true) {
   // echo "File is not a videoFormet . " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }


// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";

  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "bmp" ) {
  echo "Sorry, only image format files are allowed.";
  $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}

//This Operation is use for File Upload..

?>