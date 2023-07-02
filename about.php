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
	background-repeat: no-repeat; background-size: cover; background-color: #7a6767;
}
.page-heading .text-content h4 {
	color: #f48840; font-size: 18px; text-transform: uppercase; font-weight: 900; letter-spacing: 0.5px; margin-bottom: 15px;
}

.page-heading .text-content h2 {
	color: #f48840; font-size: 36px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;
}
.about-us {
	margin-top: 100px; text-align: center;
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
	font-size: 14px; text-transform: uppercase; color: #fff; font-weight: 500; letter-spacing: 0.25px; transition: all .3s;
}

.social-icons li a:hover {
	color: #f48840;
}

    </style>
  </head>
  <body>
  <?php include 'partials\_dbconnect.php' ?>
  <?php include 'partials\_header.php' ?>

  <!--<h1>this is about page</h1>-->
  <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>about us</h4>
                <h2>more about us!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <section class="about-us">
    <div class="row">
          <div class="col-lg-12">
            <img src="img/about-us.jpg" alt="">
            <p>Welcome to I discuss Our mission is to provide high-quality programming content that helps our readers improve their skills, learn new technologies, and solve real-world problems.<a rel="nofollow" href="https://templatemo.com/tag/business" target="_parent">business</a>, <a rel="nofollow" href="https://templatemo.com/tag/portfolio" target="_parent">portfolio</a>, <a rel="nofollow" href="https://templatemo.com/tag/restaurant" target="_parent">restaurant</a>,Our team of experienced writers consists of programmers, software engineers, and data scientists who are passionate about sharing their knowledge with others. We believe that everyone should have access to high-quality programming content, regardless of their level of experience or expertise. <br><br>At I discuss, we cover a wide range of programming topics, including web development, data science, machine learning, and more. We strive to provide in-depth tutorials, practical examples, and best practices that are both informative and engaging.We also believe in the importance of community and encourage our readers to share their ideas, ask questions, and participate in discussions. We believe that learning is a collaborative effort, and we are committed to fostering a welcoming and inclusive community for all.Whether you're a beginner just starting out or an experienced developer looking to take your skills to the next level, we hope that you will find value in our content. Thank you for choosing I discuss, and we look forward to sharing our knowledge with you! <br>Finally, one of the most important things you can do to improve the efficiency of your Python code is to profile it. Profiling involves measuring the execution time of different parts of your code to identify bottlenecks. Once you've identified the bottlenecks, you can work on optimizing those parts of your code.  </p>
          </div>
        </div>
            </section>
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