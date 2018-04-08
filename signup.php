<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
</head>
<body>

  <form method="post" action="server.php">
    <fieldset>
            <legend style="font-family:Arabic;font-size:30px;color:#000000;">Sign Up</legend>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" value="<?php echo $name; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
    <div class="input-group">
      <label>Age:</label>
      <input type="number" name="age">
    </div>
    <div class="input-group">
      <label>Sex:</label>
      <input type="radio" name="gender" value="Male" checked> Male<br>
      <input type="radio" name="gender" value="Female"> Female<br>
      <input type="radio" name="gender" value="Other"> Other<br>
    </div>
    <div class="input-group">
      <label>Contact:</label>
      <input type="number" name="contact">
    </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="signup">Sign Up</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
    </fieldset>
  </form>
</body>
</html>
