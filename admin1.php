
<?php
session_start();
$teacher = $_POST["teacher"];
$work = $_POST["exp"];
$conn =mysqli_connect("localhost","root","")or die ("error");
$db =mysqli_select_db($conn,"registration"); 
$query = "INSERT INTO admin (teachername,experience) VALUES ('$teacher','$work')";
    if (mysqli_query($conn, $query))
    {
        echo "<script>
        alert ('Added Successfully') 
        window.location.assign('admin.php')
        </script>";
    }
    else
    {
        echo"<script>
        alert ('Plaese Try again later !!') 
        </script>";
    }
    mysqli_close($conn);
?>
