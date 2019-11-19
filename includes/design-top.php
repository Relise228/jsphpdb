<header class="header">
        <div class="container">                       
            <img class="profile-image img-responsive pull-left <?php if (isset($_SESSION["admin"])) echo "disable-login"; ?>" src="assets/images/profile.png" alt="James Lee" />
            <div class="profile-content pull-left">
                <h1 class="name">James Lee</h1>
                <h2 class="desc">Web App Developer</h2>   
                <ul class="social list-inline">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>                   
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-github-alt"></i></a></li>                  
                    <li class="last-item"><a href="#"><i class="fa fa-hacker-news"></i></a></li>                 
                </ul>
                <form action="index.php" method="POST">
                <button class="btn btn-danger hiden <?php if (isset($_SESSION["admin"])) echo "admin"; ?>" name="admin_exit">EXIT</button>
                </form> 
            </div><!--//profile-->
        </div><!--//container-->
       <!-- Modal -->
       <div id="myModalBox" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Заголовок модального окна -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">LogIn</h4>
      </div>
      <!-- Основное содержимое модального окна -->
      <div class="modal-body">
      <form action="index.php" method="POST">
        <div class="form-group">
            <label for="exampleInputLog">LogIn</label>
            <input name="login" type="text" class="form-control" id="exampleInputLog"  placeholder="Enter Login">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary btl-log">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </form>
      </div>
      <!-- Футер модального окна -->
      <div class="modal-footer">
    
      </div>
    </div>
  </div>
</div>
    </header><!--//header-->


 