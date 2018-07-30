<?php include('functions/users.php') ?>
<div class="navbar navbar-inverse navbar-fixed-top " id="trans"><!--header-->
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-target="#topNavBar" data-toggle="collapse" type="button">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Airline Reservation System</a>
		</div>
		
		<div class="nav-collapse collapse navbar-responsive-collapse" id="topNavBar">

			<ul class="nav navbar-nav">
				<li class="active">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
				<li>
					<a href="cancelTicket.php">Cancel Ticket</a>
				</li>
				<li>
					<a href="searchTicket.php">Search Ticket</a>
				</li>
				

			</ul>			
			
			<ul  class="nav navbar-nav pull-right">

				<?php if(logged_in()): ?>	   
					<li><a href="logout.php" <span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
					<li><a href="logout.php" <span class="glyphicon glyphicon-user"> </span> <?php echo $_SESSION['username']; ?></a></li>
				<?php else: ?>	
					<li><a href="loginForm.php"<span class="glyphicon glyphicon-log-in"></span>Login</a></li>
					<li><a href="registerForm.php"><span class="glyphicon glyphicon-user "></span> Create an account</a></li>
				<?php endif ?>
			</ul>
						
		</div>	
	</div>
</div>