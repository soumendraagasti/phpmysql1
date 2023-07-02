<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>welconr to idiscuss-codding forems</title>
  </head>
  <body>
  <?php include 'partials\_dbconnect.php' ?>
  <?php include 'partials\_header.php' ?>
  
  <?php 
  $id= $_GET['catid'];
  $sql="SELECT * FROM `caterogies` WHERE  category_id=$id"; 
  $result= mysqli_query($conn, $sql);
  
  while($row=mysqli_fetch_assoc($result)){
    
    $catname = $row['category_name'];
    $catdesc = $row['category_description'];
  }
  
  ?>
 <?php
  $showAlert=false;
  $method= $_SERVER['REQUEST_METHOD'];
  if($method =='POST'){
    //insert thread into DB
    $th_title=$_POST['title'];
    $th_desc =$_POST['desc'];

    $th_title= str_replace("<", "&lt;", $th_title);
    $th_title= str_replace(">", "&gt;", $th_title);

    $th_desc= str_replace("<", "&lt;", $th_desc);
    $th_desc= str_replace(">", "&gt;", $th_desc);

    $sno = $_POST["sno"];
    $sql="INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '$sno', current_timestamp())";
    $result= mysqli_query($conn, $sql);
    $showAlert=true;
    if($showAlert){
      echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success</strong> your thread has been added in forum please wait some one will respond.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
  }
 ?>

  <div class="container my-4">
  <div class="jumbotron">
  <h1 class="display-4">welcome to the <?php echo $catname; ?> forems</h1>
  <p class="lead"><?php echo $catdesc; ?></p>
  <hr class="my-4">
  <p>this forum is for knowledge pourpose and sharing the knowledge from pear to pour to eachother.<br>
  Forum rules and posting guidelines..<br>
Keep it friendly.<br>
Be courteous and respectful. Appreciate that others may have an opinion different from yours.<br>
Stay on topic. ...<br>
Share your knowledge. ...<br>
Refrain from demeaning, discriminatory, or harassing behaviour and speech.  
    
  </p>
  <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
</div>
  </div>
  
  <?php
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){ 
  echo '<div class="container">
  <h1 class="py-3">Start a discussion</h1>
  <form action="'. $_SERVER["REQUEST_URI"]. '"  method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Problem title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Enter your problem">
    <small id="emailHelp" class="form-text text-muted">keep you title as short as possible</small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">eleborate your Problem</label>
    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
    <input type="hidden" name="sno" value="'. $_SESSION["sno"] .'">
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>

  </div>';
  }
  else{
    echo ' 
    <div class="cointainer">
    <h1 class="py-3">Start a discussion</h1>
    <h2 class="lead">you are not logged in.please login to start the discussion</h2>
           </div> ';
  }
  ?>
 

  <!-- brows question part-->
  <div class="container"> 
    <h1 class="py-3">brows questions</h1>
    <?php 
  $id= $_GET['catid'];
  $sql="SELECT * FROM `threads` WHERE  thread_cat_id=$id"; 
  $result= mysqli_query($conn, $sql);
  $noResult = true;
  while($row=mysqli_fetch_assoc($result)){
    $noResult = false;
    $title = $row['thread_title'];
    $desc = $row['thread_desc'];
    $id= $row['thread_id'];
    $thread_time= $row['timestamp'];
    $thread_user_id= $row['thread_user_id'];
    $sql2 = "SELECT user_email FROM `users` WHERE sno='$thread_user_id'";
    $result2= mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
    
    
    echo '<div class="media my-3">
    <img src="img/userdefault.jpg" width="54px" class="mr-3" alt="...">
    <div class="media-body">
    <p class="font-weight-bold my-0">'. $row2['user_email'] .' at ' .$thread_time. ' </P>
      <h5 class="mt-0"> <a class="text-dark" href="thread.php?threadid='. $id.'" >' .$title.' </a> </h5>
      ' .$desc.'
    </div>
  </div>';

  }
  if($noResult){
    echo'  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <p class="display-4">no threads Found</p>
      <p class="lead">you are the the first persion ask the question </p>
    </div>
  </div> ';
  }
  ?>

  
  
  </div>

  <?php include 'partials\_footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>