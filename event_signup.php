<?php include_once $_SERVER ['DOCUMENT_ROOT'] . '/event-planner/event_header.php' ;
      include_once $_SERVER ['DOCUMENT_ROOT'] . '/event-planner/event_nav.php' ;?>

  <div class="container-fluid p-5">
  	<div class="jumbotron bg-primary">
  		<h1 class="display-4"> <p class="text-light">Event Planner</p></h1>
  		<div class="card mx-auto">
  			<!-- Left blank for a purpose -3- -->
  			<form action="../index.php" method="post" class="needs-validation" novalidate>
  				<center>
  					<!-- Styles first and last name fields as an input group -->
  					<div class="card-body">
  						<h3 class="card-title pt-3 mx-auto">Sign up</h3>
  						<div class="col-sm-4 col-md-4 col-lg-5 input-group pt-4">
  							<input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" required>
  							<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" required>
  						</div>
  						<!-- Styling and positioning for email and password fields -->
  						<div class="col-sm-4 m-3">
  							<input class="form-control" type="text" placeholder="Email" name="email_id" id="email_id" required>
  						</div>
  						<!-- Hey Chris -->
  						<div class="col-sm-4 m-3 ">
  							<input class="form-control" type="password" placeholder="Password" name="login_pw" id="login_pw" required>
  						</div>
  						<input type="submit" class="btn btn-outline-secondary m-4">
  					</center>
</form>
</div>
<div class="card-footer">
  <center><a class="card-text py-1 text-light" href="/event-planner/event_login.php"><small>Already have an account? Login</small></a></center>
</div>
</div>
</div>
<?php include_once $_SERVER ['DOCUMENT_ROOT'] . '/event-planner/event_footer.php'; ?>
