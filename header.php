<header>
	<div class="max-container">
		<div class="left-header">
			<div class="logo">
				<a href="">
					<img src="img/logo1.svg" alt="">
				</a>
			</div>
		</div>
		<!-- eo left header -->

		<div class="right-header">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><button class="search-btn"><i class="fas fa-search"></i></button></li>
				<li class="menu-icon"><button class="responsive-menubar-btn"><i class="fas fa-bars"></i></button></li>
			</ul>
		</div>
		<!-- eo right header -->
	</div>
	
</header>

<div class="search-bar">
	<div class="search-box">
		<div class="max-container">
			<div class="search-textbox">
				<input type="text" class="search-text" placeholder="search">

				<div class="search-btns">
					<ul>
						<li><button><i class="fas fa-search"></i></button></li>
						<li><button class="close-search"><i class="fas fa-times"></i></button></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
</div>
<!-- eo search bar -->


<div class="responsive-menubar">
	<div class="max-container">
		<div class="close-menu-btn">
			<button class="close-menu"><i class="fas fa-times"></i></button>
		</div>
		<div class="responsive-menus">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</div>
	</div>
</div>


<script>
	$(document).ready(function(){
		// for search bar
		$('.search-btn').click(function(){
			$('.search-bar').css("display","block");
			setTimeout(function(){ $('.search-text').focus(); }, 500);
			$('.body').css("overflow", "hidden");
		});

		$('.close-search').click(function(){
			$('.search-bar').css("display","none");
			$('.body').css("overflow", "auto");
		});

		// for responsive-menubar
		$('.responsive-menubar-btn').click(function(){
			$('.responsive-menubar').css("display","block");
			setTimeout(function(){ $('.search-text').focus(); }, 500);
			$('.body').css("overflow", "hidden");
		});

		$('.close-menu').click(function(){
			$('.responsive-menubar').css("display","none");
			$('.body').css("overflow", "auto");
		});
	});
</script>