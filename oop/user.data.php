<div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header">
          <img src="img/cc.png">
          User data </div>
            <div class="card-body">
              <div class="user-prof">
              <img src="img/cc.png" class=" d-block">
              </div>
              <div class="user">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    Name: <?php echo $_SESSION['u_firet']." ".$_SESSION['u_last']; ?>
                  </li>
                </ol> 
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    Email: <?php echo $_SESSION['u_email'];?>
                  </li>
                </ol>
              
              </div>
            </div>
      </div>
    </div>
</div>
<br>
<div class="row">
  <div class="col-xl-6">
    <div class="card">
      <div class="card-header">
        Change Your Password ...
      </div>
      <div class="card-body">
              <form action="include/user.data.change.inc.php" method="POST">
              <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="currentPassword" class="form-control" placeholder="Current Password" name="pwd" required="required">
                <label for="currentPassword">Current Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="newPassword" class="form-control" placeholder="New Password" name="newPwd" required="required">
                <label for="newPassword">New Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="conformNewPassword" class="form-control" placeholder="Conform New Password" name="confPwd" required="required">
                <label for="conformNewPassword">Conform New Password</label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
        <button type="submit" name="submit_pwd" class="btn btn-primary">Save Password</button>
      </form>
      </div>
    </div>    
  </div>    


  <div class="col-xl-6">
    <div class="card">
      <div class="card-header">
        Change Your Details ...
      </div>
      <div class="card-body">
              <form action="include/user.data.change.inc.php" method="POST">
                <?php
                echo '<div class="form-group">
                <div class="form-label-group">
                <input type="password" id="changeFirstName" class="form-control" placeholder="First Name: '.$_SESSION['u_firet'].'" name="newFirstName" >
                  <label for="changeFirstName">First Name: '.$_SESSION['u_firet'].'</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="changeLastName" class="form-control" placeholder="Last Name: '.$_SESSION['u_last'].'" name="newLsatName" >
                  <label for="changeLastName">Last Name: '.$_SESSION['u_last'].'</label>
             </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="changeEmail" class="form-control" placeholder="Email: '.$_SESSION['u_email'].'" name="newEmail" >
                <label for="changeEmail">Email: '.$_SESSION['u_email'].'</label>
              
            </div>
          </div>
          ';?>
          <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Save details</button>
      </form>
      </div>
    </div>    
  </div>    
</div>

