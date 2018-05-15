<!--nav-bar-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navi-color">
		<a class="navbar-brand" href="http://localhost/myfirstcodeigniter/"><img src="http://localhost/myfirstcodeigniter/assets/images/logo-small.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link text-lg mx-3 h5" href="http://localhost/myfirstcodeigniter/">Home <i class="fa fa-home" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link text-lg mx-3 h5 dropdown-toggle" data-toggle="dropdown" href="#">Products </a>
					<ul class="dropdown-menu p-3 prod-dd">
						<li>
							<a href="http://localhost/myfirstcodeigniter/index.php/controller_products/typeitem" class="text-light h6 font-weight-bold">Accessories</a>
							<ul class="my-3">
								<li><a href="#" class="text-light">Lever</a></li>
								<li><a href="#" class="text-light">Side Mirror</a></li>
								<li><a href="#" class="text-light">LED Lights</a></li>
							</ul>
						</li>
						<li class="divider bg-light"></li>
						<li>
							<a href="#" class="text-light h6 font-weight-bold">Decals</a>
							<ul class="my-3">
								<li><a href="#" class="text-light">Sticker</a></li>
								<li><a href="#" class="text-light">Vinyl</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link text-lg mx-3 h5" href="#">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-lg mx-3 h5" href="#">About Us <i class="fa fa-info" aria-hidden="true"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-lg mx-3 h5" href="#">Contact <i class="fa fa-phone" aria-hidden="true"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-lg mx-3 h5" href="http://localhost/myfirstcodeigniter/index.php/controller_auth/login">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a>
				</li>
			</ul>

			<form class="form-inline my-2 my-lg-0">
		      	<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
		      	<button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
    		</form>
		</div>
</nav>