<?php 

if(isset($_SESSION['logged'])) {
	echo '<div class="dropdown">
  <div class="dropbtn" style="color:white;"><i class="fa fa-user"  style="margin-right:3px; color: white;" aria-hidden="true"></i>'.$_SESSION["user_name"].'</div>
  <div class="dropdown-content">
  <a href="#">Profile</a>
  <a href="#">Tickets</a>
  <a href="logout.php">Log out</a>
  </div>
</div>';
}
else {
	echo '<i class="fa fa-sign-in" style="margin-right:-10px;" aria-hidden="true"></i><a href="login.php">Login</a>';
}
?>
