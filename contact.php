<?php 
include("header.php");
include("connect.php"); 
error_reporting(0);
 $submit=$_POST['submit'];
    if(isset($_POST['submit'])){
        $first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];


 $insert="INSERT INTO `form`(`id`,`first_name`, `last_name`, `email`, `phone`, `message`) VALUES ('','$first_name','$last_name','$email','$phone','$message')";
        mysqli_query($conn,$insert);
        header("location:message.php");
}

?>

<div class="heading">

<h2 class="text-center">Contact Us</h2>
    </div>
<div class="contact-form">
  
  <form method="post">
  <label >First name:</label><br>
  <input type="text" name="first_name"  required><br>
  <label >Last name:</label><br>
  <input type="text" name="last_name"  required><br>
  <label for="lname">Email:</label><br>
  <input type="text" name="email"  required>
  <label >Phone:</label><br>
  <input type="text" name="phone"  required><br>
  <label>Message</label>
   <textarea name="message" rows="3" required></textarea><br><br>
   <input type="submit" name="submit" value="Submit">
</form>
  
 
  
</div>
<br><br>

<?php include("footer.php") ?>