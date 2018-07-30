<!DOCTYPE html>
<html>
<head>
	<?php 
		include 'head.php';
	?>
</head>
<body>
	<?php
		include 'nav.php';
	?>
	<div class="container" style="margin-top: 120px;">
        
        <div class="row">
            <div class="col-sm-6 col-offset-3">
                <div class="well" >
                    <h1 class="text-center text-primary" style="padding-bottom: 20px">Register </h1>
                    <form action="register.php" method = "POST" class="form-inline"  >
						
						<div class="form-group"> 
						<input class="form-control" type="email" name="email" placeholder="Your Email" required>
						</div>
						<div class="form-group">
					    <input class="form-control" type="password" name="password" placeholder="Your Password" required>
					    </div>
						<div class="form-group"> 
						<input class="form-control" type="text" name="sname" placeholder="Surname" required>
						</div>
						<div class="form-group"> 
						<input class="form-control" type="text" name="fname" placeholder="First Name" required>
						</div>
						<div class="form-group">
					    <input class="form-control" type="text" name="username" placeholder="User name" required>
					    </div>
						<br>
						
					    <br>
						<div class="form-group">
						<button type="submit" name = "submit" class="btn btn-block btn-primary" style="height:40px; background-color:#00bbff; color:white; font-size:25px;">Submit Now <i class="fa fa-arrow-circle-right"></i></button>
						
						</div>	
					</form>
                </div>
            </div>
        </div>
    </div>
	<?php
		include 'footer.php';
	?>
</body>
</html>
