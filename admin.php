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
    <title>Admin</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        body{ 
        /* background-image: linear-gradient(135deg, #FFF5EE 10%, #DC143C 100% ); */
        background-image: url(PHOTO1/back7.jpg);
        margin: 0;
        padding: 0;
        background-size: cover;
        overflow: hidden;
        position: relative;
        }

        .work{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 2%;
            border-radius: 10px;
            
        }

        .work1{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 2%;
            border: 2px solid black;
            border-radius: 10px;
            margin-bottom: 2%;
            width: 50%;
            margin-left: 25%;
        }

        label{
            font-size: 20px;
            font-weight: 600;
        }

        .logo2{
            font-size: 25px;
            font-weight: 700;
            text-align: center;
        }

        .box{
            margin-bottom: 5%;
            width: 100%;
            justify-content: center;
            display: flex;
            align-items: center;
        }
table{
    width: 100%;
  margin-left: 40px;
}
        tr,td,th{
            padding: 10px;
        }
    </style>
</head>

<body>
        <!-- <p class="logo">Admin</p>
        <a href="logout.php"><input class="logout" type="submit" value="SignOut"></a>
    <nav class="menu" >
        <ul style="margin-left:16%;">
            <li class="a1"><a href="#review">Reviews</a></li>
            <li class="a1"><a href="#payment">Payment</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </nav> -->

    <div class="work">
        <div class=box>
        <form action="admin1.php" method="post">
           <label for="">Teacher Name :</label> 
           <input type="text" name="teacher" required>
           <label for="">Experience</label>
           <input type="text" name="exp" required>
          
           <input type="submit" value="Add">
        </form>
        </div>
    </div>

    <div class="work1">
        <div class="compo3" id="review">
            <p class="logo2">✵ Teacher information ✵ </p>
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
                        
                        <td><a href=delete.php?id=$result[id]><input class='delete' type='submit' value='Delete'></a></td>
                        </tr>";
                    }
                ?>
            </table >
        </div>
    </div>
</div>
</body>
</html>