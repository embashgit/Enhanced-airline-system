<head>
		
	<!-- Website Title & Description for Search Engine purposes -->
	<title>Ars</title>
	<meta name="description" content="Learn how to code your first responsive website with the new Twitter Bootstrap 3.">
	
	<!-- Mobile viewport optimized -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Bootstrap CSS -->
	<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
	
	<!-- Custom CSS -->
	<link href="includes/css/styles.css" rel="stylesheet">
	<link href="includes/css/booking.css" rel="stylesheet">
	<!-- Include Modernizr in the head, before any other Javascript -->
	<script src="includes/js/modernizr-2.6.2.min.js"></script>
	<script type="text/javascript">
        function display() {
			document.getElementById("datepicker").style.display='block';
			document.getElementById("rdate").style.display='block';
        }
		function hide() {
		document.getElementById("datepicker").style.display='none';
		document.getElementById("rdate").style.display='none';
		}
		function checkForm(form)
		  {
		    
		    if(!form.terms.checked) {
		      alert("Please indicate that you accept the Terms and Conditions");
		      form.terms.focus();
		      return false;
		    }
		    return true;
		  }
	</script>
	
</head>