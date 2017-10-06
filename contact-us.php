<?php require_once('inc/top.php');?>

  </head>
  <body>
  <?php require_once('inc/header.php');?>

<div class="jumbotron">
<div class="container">
<div id="details" class="animated fadeInLeft">
   <h1>Contact<span>  Us</span></h1>
   <p>WELCOME to contact page...!!</p>
</div>
</div>
<img src="img/coffes.jpg" alt="coffes">
</div>

<section>
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="row">
<div class="col-md-12">
          <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAz7_gfRvo9qiDYeZZvbSAji5tZadxDZek'></script><div style='overflow:hidden;height:400px;width:100%;'><div id='gmap_canvas' style='height:400px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://indiatvnow.com/'>INDIA TV Series</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=78c614c4cb5463d6f98e2033262c4a3185053f27'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(19.2464961,73.17272419999995),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.2464961,73.17272419999995)});infowindow = new google.maps.InfoWindow({content:'<strong>Om Shri Ram</strong><br>Mharal Society,murbad road<br>421301 kalyan<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>
<div class="col-md-12 contact-form">
<?php 
if(isset($_POST['submit'])){
	$name= mysqli_real_escape_string($con, $_POST['name']);
	$email= mysqli_real_escape_string($con, $_POST['email']);
	$website= mysqli_real_escape_string($con, $_POST['website']);
	$comment= mysqli_real_escape_string($con, $_POST['comment']);
	
	$to= "singhjyoti2501@gmail.com";
	$header= "From: $name<$email>";
	$subject= "Message From $name";
	
	$message= "Name: $name \n\nEmail: $email \n\nWebsite: $website \n\nMessage:\n $comment";
	
	if(empty($name) or empty($email) or empty($comment)){
		$error= "All * Fields are Required";
	}
	else{
		if(mail($to,$subject,$message,$header)){
			$msg= "Message has been Sent";
		}
		else{
			$error= "Message has not been Sent";
		}
		
	}
	
}
?>
<h2>Contact form</h2> <hr>
<form action="" method="post">
<div class="form-group">
<label for="full-name">Full Name*: </label>
<?php 
if(isset($error)){
	echo "<span class='pull-right' style='color:red'>$error</span>";
}
if(isset($msg)){
	echo "<span class='pull-right' style='color:green'>$msg</span>";
}
?>
<input type="text" id="full-name" class="form-control" placeholder="Full Name" name="name">
</div>

<div class="form-group">
<label for="email">Email*: </label>
<input type="email" id="email" class="form-control" placeholder="Email" name="email">


</div>
<div class="form-group">
<label for="website">Website: </label>
<input type="text" id="website" class="form-control" placeholder="Website" name="website">


</div>
<div class="form-group">
<label for="message">Message: </label>
<textarea id="message" cols="30" rows="10" class="form-control" placeholder="Type your message here..." name="comment"></textarea>
</div>

<input type="submit" name="submit" value="Submit" class="btn btn-primary">

</form>

</div>

</div>
</div>

<div class="col-md-4">
  <?php require_once('inc/sidebar.php');?>
</div>
</div>
</div>
</section>
<?php require_once('inc/footer.php');?>