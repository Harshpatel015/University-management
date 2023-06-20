<?php
$email = $_POST['email'];
$password = $_POST['password'];
$conn =mysqli_connect("localhost","root","")or die ("giuy");
$db =mysqli_select_db($conn,"registration");
$query="select * from data where Email='$email' and Password='$password' ";
$result=mysqli_query($conn,$query);
$number=mysqli_num_rows($result);
if($number==1){
   echo "<script>
   alert('successfully Login');
   window.location.assign('time.html');
   </script>";
}
else{
    echo "<script>
   alert('Wrong email and password');
   window.location.assign('sign.html');
   </script>";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Manav's Result</title>
    <link rel="stylesheet" href="time.css">
  </head>
  <body>
    <h1>Manav's Result</h1>
    <div class="result">
      <img src="PHOTO1/per3.jpg" alt="Manav's Photo">
      <?php
            while($data = mysqli_fetch_assoc($result)){
            ?>
            <div class="r111">
            <p class="r211"><?php echo $data['Physics'] ?></p>
            <p class="r311"><?php echo $data['review'] ?></p>
            <p class="r611"><?php echo 'Rating : ';echo $result['rating'];echo'/5' ?></p>
            </div>
            <?php
            }
        ?>
      <div class="result-status">
        <p class="pass">Congratulations, Manav! You have passed</p>
      </div>
    </div>
  </body>
</html>