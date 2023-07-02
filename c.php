<?php
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){ 
  echo '   <div class="container">
  <h1 class="py-2">post a comment</h1>
  <form action=" '. $_SERVER['REQUEST_URI'] . ' "  method="post">

  <div class="form-group">
    <label for="exampleFormControlTextarea1">type your comments</label>
    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-success">Post comments</button>
</form>

  </div>';
  }
  else{
    echo ' 
    <div class="cointainer">
    <h1 class="py-3">post a comment</h1>
    <h2 class="py-3">you are not logged in.please login to start the post comments</h2>
           </div> ';
  }
  ?>

select * from threads where match (thread_title, thread_desc) against ('not able')