<?php 
  session_start();  
  if(!isset($_SESSION["username"]))  
  {  
    session_destroy();
    header("location:index.php?action=login");  
  }
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- <link rel="title icon" href="images/title-img.png"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title>User Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light" style="%">
      <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
          <div class="row">
            <!-- sidebar -->
            <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
              <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">User  UI</a>
              <div class="bottom-border pb-3">
                
                <a  class="text-white"><?php echo " User : "; echo $_SESSION["username"];  ?></a>
                
              </div>
              <ul class="navbar-nav flex-column mt-4">
                <li class="nav-item"><a href="logout.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas  text-light fa-lg mr-3"></i>Logout </a></li>
              </ul>
            </div>
            <!-- end of sidebar -->
        
            <!-- top-nav -->
            <div class="col-sm-12 d-flex justify-content-end">
            <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap  p-0">
              <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> 
              <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                  <a class="nav-link" href="logout.php">Logout</a>
                </li>
              </ul> -->
            </nav>
            </div>
            <!-- end of top-nav -->
          </div>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->
   
  </body>
  <!--TODO User based functions -->


  <!-- DIV for uploading dataset to the database. -->
  <body class="uploader" >
    <div class="container1" style="float:right; width: 70%;">
     <form action="upload.php" method="post" enctype="multipart/form-data">
      Select Data File to Upload:
        <input type="file" name="file">
        <input type="submit" name="submit" value="Upload">
       <!-- <button onclick="myFunction()"> Upload</button>  -->
      </form>
    </div>
  </body>
  
</html>