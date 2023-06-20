<?php
$conn = mysqli_connect("localhost", "root", "", "registration");
if ($conn == false) {
    die("error" . mysqli_connect_error());
}
$name = $_POST["name"];
$father = $_POST["father"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$add = $_POST["address"];
$gender = $_POST["gender"];
$course = $_POST["course"];
$hsc = $_POST["hsc"];
$sql = "INSERT INTO new_admission VALUES('$name','$phone','$email','$course','$hsc','$add','$father','$gender');";
if (mysqli_query($conn, $sql)) {
    echo "<script>
   alert('Admission form submitted');
   window.location.assign('home.html');
   </script>";
    $stmt->close();
    $conn->close();
} else {
    echo ("ERROR: Hush ! Sorry $sql " . mysqli_error($conn));
}
mysqli_close($conn);
?>