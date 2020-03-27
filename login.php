
<?php

require_once '_header.php';
require_once 'config.php';


if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    
    $query = "SELECT * FROM `users` WHERE `email` = '{$email}' AND `password` = '{$pass}' LIMIT 1";
    $result= mysqli_query($con, $query);
    
    if(mysqli_num_rows($result) == 1) {
        
        $userRow = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $userRow['id'];

        header("location: dailyform.php");
        exit();
        
    } else {
        echo "Check your email and/or password";
    }
    
}

?>
<form method="POST" action="">
  <div class="form-group">
    <label for="formGroupExampleInput">E-mail</label>
    <input type="email" name="email" class="form-control" id="formGroupExampleInput" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Password</label>
    <input type="password" name="password" class="form-control"  placeholder="Password">
  </div
    <div class="form-group">
    <input type="submit" name="submit" class="form-control" placeholder="Password">
  </div
  
</form>