<?php 
session_start();
  include 'connect.php';
    if(isset($_POST['submit']))  //check wheater the form is submited.
    {   
        $itemNumber=$_POST['itemno'];
        
          $objectclass=$_POST['objectclass'];
        // $procedures= mysqli_real_escape_string($_POST['procedures']);
        $procedures= addslashes($_POST['procedures']);
        $description=addslashes($_POST['description']);
        $reference=addslashes($_POST['reference']);
        $addendum=addslashes($_POST['addendum']);
        $appendix=addslashes($_POST['appendix']);
        $additionalnote=addslashes($_POST['additionalnote']);
        $createddate=date('Y-m-d H:i:s');
        $modifieddate=date('Y-m-d H:i:s');
        $isdelete=0;
        $isactive=1; 
       
    
        $uploaddir = "../Private/image/";
        
    
        $file=$_FILES['userfile'];
        $uploadfilePath="";
        if($file)
        {
          $fileName=$_FILES['userfile']['name'];
          $fileTempName=$_FILES['userfile']['tmp_name'];
          $fileSize=$_FILES['userfile']['size'];
          $fileError=$_FILES['userfile']['error'];
          $fileType=$_FILES['userfile']['type'];
      
          $fileExt=explode('.', $fileName);
          $fileActualExt=strtolower(end($fileExt));
          $allowed=array('jpg','jpeg','png');
           if(in_array($fileActualExt,$allowed))
           {
             if($fileError===0)
             {
                if($fileSize<1000000)
                {
                  $uploadfilePath = $uploaddir . basename($_FILES['userfile']['name']);
                  if(move_uploaded_file($fileTempName,$uploadfilePath))
                  {
                    // $result=$mysqli->query("insert into subject (item_no,objectclass,image_path,procedures,description,reference,addendum,appendix,additional_note,is_active,created_date,modified_date,is_delete) 
                    //               values('$itemNumber','$objectclass','$uploadfilePath','$procedures','$description','$reference','$addendum','$appendix','$additionalnote','$isactive','$createddate','$modifieddate','$isdelete')") or die($mysqli->error);
                    // header("Location: ../Public/list.php");
                    echo "File is valid, and was successfully uploaded.\n";   
                  }
                  else{
                    echo "Upload failed";
                  }
      
                }
                else{
                  echo "your file is big in size";
                }
             }
             else{
               echo "there is an error uploading file";
             }
           }
           else{
              echo "error";
           }
        }
         

        $result=$mysqli->query("insert into subject (item_no,objectclass,image_path,procedures,description,reference,appendix,additional_note,created_date) 
         values('$itemNumber','$objectclass','$uploadfilePath','$procedures','$description','$reference','$appendix','$additionalnote','$createddate')") or die($mysqli->error);
         if($result)
         {
          //  echo "Test";
          //  header("Location: ../Public/list.php");
          $_SESSION['success']="1";
           echo "<script>location='../Public/list.php'</script>";
         }        

    }      
        
       
?>