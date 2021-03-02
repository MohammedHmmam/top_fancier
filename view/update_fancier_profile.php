<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>User profile in tabs - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <style type="text/css">
        
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Fancier Information</a></li>
      <li><a href="#profile" data-toggle="tab">Account Settings</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
        <form id="tab" action="../control/update_fancier_profile.php" method="POST">
            <label>First Name</label>
            <input type="text" value="" class="input-xlarge" name="first_name" placeholder="Mohammed">
            <label>Last Name</label>
            <input type="text" value="" class="input-xlarge" name="last_name" placeholder="Abdullah">
            <label>State</label>
            <input type="text" value="" class="input-xlarge" name="state" placeholder="Cairo">
            <label>City</label>
            <input type="text" value="" class="input-xlarge" name="city" placeholder="Zamalek">
            <label>Region</label>
            <input type="text" value="" class="input-xlarge" name="region" placeholder="bus station">
            <label>Coord_N</label>
            <input type="text" value="" class="input-xlarge" name="coord_N" placeholder="31.186154">
            <label>Coord_E</label>
            <input type="text" value="" class="input-xlarge" name="coord_E" placeholder="31.516537">
           
         

          	<div>
        	    <input type="submit" name="submit" value="Update" class="btn btn-primary">
        	</div>
        </form>
      </div>
      <div class="tab-pane fade" id="profile">
    	<form id="tab2">
        	<label>New Password</label>
        	<input type="password" class="input-xlarge">
            <label>Email</label>
            <input type="text" value="jsmith@yourcompany.com" class="input-xlarge">
        	<div>
        	    <button class="btn btn-primary">Update</button>
        	</div>
    	</form>
      </div>
  </div>
<script type="text/javascript">

</script>
</body>
</html>
