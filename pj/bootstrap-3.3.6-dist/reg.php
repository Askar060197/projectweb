 <?php
  $db = mysql_connect("localhost", "phpregistr", "123");
  mysql_select_db("mysql", $db);
  if(isset($_POST['Log'])) {
    $email = $_POST['email'];
    $user_password = $_POST['user_password'];
    $confirm_password = $_POST['confirm_password'];
    }  
    if ($user_password == $confirm_password) {
      echo "Vse normalno";
    }
    mysql_query("INSERT INTO userdb (login,password) VALUES ('$email', '$user_password')");
    else {
      echo "Ne normalno";
    }
 ?>
<form action="reg.php" method="POST">
    <div class="input-group input-group-sm">
  <span class="input-group-addon" id="sizing-addon3">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon3">
</div>

      First name
      <input type="text" name="first_name" size="30" required><br />
      Last name
      <input type="text" name="last_name" size="30" required><br />
      Email
      <input type="text" name="email" placeholder="Username" size="30" required><br />
      Password
      <input type="password" name="user_password" size="30" required><br />
      Confirm password
      <input type="password" name="confirm_password" size="30" required><br />
      <input type="button" value="submit" name="Log"></input><br />
      <a href="#" class="btn btn-primary btn-lg active" role="button">Sign in</a>
      <a href="#" class="btn btn-default btn-lg active" role="button">Back</a>
    </form>