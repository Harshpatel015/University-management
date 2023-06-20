<?php
session_start();
$conn =mysqli_connect("localhost","root","")or die ("error");
$db =mysqli_select_db($conn,"registration"); 
$query = "SELECT * FROM admin";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nirvana university</title>
    <link rel="stylesheet" href="teacher.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="header">
        <nav>
            <img src="PHOTO1/image.png" height="50%" width="50%">
            <div class="links">
                <ul>
                    <li><a href="home.html">HOME</a></li>
                    <li><a href="about.html">ABOUT US</a></li>
                    <li><a href="courses.html">COURSES</a></li>
                    <li><a href="teachers.php">FACULTY</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <li><a href="login.html">RESULT</a></li>
                    <li><a href="addmision.html">NEW ADMISSION</a></li>
                </ul>
            </div>
        </nav>

        <div class="text-box">
    <p>⚛ FACULTY ⚛</p>
    <div class="text-box-under">
    <p1>Welcome to nirvana University!

        
The faculty at a university is a dynamic and diverse group of individuals who play a crucial role in shaping the educational experience for students. Comprised of professors, researchers, and experts in their respective fields, the faculty members bring a wealth of knowledge, experience, and passion to the university community.</p1><br><br><br>
    </div> 
</div>
    </section>

    <!-- faculty -->

    <section class="plac">
    <h1>🔆 Higher Authority 🔆</h1>
<div class="row">
    <div class="placement-box">
        <div class="student-info">
          <h2>Dr.Jignesh Vaghasia</h2>
          <img src="PHOTO1/sir.jpeg" alt="Student Photo">
        </div>
        <div class="company-info"><br><br>
          <h3>PRINCIPAL</h3>
        </div>
      </div>

      <div class="placement-box">
        <div class="student-info">
          <h2>Chirag Patel</h2>
          <img src="PHOTO1/chirag.jpeg" alt="Student Photo">
        </div>
        <div class="company-info"><br><br>
          <h3>HOD</h3>
        </div>
      </div>
</div>

<div class="work">
        <div class="compo3" id="review">
            <p class="logo2">👨‍💼 Teacher information 👨‍💼</p>
            <div class="box">
            <table>
                <tr class='tr1'>
                    <th>TeacherName</th>
                    <th>Experience</th>
                    <th></th>
                </tr>
                <?php
                    while($result = mysqli_fetch_assoc($data)){
                        echo 
                        "<tr style='text-align:justify'>
                        <td style='border:1px solid #ccc;text-align:center'>$result[teachername]</td>
                        <td style='border:1px solid #ccc;text-align:center'>$result[experience]</td>
                        </tr>";
                    }
                ?>
            </table ><br><br><br><br><br>
            </div>
        </div>
</div>

<section class="last">
        <div class="number">
          <ul>
            <li><a href="courses.html"><</a><a href="contact.html">></a></li>
          </ul>
        </div>
</section>

<body>
<html>