
<?php include('_header.php'); ?>

<!-- clean separation of HTML and PHP -->
<p>This is the main pageeee.</p>
<!-- backlink -->
<?php
// if you need the user's information, just put them into the $_SESSION variable and output them here
echo WORDING_YOU_ARE_LOGGED_IN_AS . $_SESSION['user_name'] . "<br />";
echo WORDING_PROFILE_PICTURE . '<br/>' . $login->user_gravatar_image_tag;
?>

<div>
    <a href="login.php?logout"><?php echo WORDING_LOGOUT; ?></a>
    <a href="edit.php"><?php echo WORDING_EDIT_USER_DATA; ?></a>
    <a href="index.php">Strona Główna</a>
</div>


<?php include('_footer.php'); ?>
