<?php include 'header.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <title>Add new</title>
    <link rel="stylesheet" href="../Private/css/custom.css">
    <?php include '../Private/connect.php'; ?>
    <?php include '../Private/insertion.php'; ?>
  </head>
  <body background="../Private/uploads/HD_BG_SCP.jpg">  
    <form class="container" enctype="multipart/form-data" action="../Private/insertion.php" method="POST">
      

      <div class="form-group">
       <label class="text-white">Subject Number *</label>
       <input type="text" name="itemno" placeholder="eg:SCP-111" title="eg:SCP-111" maxlength=7 required="required" class="form-control" style="background-color:#b4b8b7">
      </div>

      <div class="form-group">
        <label class="text-white">Object Class *</label>
        <select class="form-control" placeholder="eg:SCP111" data-toggle="tooltip" title="Object Class" name="objectclass" style="background-color:#b4b8b7" required="required">
        <option>Select</option>
         <option>Euclid</option>
         <option>Safe</option>
         <option>Danger</option>         
        </select>
      </div>

      <div class="form-group">
        <label class="text-white">Upload Image</label>
        <div class="custom-file">         
         <input type="file" class="custom-file-input" name="userfile" style="background-color:#b4b8b7">
         <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
      </div>
      
      <div class="form-group">
       <label class="text-white">Contamination Procedures</label>
       <textarea class="form-control" name="procedures" data-toggle="tooltip"  title="Special Contamination Procedures" placeholder="Seperate new line with \n" rows="3" style="background-color:#b4b8b7"></textarea>
      </div>
      
      <div class="form-group">
       <label class="text-white">Description</label>
       <textarea class="form-control" name="description" data-toggle="tooltip"  title="Description" placeholder="Description--Seperate new line with \n" rows="5" style="background-color:#b4b8b7"></textarea>
      </div>
      
      <div class="form-group">
       <label class="text-white">Reference</label>
       <textarea class="form-control" name="reference" data-toggle="tooltip"  title="Reference" placeholder="Reference--Seperate new line with \n" rows="5" style="background-color:#b4b8b7"></textarea>
      </div>

      <div class="form-group">
       <label class="text-white">Additional Note</label>
       <textarea class="form-control" name="additionalnote" data-toggle="tooltip"  title="Additional Note" placeholder="Additional Note--Seperate new line with \n" rows="3" style="background-color:#b4b8b7"></textarea>
      </div>
      
      <!-- <div class="form-group">
       <label class="text-white">Addendum</label>
       <textarea class="form-control" name="addendum" data-toggle="tooltip"  title="Addendum" placeholder="Addendum" rows="5" style="background-color:#b4b8b7"></textarea>
      </div>       -->

      <div class="form-group">
       <label class="text-white">Appendix</label>
       <textarea class="form-control" name="appendix" data-toggle="tooltip"  title="Appendix" placeholder="Appendix--Seperate new line with \n" rows="5" style="background-color:#b4b8b7"></textarea>
      </div>


      <div class="form-group">       
       <input type="submit" class="btn btn-primary" name="submit"/>
      </div>

     </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
   </body>
  </html>
  <?php include 'footer.php'; ?>




