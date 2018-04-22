<nav class="navbar navbar-inverse  navbar-fixed-top">

	<div class="container-fluid">

<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">

			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="bs-example-navbar-collapse-1">

				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>

			</button>

			<a class="navbar-brand" id="head" href="index.php">	Disney World</a>

		</div>

<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">

			<ul class="nav navbar-nav">

				<li><a href="mickey.php" class="<?php echo ($active == 'Aziz' ? "active" : "");?>">Mickey Mouse</a></li>
				<li><a href="stich.php" class="<?php echo ($active == 'Ostriker' ? "active" : "");?>">Stich</a></li>
				<li><a href="simba.php" class="<?php echo ($active == 'Yang' ? "active" : "");?>">Simba</a></li>
				<li><a href="form.php" class="<?php echo ($active == 'form' ? "active" : "");?>">Contact Us</a></li>

			</ul>

		</div>
		
	</div>

</nav>
