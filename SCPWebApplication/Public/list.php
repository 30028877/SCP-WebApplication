<?php session_start();//initiating the sessions ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
     <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <?php include 'header.php'; ?>
    <title>Total Subjects</title>
    <?php include '../Private/connect.php'; ?> <!-- database connection -->
    <?php include '../Private/select.php'; ?> <!-- selection of all data -->
  </head>
  <body background="../Private/uploads/HD_BG_SCP.jpg">  <!--display the back ground inage to the body content -->
  <div style="background-color:white"> <!-- display white background for datatable -->
<table class="table table-border table-hover dt-responsive dataTable" id="tableid" style="width:100%"> <!-- datatable start -->
  <thead>
    <tr>      
      <th scope="col">Item Number</th>
      <th scope="col">Object Class</th>
      <th scope="col">Image</th> 
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>

    <!-- insertion alert message -->
    <?php if(!empty($_SESSION['success'])) {      
      $sessionvalue=($_SESSION['success']=="1")?$_SESSION['success']:"";
    if($sessionvalue=="1")
    { ?>
       <tr>
         <th colspan="5">   
           <div  class="alert alert-success" id="success-alert">    
           <button type="button" class="close" data-dismiss="alert">x</button>
           <strong>Successfully added the new subject item </strong>
           </div>   
         </th>
       </tr>
   <?php }}  unset($_SESSION['success']); ?>

      <!-- deletion alert message -->
   <?php if(!empty($_SESSION['delete'])) {      
      $sessionvalue=($_SESSION['delete']=="1")?$_SESSION['delete']:"";
    if($sessionvalue=="1")
    { ?>
       <tr>
         <th colspan="5">   
           <div  class="alert alert-danger" id="danger-alert">    
           <button type="button" class="close" data-dismiss="alert">x</button>
           <strong>Successfully deleted the subject item </strong>
           </div>   
         </th>
       </tr>
   <?php }} unset($_SESSION['delete']); ?>


  </thead>
  <tbody>
  <?php while($row = $result->fetch_assoc()): ?> <!-- fetch each row from result -->
    <tr>
      <!-- <th scope="row">1</th> -->
      <td><?php echo $row['item_no'];?></td>
      <td><?php echo $row['objectclass'];?></td>
      <?php
          if(empty($row['image_path']))
          { ?>
            <td> <img src="../Private/uploads/NO_Image.png" width="40" height="40"> </td>
         <?php }
          else{ ?>            
            <td> <img src="<?php echo $row['image_path'];?>" width="40" height="40"> </td>
         <?php }
      ?>      
      <td><?php echo $row['created_date'];?></td>
      <td><a href="display.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-icon icon-left"> <i class="entypo-info"></i>View</a>   <a href="../Private/delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure,you want to delete ?')" class="btn btn-danger btn-icon icon-left "> <i class="entypo-trash"></i>Delete</a>  </td>
    </tr>
  <?php endwhile; ?>
  </tbody>
</table>
</div>
     <?php include 'footer.php'; ?> <!-- including the footer layout -->
  </body>
  <!-- alert messge after insertion and deletion -->
  <script type="text/javascript">
    $(document).ready(function(){
       $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
       $("#success-alert").slideUp(500);
       });
       $("#danger-alert").fadeTo(2000, 500).slideUp(500, function() {
       $("#danger-alert").slideUp(500);
       });    
   
      }); 
    </script> 
    

      <!-- datatable jqiery -->
    <script type="text/javascript">
    $(document).ready(function(){
      $("#tableid").DataTable({
        // responsive: true
      });
      
    });
    </script>
    <!-- <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script> -->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  </html> 
