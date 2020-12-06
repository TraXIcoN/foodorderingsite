<?php 

if(isset($_SESSION['logged'])) {
	echo '<div class="dropdown">
  <button class="dropbtn">'.$_SESSION["user_name"].'</button>
  <div class="dropdown-content">
  <a href="#">Profile</a>
  <a href="#">Tickets</a>
  <a href="logout.php">Log out</a>
  </div>
</div>';
}
else {
	echo 'Login';
}
?>