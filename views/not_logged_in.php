<?php include('_header.php'); ?>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" type=
  "text/javascript">
</script>

  <div class=
  "container mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 panel panel-info c7"
  id="loginbox">
    <div class="panel-heading">
      <div class="panel-title">
        Zaloguj się
      </div>

      <div class="c1">
        <a href="password_reset.php"><?php echo WORDING_FORGOT_MY_PASSWORD; ?></a>
      </div>
    </div>

    <div class="panel-body c6">
      <div id="login-alert" class="alert alert-danger col-sm-12 c2"></div>

      <form method="post" action="index.php" name="loginform" id="loginform" class="form-horizontal" role="form">
        <div class="input-group c3">
          <input id="user_name" type="text" name="user_name" required class="form-control" 
          value="" placeholder="<?php echo WORDING_USERNAME; ?>" />
        </div>

        <div class="input-group c3">
          <input id="user_password" type="password" name="user_password" autocomplete="off" required class="form-control" 
          placeholder="<?php echo WORDING_PASSWORD; ?>" />
        </div>

        <div class="input-group checkbox">
          <label><input id="user_rememberme" name="user_rememberme" value="1" type="checkbox"/>
          <?php echo WORDING_REMEMBER_ME; ?></label>
        </div>

        <div class="form-group c4">
          <!-- Button -->

          <div class="col-sm-12 controls">
            <input type="submit" id="btn-login" class="btn btn-success" name="login"><?php echo WORDING_LOGIN; ?> /> <a href="register.php" class="btn btn-primary" name=
            "register"><?php echo WORDING_REGISTER_NEW_ACCOUNT; ?></a>
          </div>
        </div>

        <div class="form-group col-md-12 control c5"></div>
      </form>
    </div>
  </div>



<?php include('_footer.php'); ?>
