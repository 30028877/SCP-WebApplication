<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="../Private/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.6/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css"> <!--added for dattable mobile friendly -->
    <!-- <link rel="stylesheet" href="../Private/css/neon.css"> -->
    <link rel="stylesheet" href="../Private/css/entypo.css">
    <!-- <link rel="stylesheet" href="../Private/css/entypo-codes.css"> -->
    <link rel="stylesheet" href="../Private/css/entypo-embedded.css">
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/animations/scale.css"/>
    <style>
      body {
        background-image: url('../Private/uploads/HD_BG_SCP.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
    </style>
    <title>SCP - Subject Files</title>
  </head>
  <body class="container">
  <?php include '../Private/connect.php'; ?>  
<!-- menu row -->  
<div class="row">
   <div  class="col">
    <ul class="nav navbar-dark bg-dark"> 
      <li class="nav-item">
          <a class="nav-link" href="home.php">
          <img src="../Private/uploads/scp-logo-white.png" height="50" weight="50">
          </a>
      </li>
      <li class="nav-item active">
            <a class="nav-link text-white" href="home.php">
            Home
            </a>
      </li>
      <li class="nav-item">
            <a class="nav-link text-white" href="list.php">           
            List
            </a>
      </li>
      <li class="nav-item">
            <a class="nav-link text-white" href="create.php">
            Add New
            </a>
      </li>
    </ul>
    <hr width="100%">
   </div>
</div>



