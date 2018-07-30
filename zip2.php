<body>
<?php
include ('head.php');
include ('nav.php');
?>
	<style type="text/css">
		*{
			color:white;
		}
	</style>
		<div class="midheader">
			<h3 >Use BIZZNG 20 to get 20% off on your first hotel booking  <span class="fb"><a href="#"" class="btn btn-danger btn-lg ">BooK Now!</a></span></h3>
					
		</div>
	
<div class="maindiv">

 <div class="container" id="createbuttom" >
 
 	<div class="col-offset-3 col-6" style=" padding: 15px;margin-top: 50px; background: #283593; background:rgba(0,0,0,0.5); border-radius: 5px;">

 		<button style= "background: blue;" type="button" class="btn btn-info btn-block"><h3>Book Flight</h3></button>
	<form class="form-inline">


<div class="form-group">
<label class="control-label col-sm-3" for="first_name">first Name:</label>
<div class="col-sm-9"> 
  <input type="text" class="form-control" style="margin-top: 10px;" name="first_name" placeholder="First name here" value=""/>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3" for="first_name">Last Name:</label>
<div class="col-sm-9"> 
  <input type="text" class="form-control" style="margin-top: 10px;" name="first_name" placeholder="Last name here" value="" />
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" for="Passport No:">Passport No:</label>
<div class="col-sm-9"> 
  <input type="text" class="form-control" style="margin-top: 10px;" name="Passport No:" placeholder="Passport No:" value="" />
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3" for="Passport No:">Visa No:</label>
<div class="col-sm-9"> 
  <input type="text" class="form-control" name="Passport" style="margin-top: 10px;" placeholder="Visa No." value="" />
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3"  for="contry">Country</label>
<div class="col-sm-9" style="margin-top: 10px;">
	<select class="form-control" id="type">
	  <option>choose Title</option>
		
		<option>Afghanistan</option>
		<option>Nepal</option>
		<option>India</option>
		
	</select> 
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" for="first_name">Address1:</label>
<div class="col-sm-9"> 
  <input type="text" class="form-control" name="Address" placeholder="Enter address" style="margin-top: 10px;" value=""></input>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" for="first_name">Address2:</label>
<div class="col-sm-9"> 
  <input type="text" class="form-control" style="margin-top: 10px;" name="Address" placeholder="Enter address2" value=""></input>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" style=" for="email">E-mail:</label>
<div class="col-sm-9">
  <input type="text" class="form-control" name="email" style="margin-top: 10px;" placeholder="example@mail.com">
</div>
</div>


<div class="form-group">
<label class="control-label col-sm-3" for="email">Contact No.:</label>
<div class="col-sm-9">
  <input type="text" class="form-control" name="contact" style="margin-top: 10px;" placeholder="Enter Your contact number">
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" for="pin">PIN:</label>
<div class="col-sm-9">
<input type="text" required name="pin[]" style="margin-top: 10px;" class="form-control" placeholder="Enter a PIN...">
</div>
</div>
<div class="form-group">
<div class="col-sm-3">
</div>
<label class="control-label col-sm-7" style="margin-top: 10px;"  for="email" >agree the terms and conditions of your site.</label>
<div class="col-sm-2">
<input type="checkbox" name="terms" class="form-control" value="terms" /> I 
</div>
</div>
<br>
<div class="form-group"> 
<div class="col-sm-offset-3 col-sm-6" id="createbuttom" >
  <input type="hidden" name="_token" value=""/>
  <button  type="submit" name="save" class="btn btn-success btn-lg ">Book Flight</button>
</div>
</div>

</form>
</div>
</div>

</div>
<?php
include('footer.php');
?>
