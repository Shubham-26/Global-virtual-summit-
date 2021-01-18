<?php

Include_once 'connection.php';

session_start();
error_reporting(0);
          
    $userID=$_SESSION['id'];
                
                       

// This Operation is use for Video Upload..
if(isset($_POST["btn_submit"]))
    {
    
    $target_dir = "Upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $filename =basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    if(!empty($_POST['BlogBlogTitle']) && !empty($_POST['Quote']) && !empty($_POST['BlogContent']))
    {
    
    
    $BlogTitle=( $_POST['BlogBlogTitle']);
    $BlogQuote=($_POST['Quote']);
    $BlogContent=($_POST['BlogContent']);
    
    date_default_timezone_set("Asia/Calcutta");
    $date = date('m/d/Y h:i:s', time());


    $Query="INSERT INTO blogs(BlogTitle,BlogQuote,BlogContent,file_name,create_date,userID)
            VALUES('$BlogTitle','$BlogQuote','$BlogContent','$filename','$date','$userID')";

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
    echo "File is not a videoFormet . " . $check["mime"] . ".";
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
if ($_FILES["fileToUpload"]["size"] > 500000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

/*
// Allow certain file formats
if($imageFileType != "mp4" && $imageFileType != "Avi" && $imageFileType != "WMv"
&& $imageFileType != "gif" ) {
  echo "Sorry, only videoFormet files are allowed.";
  $uploadOk = 0;
}
*/

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