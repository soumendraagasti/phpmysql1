<!doctype html>
<html lang="en">
  <head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>welconr to idiscuss-codding forems</title>

    <style>
        .page-heading {
	margin: 0px 10px; padding: 120px 0px; text-align: left; background-position: center center;
	background-repeat: no-repeat; background-size: cover; background-color: #4d4844;
}
.page-heading .text-content h4 {
	color: #f48840; font-size: 18px; text-transform: uppercase; font-weight: 900;letter-spacing: 0.5px;
	margin-bottom: 15px;
}

.page-heading .text-content h2 {
	color: #f48840; font-size: 36px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;
}
.social-icons {
	margin-top: 100px; text-align: center; background-color: #20232e; padding: 0px 0px;
}
.social-icons {
	padding-bottom: 20px; margin-bottom: 0px; border-bottom: 1px solid rgba(250,250,250,0.15);
}

.social-icons li {
	display: inline-block; margin-right: 30px;
}

.social-icons li:after {
	content: "|"; color: #fff; margin-left: 30px;
}

.social-icons li:last-child {
	margin-right: 0px;
}

.social-icons li:last-child::after {
	display: none;
}

.social-icons li a {
	font-size: 14px; text-transform: uppercase; color: #fff; font-weight: 500; letter-spacing: 0.25px;
	transition: all .3s;
}

.social-icons li a:hover {
	color: #f48840;
}
.sidebar-item {
	margin-top: 50px;
}
.contact-information {
	margin-left: 30px;
}
.contact-information ul li {
	margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px solid #eee;
}

.contact-information ul li:last-child {
	margin-bottom: 0px; padding-bottom: 0px; border-bottom: none;
}

.contact-information ul li h5 {
	font-size: 19px; font-weight: 900; color: #20232e; line-height: 30px;
}

.contact-information ul li span {
	display: block; font-size: 14px; color: #aaa; margin-top: 8px;
}
.contact-information {
		margin-left: 0px; margin-top: 60px;
	}
  .container{width:60%;}
  .container h1{text-align:center;}
  .title h3{margin-top:15px;}
  .main_box{margin-top:30px; border:1px solid #98A1A4;padding:2%;}
  .mr25{margin-top:10px;}

</style>
  </head>
  <body>
  <?php include 'partials\_dbconnect.php' ?>
  <?php include 'partials\_header.php' ?>
  <?php
$sql="select * from like_dislike";
$res=mysqli_query($conn,$sql);
?>
  <!--<h1>this is contact page</h1>-->
  <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>contact us</h4>
                <h2>lets touch with us!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- like and dislike part-->
    <div class="container">
    <h1>like and dislike page.</h1> 
    <?php while($row=mysqli_fetch_assoc($res)){ ?>
      <div class="row main_box">
        <div class="col-sm-7 title">
        <h3><?php echo $row['post']?></h3>
          <div class="col-sm-4 ">
          <a href="javascript:void(0)" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-thumbs-up" onclick="like_update('<?php echo $row['id']?>')"> like (<span id="like_loop_<?php echo $row['id']?>"><?php echo $row['like_count']?></span>)</span>
          </a>
          </div>
          <div class="col-sm-6 mr25">
          <a href="javascript:void(0)" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-thumbs-down" onclick="dislike_update('<?php echo $row['id']?>')"> Dislike (<span id="dislike_loop_<?php echo $row['id']?>"><?php echo $row['dislike_count']?></span>)</span>
          </a>
          </div>

        </div>
      </div>
      <?php } ?>
      <script>
        function like_update(id){
          var cur_count=jQuery('#like_loop_'+id).html();
          cur_count++;
					jQuery('#like_loop_'+id).html(cur_count);
          jquery.ajax({ 
            url:'update_count.php',
				type:'post',
				data:'type=like&id='+id,
        success:function(result){
          
        }
          })
        }

        function dislike_update(id){
          var cur_count=jQuery('#dislike_loop_'+id).html();
					cur_count++;
					jQuery('#dislike_loop_'+id).html(cur_count);
          jquery.ajax({
            url:'update_count.php',
				type:'post',
				data:'type=dislike&id='+id,
        success:function(result){
          
        }
          })
        }
        </script>
    </div>


    <!-- send massage parts-->
    <div class="col-lg-4">
                  <div class="sidebar-item contact-information">
                    <div class="sidebar-heading">
                      <h2>contact information</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li>
                          <h5>7003730515/7890842349</h5>
                          <span>PHONE NUMBER</span>
                        </li>
                        <li>
                          <h5>soumendraagasti@gmail.com</h5>
                          <span>EMAIL ADDRESS</span>
                        </li>
                        <li>
                          <h5>B/2-186,p.o=kalyani, dist=nadia, 
                          	<br>kalyani, W.B PIN-741235</h5>
                          <span>STREET ADDRESS</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>




    <!-- this is the socal media iocon part-->
    <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Behance</a></li>
              <li><a href="#">Linkedin</a></li>
              <li><a href="#">Dribbble</a></li>
            </ul>
          </div>


  <?php include 'partials\_footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>