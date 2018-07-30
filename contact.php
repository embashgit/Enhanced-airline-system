<?php

	if(isset($_POST['submit'])){
		if (empty($_POST) === false) {

			$name = $_POST['name'];
			$email = $_POST['email'];
			$text	= $_POST['text'];
			mysqli_query(mysqli_connect('localhost', 'root', '', 'airline_db') ,"INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$text')");
			}
			echo "Your request has been received";
			header('Location:index.php');
	}
	else{
		echo "Sorry your request wasnt sent";
	}
?>
<html>

	<?php  
		include 'head.php';
	?>
	<body>
		<?php  
			include 'nav.php';
		?>
		<div class="container" style="margin-top: 100px;">
		    <div class="row">
		        <div class="col-sm-4 col-offset-4">
		            <div class="well well-sm">
		                <form class="form-horizontal" method="post">
		                    <fieldset>
		                        <legend class="text-center header1">Contact us</legend>

		                        <div class="form-group">
		                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
		                            <div class="col-md-8">
		                                <input id="fname" name="name" type="text" placeholder="Name" class="form-control">
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
		                            <div class="col-md-8">
		                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
		                            <div class="col-md-8">
		                                <textarea class="form-control" id="text" name="text" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <div class="col-md-12 text-center">
		                                <button name="submit" type="submit" class="btn btn-primary btn-block">Submit</button>
		                            </div>
		                        </div>
		                    </fieldset>
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
