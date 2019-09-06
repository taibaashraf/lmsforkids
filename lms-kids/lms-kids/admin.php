 <?php
 $connection=mysqli_connect('localhost','root','','lms');



 
 ?>
  <!--Login -->
    <div class="well">
 

             <h4>Login</h4>

                <form action="login.php" method="post">
                <div class="form-group">
                    <input name="username" type="text" class="form-control" placeholder="Enter Username">
                </div>

                  <div class="input-group">
                    <input name="password" type="password" class="form-control" placeholder="Enter Password">
                    <span class="input-group-btn">
                       <button class="btn btn-primary" name="login" type="submit">Submit
                       </button>
                    </span>
                   </div>

                    <div class="form-group">

                        <a href="forgot.php?forgot=<?php echo uniqid(true); ?>">Forgot Password</a>


                    </div>

                </form><!--search form-->
                <!-- /.input-group -->

 


       
    </div> 
              