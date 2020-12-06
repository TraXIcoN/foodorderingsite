
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php">HEAD OVER MEALS</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="menu.php">MENU</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog.php">BLOG</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li ><a class="navbut" href="cart.php"><i class="fa fa-first-order" style="margin-right:3px;" aria-hidden="true"></i>OrderS</a></li>
      <li ><a class="navbut" href="cart.php"><i class="fa fa-shopping-cart" style="margin-right:3px;" aria-hidden="true"></i>Cart</a></li>
      <li style="color:white;padding-top:-20px;"><?php include('dropdown.php'); ?></li>
    </ul>
  </div>
</nav>
