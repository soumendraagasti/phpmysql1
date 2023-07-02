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
  
  <!--slider starts hear-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/image1.jpg" width="1500" height="400" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/reactjs.jpg" width="1500" height="400" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/image3.jpg" width="1500" height="400" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/flusk.jpg" width="1500" height="400" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

   <!--container starts hear-->
  <div class="container my-4">
    <h2 class="text-center my-4">i discuss- browse categories</h2>
    <div class="row my-4">
      <!-- fetch all the categories-->
      <!--use the forloop to iterate through categories-->
      <?php $sql="SELECT * FROM `caterogies`"; 
      $result= mysqli_query($conn, $sql);
      while($row=mysqli_fetch_assoc($result)){
        //echo $row['category_id'];
        //echo $row['category_name'];
        $id=$row['category_id'];
        $cat=$row['category_name'];
        $desc=$row['category_description'];
        echo '<div class="call-md-4 my-2">
              <div class="card" style="width: 18rem;">
              <img src="img/card-'.$id.'.jpg "class="card-img-top" alt="image from category">
              <div class="card-body">
              <h5 class="card-title"><a href="threadlist.php?catid=' . $id .' ">' . $cat .'</a> </h5>
              <p class="card-text">' . substr($desc,0, 90) .'.... </p>
              <a href="threadlist.php?catid=' . $id .'" class="btn btn-primary">view threads</a>
              </div>
              </div>
              </div>';
      }
            
      ?>

    </div>
  </div>

  <?php include 'partials\_footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>