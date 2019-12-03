<header class="header">
        <div class="container">                       
            <img class="profile-image img-responsive pull-left <?php if (isset($_SESSION["admin"])) echo "disable-login"; ?>" src="assets/images/me.png" alt="James Lee" />
            <div class="profile-content pull-left">
                <h1 class="name">Andrii Yuzvyk</h1>
                <h2 class="desc">Web App Developer</h2>   
                
                <form action="index.php" method="POST">
                <div class="flex">
                <button class="btn btn-danger hiden <?php if (isset($_SESSION["admin"])) echo "admin"; ?>" name="admin_exit">EXIT</button>
                <button class="btn btn-warning btn-edit-ind hiden <?php if (isset($_SESSION["admin"])) echo "admin"; ?>" name="change_pass">Account Settings</button>
                </form> 
            </div><!--//profile-->
        </div><!--//container-->
       <!-- Modal -->
       <div id="myModalBox" class="modal fade mod-first">
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
            <label for="exampleInputPassword1">Password  </label>
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


<!-- The Modal -->
<div class="modal modal-second" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Account</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="index.php" method="POST">
        <div class="form-group">
            <label for="old-password">Old password</label>
            <div class="flex">
            <input name="old-pass" type="password" class="form-control" id="old-password"  placeholder="Old password">
            <i class="far fa-eye third-eye"></i>
            </div>
        </div>
        <div class="form-group new-pass">
            <label for="new-password-first">New password</label>
            <div class="flex">
            <input name="new-pass" type="password" class="form-control" id="new-password-first" placeholder="New password">
            <i class="far fa-eye first-eye"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="new-password-second">New password again</label>
            <div class="flex">
            <input name="confirm-pass" type="password" class="form-control" id="new-password-second" placeholder="New password again">
            <i class="far fa-eye second-eye"></i>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btl-log">Submit</button>
        <button type="submit" class="btn btn-success generate-pass btl-log">Generate pass</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </form>
      </div>

    </div>
  </div>
</div>
















    </header><!--//header-->


 