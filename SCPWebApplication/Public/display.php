<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCP Item</title>
    <?php include 'header.php'; ?>
    <style>
      img {      
      border:8px solid #ffffff;
      /* background-color: #e6e6e6; */
      }
    </style>

</head>
<body>
    <?php include '../Private/connect.php'; ?> <!-- database connection -->
    <?php 
        $id=(int)$_GET['id'];
        if(isset($_GET['id']))
        {     ?>
         <?php $resultbyid=$mysqli->query("select * from subject where id=$id") or die($mysqli->error); // select all the data in a particular id
         $row = $resultbyid->fetch_assoc(); 
         $path= $row['image_path'];

            //strip out \n and replace with linebreaks
            $procedures = str_replace('\n', '<br><br>', $row['procedures']);
            $description = str_replace('\n', '<br><br>', $row['description']);
            $reference = str_replace('\n', '<br><br>', $row['reference']);
            $addendum = str_replace('\n', '<br><br>', $row['addendum']);
            $additionalnote = str_replace('\n', '<br><br>', $row['additionalnote']);
            $appendix = str_replace('\n', '<br><br>', $row['appendix']);

            // $procedures = str_replace(" ", "&nbsp;", $row['procedures']);
            // $description = str_replace(" ", "&nbsp;", $row['description']);
            // $reference = str_replace(" ", "&nbsp;", $row['reference']);
            // $addendum = str_replace(" ", "&nbsp;", $row['addendum']);
            // $additionalnote = str_replace(" ", "&nbsp;", $row['additionalnote']);
            // $appendix = str_replace("          ", "&nbsp;", $row['appendix']);
            
            
            
            ?>

         <div class="text-white">
          <h2 class="text-white">Item No : <?php echo $row['item_no']; ?> </h2>
            <br>

            <?php if(!empty($row['objectclass'])) // Object Class
         { ?>
            <h3 class="text-white">Object Class: <?php echo $row['objectclass']; ?></h3>
            <br>
            
            <br>
         <?php } ?>


         <?php if(!empty($procedures)) // Special Contamination Procedure
         { ?>
            <h3 class="text-white">Special Containment Procedure:</h3>
            <br>
            <p><?php echo $procedures; ?></p>
            <br>
         <?php } ?>
         
         <?php if(!empty($path)){ ?>
          <img src="<?php echo $path; ?>"  width="auto" height="auto" style="border-style: solid;">
          <?php echo "<br>"; ?>
         <?php } ?>

         <?php if(!empty($description)) // Description
         { ?>
            <br>
            <h3 class="text-white">Description:</h3>
            <br>
            <p><?php echo $description; ?></p>
            <br>
            <br>

         <?php } ?>

         <?php if(!empty($reference)) // Reference
         { ?>
            <br>
            <h3 class="text-white">Reference:</h3>
            <br>
           <p><?php echo $reference; ?></p>
            <br>
         <?php }?>

         <?php if(!empty($addendum)) // Addendum
         { ?>
            <br>
            <h3 class="text-white">Addendum:</h3>
            <br>
           <p><?php echo $addendum; ?></p>
            <br>
         <?php }?>

         <?php if(!empty($additionalnote)) // Additional note
         { ?>
            <br>
            <h3 class="text-white">Addtional Note:</h3>
            <br>
           <p><?php echo $additionalnote; ?></p>
            <br>
         <?php }?>

         <?php if(!empty($appendix)) // Appendix 
         { ?>
            <br>
            <h3 class="text-white">Appendix:</h3>
            <br>
           <p><?php echo $appendix; ?></p>
            <br>
         <?php }?>

         </div>
        <?php }?>                

    


<?php include 'footer.php'; ?>

</body>
</html>