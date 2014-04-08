<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DziennikLogin</title>
    <style type="text/css">
        /* just for the demo */
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 10px;
        }
        label {
            position: relative;
            vertical-align: middle;
            bottom: 1px;
        }
        input[type=text],
        input[type=password],
        input[type=submit],
        input[type=email] {
            display: block;
            margin-bottom: 15px;
        }
        input[type=checkbox] {
            margin-bottom: 15px;
        }
        /*<![CDATA[*/
        div.c7 {margin-top:50px;}
        div.c6 {padding-top:30px}
        div.c5 {border-top: 1px solid#888; padding-top:15px; font-size:85%}
        div.c4 {margin-top:10px}
        div.c3 {margin-bottom: 25px}
        div.c2 {display:none}
        div.c1 {float:right; font-size: 80%; position: relative; top:-10px}
        /*]]>*/
    </style>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Brand</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Strona Główna</a></li>
      <li><a href="grades.php">Oceny</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
          <li class="divider"></li>
          <li><a href="#">One more separated link</a></li>
            </ul>
            
      </li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
          <li class="<?php echo  $_SESSION['user_name'];?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo  $_SESSION['user_name'];?><b class="caret"></b></a>
          <ul class="dropdown-menu"></li>
          <li><a href="edit.php" ><?php echo WORDING_EDIT_USER_DATA; ?></a></li>
          </ul>
          <li><?php echo  $login->user_gravatar_image_tag;?></li>
          <li><a href="login.php?logout"><span class="glyphicon glyphicon-off"></span></a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
