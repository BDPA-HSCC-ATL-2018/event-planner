<?php include_once $_SERVER ['DOCUMENT_ROOT'] . '/web-assets/tpl/app_header.php' ;
      include_once $_SERVER ['DOCUMENT_ROOT'] . '/web-assets/tpl/app_nav.php' ;
?>
<div class="jumbotron">
<div class="card text-center text-white bg-warning w-60">
  <div class="card-header"> Event Planner </div>
    <div class="card-body">
    <form class="container-fluid">
      <div class-"form-group">
        <label for="user"> User Name </label>
        <input type="text" class="form-control" id="user"> </input>
      </div>
      <div class="form-group">
        <label for="password"> Password </label>
        <input type="text" class="form-control" id="password"> </input>
      </div>
      <div class="form=group">
        <button type="submit" class="btn btn-outline-light">Log In</button>
      </div>
    </form>
    <div class="card-footer"><a href="/event_plan/event_signup.php" class="card-text py-1 text-light">Don't have an account? Sign Up</a></div>
  </div>
</div>
</div>
<?php include_once $_SERVER ['DOCUMENT_ROOT'] . '/web-assets/tpl/app_footer.php' ; ?>
