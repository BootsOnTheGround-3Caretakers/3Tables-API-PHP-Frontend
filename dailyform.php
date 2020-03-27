<?php

require_once 'config.php';
require_once '_header.php';

if (!isset($_SESSION['user_id'])) {
    header("location: login.php");
    die("Please login to view this page.");
}


$query = "SELECT * FROM `users` WHERE `id` = '{$_SESSION['user_id']}' LIMIT 1";
$result = mysqli_query($con, $query);
$uRow = mysqli_fetch_assoc($result);




?>

<h2>Hello, Please fill out your Daily #3HelpingHands form.</h2>
<form method="POST" action="" autocomplete="off">
    <div class="form-group">
        <label>Full Name</label>
        <input type="text" name="name" class="form-control" value="<?= $uRow['name'] ?>" disabled>
    </div>
    <div class="form-group">
        <label>Tell us what you are looking for</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option value="1">I Need Help</option>
            <option value="2">I Want To Help</option>
            <option value="3">Both</option>
        </select>
    </div>


    <h5>Where are you located?</h5>
    <div class="form-group">
        <label>Zip Code</label>
        <input type="text" name="zip" class="form-control" placeholder="Your Zipcode">
    </div>
    <div class="form-group">
        <label>City</label>
        <input type="text" name="city" class="form-control" placeholder="Your City">
    </div>
    <div class="form-group">
        <label>State/Region</label>
        <input type="text" name="city" class="form-control" placeholder="Your City">
    </div>
    <div class="form-group">
        <label>Country</label>
        <input type="text" name="name" class="form-control" value="<?= $uRow['country'] ?>" disabled>
    </div>



    <h5>Tell us more.</h5>
    <div class="form-group">
        <label><b>What services would you be willing to Provide or like to
                receive?</b></label>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Physical">
            <label class="form-check-label">
                Physical volunteering: Help with errands, such as getting groceries or going to the post office.
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Physical">
            <label class="form-check-label">
                Communication based volunteering: Phone calls/texts for mental well-being during isolation.
            </label>
        </div>
    </div>
    
<label><b>Are you ok with sharing your details with your potential matches?</b></label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    No
  </label>
</div>
        <br>
          <div class="form-group">
    <label for="exampleFormControlTextarea1">Tell us about yourselves. <i>(optional)</i></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
  </div>
  
            <div class="form-group">
    <label for="exampleFormControlTextarea1">Enter as many hastags as you wish. <i>(optional)</i></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
  </div>
    
    <div class="form-group">
        <input type="submit" name="submit" class="form-control">
    </div>

</form>