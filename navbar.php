<div id="main-nav" class="navbar navbar-expand-sm mr-auto section-2 " >
	<button class="btn btn-primary" id="toggle" onclick="on()">x</button>
	<a href="#" class="navbar-brand text-uppercase">souq</a>
	<button class="navbar navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarcontent" aria-controls="navbarcontent" aria-expand="true" aria-label="Toggle navigation" style="margin-bottom:5px;">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-end" id="navbarcontent">
		<ul class="navbar-nav ar-auto">
			<li class="nav-items active form-inline">
				<input type="text" name="search" role="search" class="form-control form-control-sm" placeholder="search">
    			<button type="submit" name="search"  class="btn btn-primary btn-sm" role="button"  id="search">search</button>
			</li>
			<li class="nav-items dropdown" id="dropdown">
				<a href="#" class="nav-link text-capitalize" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aira-expand="false" style="margin-right:20px;">login</a>
				<div class="dropdown-menu" id="drop" aria-labelledby="navbarDropdown">
					<a href="login.php" class="dropdown-item text-capitalize link1 btn">login</a>
					<a href="#" class="dropdown-item text-capitalize" style="font-size:10px;">forget password??</a>
					<div class="dropdown-divider"></div>
					<a href="signup.php" class="dropdown-item text-capitalize link2 btn">sign-up</a>
				</div>
			</li>
			<li class="nav-items"><a href="#" class="nav-link text-capitalize" style="margin-right: 20px;">cart<img src="images/cart.png" alt="cart" width="17" height="17" style="padding-left:2px;"></a></li>
		</ul>
	</div>			
</div>
<div id="overlay" onclick="off()">
	<div class="row h-100">
		<div id="overlay-menu" class="col-sm-3 h-100">
			<div class=" wrapper">
				<nav id="sidebar">
					<ul class="list-unstyled components navbar-nav ar-auto text-capitalize">
						<li class="nav-items"><a href="#" class="nav-link">home</a></li>
						<li class="nav-items"><a href="#" class="nav-link">catagories</a></li>
						<li class="nav-items"><a href="#" class="nav-link">track your order</a></li>
						<li class="nav-items"><a href="#" class="nav-link">about us</a></li>
						<li class="nav-items"><a href="#" class="nav-link">contact us</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>