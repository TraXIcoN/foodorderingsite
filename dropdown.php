<?php 

if(isset($_SESSION['logged'])) {
	echo '<div class="dropdown">
  <div class="dropbtn navbut" style="color:white;font-family: raleway !important; font-size:15px; font-weight: 800;"><i class="fa fa-user"  style="margin-right:3px; color: white;" aria-hidden="true"></i>'.strtoupper($_SESSION["user_name"]).'</div>
  <div class="dropdown-content">
  <a href="profile.php">Profile</a>
  <a href="tickets.php">Tickets</a>
  <a href="logout.php">Log out</a>
  </div>
</div>';
}
else {
	echo '<i class="fa fa-sign-in" style="margin-right:-10px;" aria-hidden="true"></i><a href="login.php">Login</a>';
}
?>
