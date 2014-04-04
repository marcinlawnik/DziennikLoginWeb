<?php include('_header.php'); ?>
    <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Zaloguj się.</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="password_reset.php"><?php echo WORDING_FORGOT_MY_PASSWORD; ?></a></div>
                    </div>

                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <form id="loginform" class="form-horizontal" role="form" method="post" action="index.php">
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="user_name" type="text" name="user_name" required class="form-control" value="" placeholder="<?php echo WORDING_USERNAME; ?>">
                                    </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="user_password" type="password" name="user_password" autocomplete="off" required class="form-control" placeholder="<?php echo WORDING_PASSWORD; ?>">
                                    </div>
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="user_rememberme" name="user_rememberme" value="1" type="checkbox" value="1"> <?php echo WORDING_REMEMBER_ME; ?>
                                        </label>
                                      </div>
                                    </div>
                                <div style="margin-top:10px" class="form-group">
                                    <div class="col-sm-4 controls">
                                    <input type="submit" id="btn-login" class="btn btn-success" name="login" value="<?php echo WORDING_LOGIN; ?>" />
                                    </div>
                                <div class="col-sm-4 controls">
                                <a id="btn-fblogin" href="register.php" class="btn btn-primary"><?php echo WORDING_REGISTER_NEW_ACCOUNT; ?></a>
                            </div>
                                </div>
                            </form>

                        </div>
                    </div>
        </div>
         </div>
    </div>
<?php include('_footer.php'); ?>
